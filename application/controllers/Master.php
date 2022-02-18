<?php
defined('BASEPATH') or exit('No direct script access allowed');
include APPPATH . 'controllers/Main_controller.php';

class Master extends Main_controller
{
    function __construct()
	{
		parent::__construct();
		$this->check_login();
	}

    public function supplier()
    {
        $data = array(
            'content'           => 'pages/master/supplier_v',
            'breadcrumb'        => '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                                    <span class="breadcrumb-item active">Master</span>
                                    <span class="breadcrumb-item active">Supplier</span>',
            'menu'              => 'supplier',
        );
        $this->template->render_view('template_admin_v', $data);
    }

    public function material()
	{
		$data = array(
			'content' 		=> 'pages/master/material_v',
			'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>						
                                <span class="breadcrumb-item active">Master</span>
                                <span class="breadcrumb-item active">Material</span>',
			'menu'			=> 'material',
			'data'          => array(
                'category'  => $this->main_model->view('mst_product_category')->result_array(),
                'unit'      => $this->main_model->view('mst_unit')->result_array()
            )
		);
		$this->template->render_view('template_admin_v', $data);
	}

    public function outlet()
	{
		$data = array(
			'content' 		=> 'pages/master/outlet_v',
			'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>						
                                <span class="breadcrumb-item active">Master</span>
                                <span class="breadcrumb-item active">outlet</span>',
			'menu'			=> 'outlet',
		);
		$this->template->render_view('template_admin_v', $data);
	}
}
