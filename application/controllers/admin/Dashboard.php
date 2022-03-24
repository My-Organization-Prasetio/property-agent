<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include APPPATH . 'controllers/admin/Admin_main_controller.php';

class Dashboard extends Admin_main_controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('Main_model', 'mainmodel');
        $this->load->model('User_model', 'm_user');
        $this->load->model('property_model', 'm_property');
		$this->check_login();
	}

	public function index()
	{
        $agent = $this->m_user->agent()->result_array();
        $admin = $this->m_user->admin()->result_array();
        $properties = $this->m_property->getOffset(0, 5)->result_array();
        $data = array(
            'content' 		=> 'admin/pages/admin_home_v',
            'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                                <span class="breadcrumb-item active">Dashboard</span>',
            'menu'			=> 'home',
            'data'          => array(
                'admin' => $admin,
                'agent' => $agent,
                'properties'=> $properties
            )
        );
        $this->template->render_view('admin/template_admin_v', $data);
	}
}
?>