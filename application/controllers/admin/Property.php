<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include APPPATH . 'controllers/admin/Admin_main_controller.php';

class Property extends Admin_main_controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('Main_model', 'mainmodel');
		$this->check_login();
	}

	public function index()
	{
		$asset_categories = $this->mainmodel->viewWhereOrdering('mst_asset_category', array('deleted' => 0), 'asset_category_name', 'ASC');
		$cities = $this->mainmodel->viewWhereOrdering('mst_cities', array('deleted' => 0), 'city_name', 'ASC');
        $data = array(
			'content' 		=> 'admin/pages/property_v',
			'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>						
                                <span class="breadcrumb-item active">Manajemen Properti</span>',
			'js_file'		=> 'property',
			'data'			=> array(
				'asset_categories'	=> $asset_categories->result_array(),
				'cities'			=> $cities->result_array()
			)
		);
        $this->template->render_view('admin/template_admin_v', $data);
	}
}
?>