<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include APPPATH . 'controllers/admin/Admin_main_controller.php';

class Area extends Admin_main_controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('Main_model', 'mainmodel');
		$this->check_login();
	}

	public function index()
	{
		$cities = $this->mainmodel->viewWhereOrdering('mst_cities', array('deleted' => 0), 'city_name', 'ASC');
        $data = array(
			'content' 		=> 'admin/pages/master/area_v',
			'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>						
                                <span class="breadcrumb-item active">Area</span>',
			'js_file'		=> 'area',
			'data'			=> array(
				'cities'	=> $cities
			)
		);
        $this->template->render_view('admin/template_admin_v', $data);
	}
}
?>