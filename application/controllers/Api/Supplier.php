<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplier extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $result = $this->main_model->viewWhereOrdering('mst_supplier_vendor', array('deleted'=>0), 'vendor_id', 'DESC');
        $responseArray = array(
            'status'    => 'Success',
            'message'   => 'Result Data Supplier',
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
            $this->main_model->insert($this->input->post(), 'mst_supplier_vendor');
            $responseArray = array(
                'status'    => 'Success',
                'message'   => 'Success input data supplier'
            );
            $this->output
                ->set_status_header(200, 'Success')
                ->set_content_type('application/json')
                ->set_output(json_encode($responseArray));
        } catch (\Throwable $th) {
            $this->output
                ->set_status_header(500, 'Input data supplier failed')
                ->set_content_type('application/json')
                ->set_output(json_encode($responseArray));
        }
    }

    public function get_by_id()
    {
        $result = $this->main_model->view_where('mst_supplier_vendor', array('vendor_id' => $this->input->get('id')));
        $responseArray = array(
            'status'    => 'Success',
            'message'   => 'Result Data Supplier',
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
            //Data Supplier Update
            $dataSupplier = array(
                'vendor_name'   => $this->input->post('vendor_name'),
                'vendor_phone_number'   => $this->input->post('vendor_phone_number'),
                'vendor_pic_email'   => $this->input->post('vendor_pic_email'),
                'vendor_pic_name'   => $this->input->post('vendor_pic_name'),
                'vendor_top'   => $this->input->post('vendor_top'),
                'vendor_address'   => $this->input->post('vendor_address'),
            );

            //Update data supplier
            $this->main_model->update(
                array('vendor_id'=>$this->input->post('vendor_id')),
                $dataSupplier,
                'mst_supplier_vendor');

            $responseArray = array(
                'status'    => 'Success',
                'message'   => 'Success input data supplier'
            );
            $this->output
                ->set_status_header(200, 'Success')
                ->set_content_type('application/json')
                ->set_output(json_encode($responseArray));
        } catch (\Throwable $th) {
            $this->output
                ->set_status_header(500, 'Input data supplier failed')
                ->set_content_type('application/json')
                ->set_output(json_encode($responseArray));
        }
    }

    public function delete()
    {
        try {
            // update($where, $data, $table)
            $this->main_model->update(
                array('vendor_id'=>$this->input->post('id')),
                array('deleted'=>1),
                'mst_supplier_vendor');
            $responseArray = array(
                'status'    => 'Success',
                'message'   => 'Success delete data supplier'
            );
            $this->output
                ->set_status_header(200, 'Success')
                ->set_content_type('application/json')
                ->set_output(json_encode($responseArray));
        } catch (\Throwable $th) {
            $this->output
                ->set_status_header(500, 'delete data supplier failed')
                ->set_content_type('application/json')
                ->set_output(json_encode($responseArray));
        }
    }
}