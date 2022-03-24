<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include APPPATH . 'controllers/admin/Admin_main_controller.php';

class Property extends Admin_main_controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('Main_model', 'mainmodel');
        $this->load->model('property_model', 'm_property');
		$this->check_login();
	}

	public function index()
	{
		$asset_categories = $this->mainmodel->viewWhereOrdering('mst_asset_category', array('deleted' => 0), 'asset_category_name', 'ASC');
		$cities = $this->mainmodel->viewWhereOrdering('mst_cities', array('deleted' => 0), 'city_name', 'ASC');
		$agents = $this->mainmodel->viewWhereOrdering('mst_user', array('deleted' => 0, 'user_level_id' => 2), 'user_full_name', 'ASC');
		$owner = $this->mainmodel->viewWhereOrdering('mst_owner', array('deleted' => 0), 'owner_name', 'ASC');
        $properties = $this->m_property->getOffset(0, 5)->result_array();
        $data = array(
			'content' 		=> 'admin/pages/property_v',
			'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>						
                                <span class="breadcrumb-item active">Manajemen Properti</span>',
			'js_file'		=> 'property',
			'data'			=> array(
				'asset_categories'	=> $asset_categories->result_array(),
				'cities'			=> $cities->result_array(),
				'agents'			=> $agents->result_array(),
				'owner'				=> $owner->result_array(),
                'properties'		=> $properties
			)
		);
        $this->template->render_view('admin/template_admin_v', $data);
	}

	public function import_sample()
	{
		// $this->load->helper('download');
		// $this->load->helper('file');
		// force_download(base_url().'public/assets/sample/sample_import_property.xlsx',NULL);
		$this->load->helper('download');
		$path = file_get_contents(base_url().'public/assets/sample/sample_import_property.xlsx'); // get file name
		$name = "sample_import_property.xlsx"; // new name for your file
		force_download($name, $path); // start download`
		exit;

		$path = file_get_contents(base_url().'public/assets/sample/sample_import_property.xlsx');
      // make sure it's a file before doing anything!
      if(is_file($path))
      {
        // required for IE
			if(ini_get('zlib.output_compression')) { ini_set('zlib.output_compression', 'Off'); }


			$mime = get_mime_by_extension($path);

			// Build the headers to push out the file properly.
			header('Pragma: public');     // required
			header('Expires: 0');         // no cache
			header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
			header('Last-Modified: '.gmdate ('D, d M Y H:i:s', filemtime ($path)).' GMT');
			header('Cache-Control: private',false);
			header('Content-Type: '.$mime);  // Add the mime type from Code igniter.
			header('Content-Disposition: attachment; filename="'.basename('sample_import_property.xlsx').'"');  // Add the file name
			header('Content-Transfer-Encoding: binary');
			header('Content-Length: '.filesize($path)); // provide file size
			header('Connection: close');
			readfile($path); // push it out
			exit();
		}else{
			echo 'sds';
		}
	}
}
