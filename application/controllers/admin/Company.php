<?php
defined('BASEPATH') or exit('No direct script access allowed');
include APPPATH . 'controllers/admin/Admin_main_controller.php';

class Company extends Admin_main_controller
{
    function __construct()
	{
		parent::__construct();
        $this->load->model('property_model', 'm_property');
		$this->check_login();
	}

    public function index()
    {
        $properties = $this->m_property->getOffset(0, 5)->result_array();
        $data = array(
            'content'           => 'admin/pages/company_v',
            'breadcrumb'        => '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                                    <span class="breadcrumb-item active">Company</span>',
            'js_file'              => 'company',
            'data'              => array(
                'my_company'    => $this->main_model->view('my_company')->row(),
                'properties'=> $properties
            )
        );
        $this->template->render_view('admin/template_admin_v', $data);
    }

}