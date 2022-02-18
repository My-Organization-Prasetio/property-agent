<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model', 'm_auth');
    }

    public function index()
    {
        echo json_encode("Welcome :)");
    }

    public function login()
    {
        $where = array(
            'mst_user.user_name' => $this->input->post('username'),
            'user_level_management.user_level_status' => 'active'
        );
        $result = $this->m_auth->view_by_username($where);
        if ($result->num_rows() == 1) {
            $user = $result->row();
            try {
                $verify = $this->verifyHash($this->input->post('password'), $user->user_password);
                if ($verify == true) {
                    $user_session = array(
                        SHORT_APP_NAME.'_'.'loginstatus' => true,
                        SHORT_APP_NAME.'_'.'userid'  => $user->user_id,
                        SHORT_APP_NAME.'_'.'username'  => $user->user_name,
                        SHORT_APP_NAME.'_'.'fullname'  => $user->user_full_name,
                        SHORT_APP_NAME.'_'.'email'     => $user->user_email,
                        SHORT_APP_NAME.'_'.'level'     => $user->user_level_position,
                        SHORT_APP_NAME.'_'.'photo'     => $user->user_photo
                    );
                    $this->session->set_userdata($user_session);
                    $dataArray = array(
                        'status'    => 'Ok',
                        'message'   => 'Success Login.',
                        'data'      => $user_session
                    );
                    $this->output
                        ->set_status_header(200, 'Success')
                        ->set_content_type('application/json')
                        ->set_output(json_encode($dataArray));
                } else {
                    $dataArray = array(
                        'status'    => 'Error',
                        'message'   => 'Wrong username or password.'
                    );
                    $this->output
                        ->set_status_header(401, 'Unauthorized')
                        ->set_content_type('application/json')
                        ->set_output(json_encode($dataArray));
                }
            } catch (\Throwable $th) {
                $dataArray = array(
                    'status'    => 'Error',
                    'message'   => $th
                );
                $this->output
                    ->set_status_header(501, 'Error')
                    ->set_content_type('application/json')
                    ->set_output(json_encode($dataArray));
            }
        } else {
            $dataArray = array(
                'status'    => 'Error',
                'message'   => 'Wrong username or password.'
            );
            $this->output
                ->set_status_header(401, 'Unauthorized')
                ->set_content_type('application/json')
                ->set_output(json_encode($dataArray));
        }
    }

    public function change_password()
    {
        // try {
        if (!empty($this->session->userdata(SHORT_APP_NAME.'_'.'username'))) {
            $where = array(
                'mst_user.user_name' => $this->session->userdata(SHORT_APP_NAME.'_'.'username'),
                'user_level_management.user_level_status' => 'active'
            );
            $result = $this->m_auth->view_by_username($where);

            if ($result->num_rows() == 1) {
                $user = $result->row();
                $verify = $this->verifyHash($this->input->post('old_password'), $user->user_password);
                if ($verify == true) {
                    //Update password
                    $a = $this->main_model->update(
                        array('user_name' => $this->session->userdata(SHORT_APP_NAME.'_'.'username')),
                        array('user_password' => $this->hash($this->input->post('new_password'))),
                        'mst_user'
                    );
                    $responseArray = array(
                        'status'    => 'Success',
                        'message'   => 'Success update password'
                    );

                    $this->output
                        ->set_status_header(200, 'OK')
                        ->set_content_type('application/json')
                        ->set_output(json_encode($responseArray));
                } else {
                    $dataArray = array(
                        'status'    => 'Error',
                        'message'   => 'Wrong password. Please make sure your password and try again.'
                    );
                    $this->output
                        ->set_status_header(401, 'Wrong password. Please make sure your old password and try again.')
                        ->set_content_type('application/json')
                        ->set_output(json_encode($dataArray));
                }
            }
        } else {
            $dataArray = array(
                'status'    => 'Error',
                'message'   => 'Please login again.'
            );
            $this->output
                ->set_status_header(401, 'Unauthorized, Please login again.')
                ->set_content_type('application/json')
                ->set_output(json_encode($dataArray));
        }
    }

    public function change_photo()
    {
        if (!empty($this->session->userdata(SHORT_APP_NAME.'_'.'username'))) {
            $config['upload_path'] = "./public/images/profile/"; //path folder file upload
            $config['allowed_types'] = 'gif|jpg|png'; //type file yang boleh di upload
            $config['encrypt_name'] = TRUE; //enkripsi file name upload

            $this->load->library('upload', $config); //call library upload 
            if ($this->upload->do_upload("photo")) { //upload file
                $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
                $image_name = $data['upload_data']['file_name']; //set file name ke variable image

                //UPDATE IMAGE ON DATABASE
                $this->main_model->update(
                    array('user_name' => $this->session->userdata(SHORT_APP_NAME.'_'.'username')),
                    array('user_photo' => $image_name),
                    'mst_user'
                );

                //SETT SESSION PHOTO
                $user_session = array(
                    SHORT_APP_NAME.'_'.'photo'     => $image_name
                );
                $this->session->set_userdata($user_session);

                $responseArray = array(
                    'status'    => 'Success',
                    'message'   => 'Success upload image',
                    'data'      => array(
                        'photo' => $image_name
                    )
                );

                $this->output
                    ->set_status_header(200, 'OK')
                    ->set_content_type('application/json')
                    ->set_output(json_encode($responseArray));
            } else {
                $dataArray = array(
                    'status'    => 'Error',
                    'message'   => 'Error Upload.'
                );
                $this->output
                    ->set_status_header(500, 'Error when upload image, please try again.')
                    ->set_content_type('application/json')
                    ->set_output(json_encode($dataArray));
            }
        } else {
            $dataArray = array(
                'status'    => 'Error',
                'message'   => 'Please login again.'
            );
            $this->output
                ->set_status_header(401, 'Unauthorized, Please login again.')
                ->set_content_type('application/json')
                ->set_output(json_encode($dataArray));
        }
    }

    public function hash($password)
    {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        return $hash;
    }

    //verify password
    public function verifyHash($password, $vpassword)
    {
        if (password_verify($password, $vpassword)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
