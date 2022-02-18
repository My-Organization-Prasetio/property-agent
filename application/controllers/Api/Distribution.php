<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Distribution extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('distribution_model', 'm_distribution');
    }

    public function detail_by_request_id()
    {
        $detailRequest = $this->m_distribution->detail_by_request_id($this->input->get('id'));
        $dataArray = array(
            'status'    => 'Success',
            'message'   => 'Result data draft detail for request material.',
            'data'      => $detailRequest->result_array()
        );
        $this->output
            ->set_status_header(200, 'Success')
            ->set_content_type('application/json')
            ->set_output(json_encode($dataArray));
    }
}