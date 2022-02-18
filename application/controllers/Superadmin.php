<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include APPPATH . 'controllers/Main_controller.php';

class Superadmin extends Main_controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('Main_model', 'mainmodel');
		$this->check_login();
	}

	public function index()
	{
        $data = array(
            'content' 		=> 'pages/supervisor/supervisor_home_v',
            'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                                <span class="breadcrumb-item active">Dashboard</span>',
            'menu'			=> 'home',
            'level'			=> 'superadmin'
        );
        $this->template->render_view('template_supervisor_v', $data);
	}

    public function purchase_order()
	{
		$data = array(
			'content' 		=> 'pages/home/admin_submission_v',
			'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
									<span class="breadcrumb-item active">Purchase Order</span>',
			'menu'			=> 'home',
			'level'			=> 'superadmin'
		);
		$this->template->render_view('template_supervisor_v', $data);
	}

    public function purchase_order_processed()
	{
		$data = array(
			'content' 		=> 'pages/home/admin_po_history_v',
			'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
									<span class="breadcrumb-item active">Purchase Order History</span>',
			'menu'			=> 'home',
			'level'			=> 'superadmin'
		);
		$this->template->render_view('template_supervisor_v', $data);
	}

	public function purchase_order_detail()
	{
		$data = array(
			'content' 		=> 'pages/home/admin_po_detail_v',
			'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
									<span class="breadcrumb-item active">Purchase Order Detail</span>',
			'level'			=> 'superadmin'
		);
		$this->template->render_view('template_supervisor_v', $data);
	}

	public function purchase_order_history()
	{
		$data = array(
			'content' 		=> 'pages/home/admin_po_history_v',
			'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
									<span class="breadcrumb-item active">Purchase Order History</span>',
			'menu'			=> 'home',
			'level'			=> 'superadmin'
		);
		$this->template->render_view('template_supervisor_v', $data);
	}

	public function good_receipt()
	{
		$data = array(
			'content' 		=> 'pages/home/admin_good_receipt_v',
			'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
									<span class="breadcrumb-item active">Good Receipt</span>',
			'menu'			=> 'home',
			'level'			=> 'superadmin'
		);
		$this->template->render_view('template_supervisor_v', $data);
	}

	public function request()
	{
		$data = array(
			'content' 		=> 'pages/home/admin_request_v',
			'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
									<span class="breadcrumb-item active">Request</span>',
			'menu'			=> 'home',
			'level'			=> 'superadmin'
		);
		$this->template->render_view('template_supervisor_v', $data);
	}

	public function request_detail()
	{
		$data = array(
			'content' 		=> 'pages/home/admin_po_detail_v',
			'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
									<span class="breadcrumb-item active">Purchase Order Detail</span>',
			'level'			=> 'superadmin'
		);
		$this->template->render_view('template_supervisor_v', $data);
	}

	public function request_history()
	{
		$data = array(
			'content' 		=> 'pages/home/admin_request_history_v',
			'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
									<span class="breadcrumb-item active">Request History</span>',
			'menu'			=> 'home',
			'level'			=> 'superadmin'
		);
		$this->template->render_view('template_supervisor_v', $data);
	}

	public function material_category()
	{
		$data = array(
			'content' 		=> 'pages/home/admin_material_category_v',
			'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
									<span class="breadcrumb-item active">Material Category</span>',
			'menu'			=> 'home',
			'level'			=> 'superadmin'
		);
		$this->template->render_view('template_supervisor_v', $data);
	}

	public function material()
	{
		$data = array(
			'content' 		=> 'pages/home/admin_material_v',
			'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
									<span class="breadcrumb-item active">Material</span>',
			'menu'			=> 'material',
			'level'			=> 'superadmin',
			'data_category' => $this->main_model->view('mst_product_category')->result_array()
		);
		$this->template->render_view('template_supervisor_v', $data);
	}

	public function supplier()
	{
		$data = array(
			'content' 		=> 'pages/home/admin_supplier_v',
			'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
									<span class="breadcrumb-item active">Supplier</span>',
			'menu'			=> 'supplier',
			'level'			=> 'admin',
		);
		$this->template->render_view('template_admin_v', $data);
	}
}