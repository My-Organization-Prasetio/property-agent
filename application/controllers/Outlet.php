<?php
defined('BASEPATH') or exit('No direct script access allowed');
include APPPATH . 'controllers/Main_controller.php';

class Outlet extends Main_controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Main_model', 'mainmodel');
		$this->check_login();
	}

	public function index()
	{

		/*************************************************************************************
		MATERIAL DISTRIBUTION REQUEST
		Material distribution request is a draft to make a material supply request.
		-----------------------------------------------------------
		Flow
		1. Check draft exist
		2. If draft for this branch more than 1 then delete all draft for this branch
		3. This branch don't have any branch, then create new branch
		------------------------------------------------------------
		**Note
		Request number will be generate when the request status has not changed to requested
		*************************************************************************************/

		//LOAD MODEL
		$this->load->model('material_model', 'm_model');
		$this->load->model('distribution_model', 'd_model');

		//LOAD DATA FROM DATABASE
		$request_today = $this->d_model->all_current_date();
		$request_draft = $this->d_model->draft($this->session->userdata(SHORT_APP_NAME.'_'.'outlet'));

		//CHECKING INVOICE FOR REQUEST
		$total_request_draft = $request_draft->num_rows();
		if($total_request_draft != 1){ // 1. IF DRAFT <> 1 THEN CREATE NEW DRAFT
			if($total_request_draft > 1){ // 2. IF DRAFT DOUBLE OR MORE FOR THIS OUTLET THEN DELETE IT
				$this->main_model->delete(array(
					'material_request_status' 	=> 'draft',
					'outlet_code'				=> $this->session->userdata(SHORT_APP_NAME.'_'.'outlet'),
				), 'material_request');
			}

			// 3. CREATE NEW DRAFT
			$this->main_model->insert(array(
				'outlet_code'				=> $this->session->userdata(SHORT_APP_NAME.'_'.'outlet'),
				'material_request_status'	=> 'draft',
				'level_of_important'		=> 'normal',
				'created_by'				=> $this->session->userdata(SHORT_APP_NAME.'_'.'userid'),
				'updated_by'				=> $this->session->userdata(SHORT_APP_NAME.'_'.'userid'),
			), 'material_request');
			//GET NEW DRAFT
			$request_draft = $this->d_model->draft($this->session->userdata(SHORT_APP_NAME.'_'.'outlet'));
		}

		//PREPARE
		$total_request_today = $request_today->num_rows();
		$draft = $request_draft->row();

		//GET REQUEST NUMBER
		$request_number = $this->new_request_number($total_request_today);

		//PREPARE VIEW
		$data = array(
			'content' 		=> 'pages/distribution/distribution_request_v',
			'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
									<span class="breadcrumb-item active">Request</span>',
			'javascript'	=> 'material-request',
			'data'			=> array(
				'draft'				=> $draft,
				'request_number'	=> $request_number,
				// 'material_category'	=> $this->main_model->viewOrdering('mst_product_category', 'category_id', 'ASC')->result_array(),
				'material'  		=> $this->m_model->all()->result_array(),
				'company'			=> $this->main_model->view('my_company')->row(),
				'outlet'			=> $this->main_model->view_where('mst_branch_outlet', array('branch_code'=>$this->session->userdata(SHORT_APP_NAME.'_'.'outlet')))->row(),
			)
		);
		$this->template->render_view('template_outlet_v', $data);
	}

	public function request_archive()
	{
		$data = array(
			'content' 		=> 'pages/outlet/outlet_request_archive_v',
			'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
									<span class="breadcrumb-item active">Request Archive</span>',
			'menu'			=> 'home',
			'level'			=> 'outlet'
		);
		$this->template->render_view('template_outlet_v', $data);
	}

	public function new_request_number($total_request_today=0){
		return $this->lib_main->code_01(
			$total_request_today+1,
			'DT',
			$this->session->userdata(SHORT_APP_NAME.'_'.'outlet'),
			$this->lib_date->get_formatted_date3(),
			4);
	}
}
