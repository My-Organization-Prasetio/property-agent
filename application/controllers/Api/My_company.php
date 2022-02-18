<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_company extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function edit()
    {
        try {
            //Data My Company Update
            $updateData = array(
                'category_id'   => $this->input->post('category_id'),
                'product_name'   => $this->input->post('product_name'),
                'product_unit'   => $this->input->post('product_unit'),
                'product_price'   => $this->input->post('product_price'),
                'product_margin_price'   => $this->input->post('product_margin_price'),
                'product_after_margin_price'   => $this->input->post('product_after_margin_price'),
                'product_description'   => $this->input->post('product_description'),
            );

            //Update data my company
            $this->main_model->update(
                array('company_id'=>1),
                $this->input->post(),
                'my_company');

            $responseArray = array(
                'status'    => 'Success',
                'message'   => 'Success update data my company'
            );
            $this->output
                ->set_status_header(200, 'Success')
                ->set_content_type('application/json')
                ->set_output(json_encode($responseArray));
        } catch (\Throwable $th) {
            $this->output
                ->set_status_header(500, 'Update data my company failed')
                ->set_content_type('application/json')
                ->set_output(json_encode($responseArray));
        }
    }
}
