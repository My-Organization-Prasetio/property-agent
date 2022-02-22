<?php
defined('BASEPATH') or exit('No direct script access allowed');
include APPPATH . 'controllers/api/Api_main_controller.php';

class Owner extends Api_main_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('main_model', 'm_main');
        $this->load->library('lib_main');
        $this->check_login('admin');
    }

    // public function index()
    // {
    //     $result = $this->m_main->viewWhereOrdering('mst_owner', array('deleted' => 0), 'owner_name', 'ASC');
    //     $dataArray = array(
    //         'status'    => 'Success',
    //         'message'   => 'Result Data Owner',
    //         'data'      => $result->result_array()
    //     );
    //     $this->output
    //         ->set_status_header(200, 'Success')
    //         ->set_content_type('application/json')
    //         ->set_output(json_encode($dataArray));
    // }

    // public function get_by_id()
    // {
    //     $result = $this->m_main->viewWhereOrdering('mst_owner', array('deleted' => 0, 'owner_id' => $this->input->get('id')), 'owner_name', 'ASC');
    //     $dataArray = array(
    //         'status'    => 'Success',
    //         'message'   => 'Result data owner',
    //         'data'      => $result->result_array()
    //     );
    //     $this->output
    //         ->set_status_header(200, 'Success')
    //         ->set_content_type('application/json')
    //         ->set_output(json_encode($dataArray));
    // }

    public function add()
    {
        try{
                $inputData = array(
                    'property_title'   => $this->input->post('property_title'),
                    'property_description'   => $this->input->post('property_description'),
                    'asset_category_id'   => $this->input->post('asset_category_id'),
                    'sale_type'   => $this->input->post('sale_type'),
                    'address'   => $this->input->post('address'),
                    'unit_number'   => $this->input->post('unit_number'),
                    'area_id'   => $this->input->post('area_id'),
                    'city_id'   => $this->input->post('city_id'),
                    'land_area'   => $this->input->post('land_area'),
                    'building_area'   => $this->input->post('building_area'),
                    'bedroom'   => $this->input->post('bedroom'),
                    'bathroom'   => $this->input->post('bathroom'),
                    'price'   => $this->input->post('price'),
                    'agent_id'   => $this->input->post('agent_id'),
                    'fee'   => $this->input->post('fee'),
                    'fee'   => $this->input->post('fee'),
                    'created_by'    => $this->session->userdata(SHORT_APP_NAME.'_'.'userid'),
                    'created_by'    => $this->session->userdata(SHORT_APP_NAME.'_'.'userid')
                );
                $this->main_model->insert($inputData, 'property');
                $dataArray = array(
                    'status'    => 'Success',
                    'message'   => 'Berhasil menambahkan properti'
                );
                $this->output
                    ->set_status_header(200, 'Success')
                    ->set_content_type('application/json')
                    ->set_output(json_encode($dataArray));
        } catch (\Throwable $th) {
            $dataArray = array(
                'status'    => 'Error',
                'message'   => $th
            );
            $this->output
                ->set_status_header(500, 'Gagal menambahkan properti')
                ->set_content_type('application/json')
                ->set_output(json_encode($dataArray));
        }
    }

    // public function edit()
    // {
    //     try {
    //         $updateData = array(
    //             'owner_name'   => $this->input->post('owner_name'),
    //             'owner_type'   => $this->input->post('owner_type'),
    //             'id_number_type'   => $this->input->post('id_number_type'),
    //             'owner_phone_number'   => $this->input->post('owner_phone_number'),
    //             'owner_email'   => $this->input->post('owner_email'),
    //             'address'   => $this->input->post('address'),
    //             'updated_by'    => $this->session->userdata(SHORT_APP_NAME.'_'.'userid')
    //         );

    //         //Update data user
    //         $this->main_model->update(
    //             array('owner_id'=>$this->input->post('owner_id')),
    //             $updateData,
    //             'mst_owner');

    //         $responseArray = array(
    //             'status'    => 'Success',
    //             'message'   => 'Berhasil memperbarui data pemilik'
    //         );
    //         $this->output
    //             ->set_status_header(200, 'Success')
    //             ->set_content_type('application/json')
    //             ->set_output(json_encode($responseArray));
    //     } catch (\Throwable $th) {
    //         $this->output
    //             ->set_status_header(500, 'Gagal memperbarui data pemilik')
    //             ->set_content_type('application/json')
    //             ->set_output(json_encode($responseArray));
    //     }
    // }

    // public function delete()
    // {
    //     try {
    //         //Delete data set deleted = 1
    //         $this->main_model->update(
    //             array('owner_id'=>$this->input->post('id')),
    //             array('deleted'=>1),
    //             'mst_owner');
    //         $responseArray = array(
    //             'status'    => 'Success',
    //             'message'   => 'Berhasil hapus data'
    //         );
    //         $this->output
    //             ->set_status_header(200, 'Success')
    //             ->set_content_type('application/json')
    //             ->set_output(json_encode($responseArray));
    //     } catch (\Throwable $th) {
    //         $this->output
    //             ->set_status_header(500, 'Hapus data gagal')
    //             ->set_content_type('application/json')
    //             ->set_output(json_encode($responseArray));
    //     }
    // }
}
