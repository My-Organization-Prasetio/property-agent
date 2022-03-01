<?php
defined('BASEPATH') or exit('No direct script access allowed');
include APPPATH . 'controllers/Main_controller.php';

class Home extends Main_controller
{

	function __construct()
	{
		parent::__construct();
        $this->load->model('main_model', 'm_main');
        $this->load->model('property_model', 'm_property');
	}

	public function index()
	{
        $asset_categories = $this->m_main->viewWhereOrdering('mst_asset_category', array('deleted' => 0), 'asset_category_name', 'ASC')->result_array();
		$data = array(
			'content' 		=> 'pages/home/admin_home_v',
			'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
									<span class="breadcrumb-item active">Home</span>',
			'js_function_file'=> 'home-function',
			'data'			=> array(
				'asset_categories'	=> $asset_categories
			)
		);
		$this->template->render_view('template_v', $data);
	}

	public function category()
	{
		//Will read on javascript
		echo '<script> var propertyCategory = "'.$this->uri->segment(3).'"</script>';

		//Get Data
        $asset_categories = $this->m_main->viewWhereOrdering('mst_asset_category', array('deleted' => 0), 'asset_category_name', 'ASC')->result_array();

		//Load View
		$data = array(
			'content' 		=> 'pages/home/admin_category_v',
			'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
									<span class="breadcrumb-item active">Home</span>',
			'js_function_file'=> 'home-category-function',
			'data'			=> array(
				'asset_categories'	=> $asset_categories
			)
		);
		$this->template->render_view('template_v', $data);
	}
}