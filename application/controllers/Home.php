<?php
defined('BASEPATH') or exit('No direct script access allowed');
include APPPATH . 'controllers/Main_controller.php';

class Home extends Main_controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Main_model', 'mainmodel');
	}

	public function index()
	{
		$data = array(
			'content' 		=> 'pages/home/admin_home_v',
			'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
									<span class="breadcrumb-item active">Home</span>',
			'menu'			=> 'home',
		);
		$this->template->render_view('template_v', $data);
	}
}