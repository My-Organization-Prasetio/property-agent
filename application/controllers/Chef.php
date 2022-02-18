<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include APPPATH . 'controllers/Main_controller.php';

class Chef extends Main_controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('Main_model', 'mainmodel');
		$this->check_login();
	}

	public function index()
	{
        $data = array(
            'content' 		=> 'pages/chef/chef_home_v',
            'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                                <span class="breadcrumb-item active">Dashboard</span>',
            'menu'			=> 'home',
            'level'			=> 'supervisor'
        );
        $this->template->render_view('template_chef_v', $data);
	}

    public function purchase_order()
	{
        $data = array(
            'content' 		=> 'pages/chef/chef_purchase_order_v',
            'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                                <span class="breadcrumb-item active">Dashboard</span>',
            'menu'			=> 'home',
            'level'			=> 'supervisor'
        );
        $this->template->render_view('template_chef_v', $data);
	}
}