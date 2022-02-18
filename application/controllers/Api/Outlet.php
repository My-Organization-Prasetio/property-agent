<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Outlet extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $result = $this->main_model->viewWhereOrdering('mst_branch_outlet', array('deleted'=>0), 'branch_id', 'DESC');
        $responseArray = array(
            'status'    => 'Success',
            'message'   => 'Result Data Outlet',
            'data'      => $result->result_array()
        );
        $this->output
            ->set_status_header(200, 'Success')
            ->set_content_type('application/json')
            ->set_output(json_encode($responseArray));
    }

    public function add()
    {
        try {
            $this->main_model->insert($this->input->post(), 'mst_branch_outlet');
            $responseArray = array(
                'status'    => 'Success',
                'message'   => 'Success input data outlet'
            );
            $this->output
                ->set_status_header(200, 'Success')
                ->set_content_type('application/json')
                ->set_output(json_encode($responseArray));
        } catch (\Throwable $th) {
            $this->output
                ->set_status_header(500, 'Input data outlet failed')
                ->set_content_type('application/json')
                ->set_output(json_encode($responseArray));
        }
    }

    public function get_by_id()
    {
        $result = $this->main_model->view_where('mst_branch_outlet', array('branch_id' => $this->input->get('id')));
        $responseArray = array(
            'status'    => 'Success',
            'message'   => 'Result Data Outlet',
            'data'      => $result->result_array()
        );
        $this->output
            ->set_status_header(200, 'Success')
            ->set_content_type('application/json')
            ->set_output(json_encode($responseArray));
    }

    public function edit()
    {
        try {
            //Data Oulet Update
            $dataOutlet = array(
                'branch_name'   => $this->input->post('branch_name'),
                'branch_spv'   => $this->input->post('branch_spv'),
                'branch_phone_number'   => $this->input->post('branch_phone_number'),
                'branch_address'   => $this->input->post('branch_address'),
                'branch_city'   => $this->input->post('branch_city'),
            );

            //Update data outlet
            $this->main_model->update(
                array('branch_id'=>$this->input->post('branch_id')),
                $dataOutlet,
                'mst_branch_outlet');

            $responseArray = array(
                'status'    => 'Success',
                'message'   => 'Success input data outlet'
            );
            $this->output
                ->set_status_header(200, 'Success')
                ->set_content_type('application/json')
                ->set_output(json_encode($responseArray));
        } catch (\Throwable $th) {
            $this->output
                ->set_status_header(500, 'Input data outlet failed')
                ->set_content_type('application/json')
                ->set_output(json_encode($responseArray));
        }
    }

    public function delete()
    {
        try {
            // update($where, $data, $table)
            $this->main_model->update(
                array('branch_id'=>$this->input->post('id')),
                array('deleted'=>1),
                'mst_branch_outlet');
            $responseArray = array(
                'status'    => 'Success',
                'message'   => 'Success delete data outlet'
            );
            $this->output
                ->set_status_header(200, 'Success')
                ->set_content_type('application/json')
                ->set_output(json_encode($responseArray));
        } catch (\Throwable $th) {
            $this->output
                ->set_status_header(500, 'delete data outlet failed')
                ->set_content_type('application/json')
                ->set_output(json_encode($responseArray));
        }
    }
}