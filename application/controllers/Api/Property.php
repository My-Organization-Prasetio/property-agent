<?php
defined('BASEPATH') or exit('No direct script access allowed');
include APPPATH . 'controllers/api/Api_main_controller.php';

class Property extends Api_main_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('main_model', 'm_main');
        $this->load->model('property_model', 'm_property');
        $this->load->model('area_model', 'm_area');
        $this->load->library('lib_main');
        $this->check_login('admin');
    }

    public function index()
    {
        $result = $this->m_property->all();
        $dataArray = array(
            'status'    => 'Success',
            'message'   => 'Result Data Property',
            'data'      => $result->result_array()
        );
        $this->output
            ->set_status_header(200, 'Success')
            ->set_content_type('application/json')
            ->set_output(json_encode($dataArray));
    }

    public function get_by_id()
    {
        //Get property by Property ID
        $result = $this->m_main->viewWhereOrdering('property', array('deleted' => 0, 'property_id' => $this->input->get('id')), 'property_id', 'ASC');
        $result_data = $result->row();
        //Get Area List By City ID
        $areas = $this->m_area->getByCity($result_data->city_id);

        $dataArray = array(
            'status'    => 'Success',
            'message'   => 'Result data properti',
            'data'      => array(
                'property'    => $result_data,
                'areas'      => $areas->result_array()
            )
        );
        $this->output
            ->set_status_header(200, 'Success')
            ->set_content_type('application/json')
            ->set_output(json_encode($dataArray));
    }

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
                    'owner_id'   => $this->input->post('owner_id'),
                    'fee'   => $this->input->post('fee'),
                    'created_by'    => $this->session->userdata(SHORT_APP_NAME.'_'.'userid'),
                    'updated_by'    => $this->session->userdata(SHORT_APP_NAME.'_'.'userid')
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

    public function edit()
    {
        try {
            $updateData = array(
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
                'owner_id'   => $this->input->post('owner_id'),
                'fee'   => $this->input->post('fee'),
                'updated_by'    => $this->session->userdata(SHORT_APP_NAME.'_'.'userid')
            );

            //Update data user
            $this->main_model->update(
                array('property_id'=>$this->input->post('property_id')),
                $updateData,
                'property');

            $responseArray = array(
                'status'    => 'Success',
                'message'   => 'Berhasil memperbarui data properti'
            );
            $this->output
                ->set_status_header(200, 'Success')
                ->set_content_type('application/json')
                ->set_output(json_encode($responseArray));
        } catch (\Throwable $th) {
            $this->output
                ->set_status_header(500, 'Gagal memperbarui data properti')
                ->set_content_type('application/json')
                ->set_output(json_encode($responseArray));
        }
    }

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

    public function page()
    {
        //pagination config
        $config['perpage'] = 12;
        $config['offset'] = empty($this->uri->segment(4)) ?  1 : $this->uri->segment(4) == 1 ? 1 : ($this->uri->segment(4)-1)*$config['perpage'];
        $showing = $config['offset']+$config['perpage'];

        //Get property by Property page
        $properties = $this->m_property->getOffset($config['offset'], $config['perpage']);
        //Get total rows property
        $total_properties = $this->m_property->totalRows()->row();
        $dataArray = array(
            'status'    => 'Success',
            'message'   => 'Result data properti',
            'total'     => $total_properties->total_rows,
            'count'     => $properties->num_rows(),
            'page'      => empty($this->uri->segment(4)) ?  1 : $this->uri->segment(4),
            'per_page'  => $config['perpage'],
            'showing'   => $config['offset'].'-'.$showing,
            'data'      => $properties->result_array(),
            'post_data' => $this->uri->segment(4)
        );
        $this->output
            ->set_status_header(200, 'Success')
            ->set_content_type('application/json')
            ->set_output(json_encode($dataArray));
    }
}
