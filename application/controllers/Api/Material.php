<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Material extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Material_model', 'm_material');
    }

    public function index()
    {
        $result = $this->m_material->all('mst_product');
        $dataArray = array(
            'status'    => 'Success',
            'message'   => 'Result Data Material',
            'data'      => $result->result_array()
        );
        $this->output
            ->set_status_header(200, 'Success')
            ->set_content_type('application/json')
            ->set_output(json_encode($dataArray));
    }

    public function get_by_id()
    {
        $result = $this->m_material->getById($this->input->get('id'));
        $dataArray = array(
            'status'    => 'Success',
            'message'   => 'Result Data Material',
            'data'      => $result->result_array()
        );
        $this->output
            ->set_status_header(200, 'Success')
            ->set_content_type('application/json')
            ->set_output(json_encode($dataArray));
    }

    public function add()
    {
        try {
            $inputData = array(
                'category_id'   => $this->input->post('category_id'),
                'product_name'   => $this->input->post('product_name'),
                'product_unit'   => $this->input->post('product_unit'),
                'product_price'   => $this->input->post('product_price'),
                'product_margin_price'   => $this->input->post('product_margin_price'),
                'product_after_margin_price'   => $this->input->post('product_after_margin_price'),
                'product_description'   => $this->input->post('product_description'),
            );
            $this->main_model->insert($inputData, 'mst_product');
            $dataArray = array(
                'status'    => 'Success',
                'message'   => 'Input data material successed'
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
                ->set_status_header(500, 'Input data material failed')
                ->set_content_type('application/json')
                ->set_output(json_encode($dataArray));
        }
    }

    public function edit()
    {
        try {
            //Data Material Update
            $updateData = array(
                'category_id'   => $this->input->post('category_id'),
                'product_name'   => $this->input->post('product_name'),
                'product_unit'   => $this->input->post('product_unit'),
                'product_price'   => $this->input->post('product_price'),
                'product_margin_price'   => $this->input->post('product_margin_price'),
                'product_after_margin_price'   => $this->input->post('product_after_margin_price'),
                'product_description'   => $this->input->post('product_description'),
            );

            //Update data material
            $this->main_model->update(
                array('product_id'=>$this->input->post('product_id')),
                $updateData,
                'mst_product');

            $responseArray = array(
                'status'    => 'Success',
                'message'   => 'Success update data material'
            );
            $this->output
                ->set_status_header(200, 'Success')
                ->set_content_type('application/json')
                ->set_output(json_encode($responseArray));
        } catch (\Throwable $th) {
            $this->output
                ->set_status_header(500, 'Update data material failed')
                ->set_content_type('application/json')
                ->set_output(json_encode($responseArray));
        }
    }

    public function delete()
    {
        try {
            //Delete data set deleted = 1
            $this->main_model->update(
                array('product_id'=>$this->input->post('id')),
                array('deleted'=>1),
                'mst_product');
            $responseArray = array(
                'status'    => 'Success',
                'message'   => 'Success delete data material'
            );
            $this->output
                ->set_status_header(200, 'Success')
                ->set_content_type('application/json')
                ->set_output(json_encode($responseArray));
        } catch (\Throwable $th) {
            $this->output
                ->set_status_header(500, 'delete data material failed')
                ->set_content_type('application/json')
                ->set_output(json_encode($responseArray));
        }
    }
}
