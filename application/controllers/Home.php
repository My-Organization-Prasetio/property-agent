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
        $my_company = $this->m_main->viewWhereOrdering('my_company', array('company_id' => 1), 'company_id', 'ASC')->row();
        $asset_categories = $this->m_main->viewWhereOrdering('mst_asset_category', array('deleted' => 0), 'asset_category_name', 'ASC')->result_array();
        $cities = $this->m_main->viewWhereOrdering('mst_cities', array('deleted' => 0), 'city_name', 'ASC')->result_array();
        $tags = $this->m_main->viewWhereOrdering('mst_tags', array('deleted' => 0), 'tag_name', 'ASC')->result_array();
        $new_properties = $this->m_property->getNew(12)->result_array();
		if(isset($_COOKIE[SHORT_APP_NAME_VARIABLE_JS.'MAIN_fullname'])) {
			$property_count_by_category = $this->m_property->count_by_category($_COOKIE[SHORT_APP_NAME_VARIABLE_JS.'MAIN_fullname'])->result_array();
		} else {
			$property_count_by_category = $this->m_property->count_by_category()->result_array();
		}
		$data = array(
			'content' 		=> 'page/home_v',
			'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
									<span class="breadcrumb-item active">Home</span>',
			'js_function_file'=> 'home-function',
			'data'			=> array(
				'my_company'	=> $my_company,
				'asset_categories'	=> $asset_categories,
				'cities'			=> $cities,
				'new_properties'	=> $new_properties,
				'tags'				=> $tags,
				'property_count_by_category'	=> $property_count_by_category
			)
		);
		$this->template->render_view('template_v', $data);
	}

	public function category()
	{
		//Will read on javascript
		echo '<script>var propertyCategory = "'.$this->uri->segment(3).'"</script>';

		//Get Data
        $my_company = $this->m_main->viewWhereOrdering('my_company', array('company_id' => 1), 'company_id', 'ASC')->row();
        $asset_categories = $this->m_main->viewWhereOrdering('mst_asset_category', array('deleted' => 0), 'asset_category_name', 'ASC')->result_array();
        $cities = $this->m_main->viewWhereOrdering('mst_cities', array('deleted' => 0), 'city_name', 'ASC')->result_array();
        $tags = $this->m_main->viewWhereOrdering('mst_tags', array('deleted' => 0), 'tag_name', 'ASC')->result_array();
        $new_properties = $this->m_property->getNew(12)->result_array();
		if(isset($_COOKIE[SHORT_APP_NAME_VARIABLE_JS.'MAIN_fullname'])) {
			$property_count_by_category = $this->m_property->count_by_category($_COOKIE[SHORT_APP_NAME_VARIABLE_JS.'MAIN_fullname'])->result_array();
		} else {
			$property_count_by_category = $this->m_property->count_by_category()->result_array();
		}

		//Load View
		$data = array(
			'content' 		=> 'page/category_v',
			'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
									<span class="breadcrumb-item active">Home</span>',
			'js_function_file'=> 'home-category-function',
			'data'			=> array(
				'my_company'	=> $my_company,
				'asset_categories'	=> $asset_categories,
				'cities'			=> $cities,
				'new_properties'	=> $new_properties,
				'tags'				=> $tags,
				'property_count_by_category'	=> $property_count_by_category
			)
		);
		$this->template->render_view('template_v', $data);
	}

	public function sale_type()
	{
		//Will read on javascript
		echo '<script> var saleType = "'.$this->uri->segment(3).'"</script>';

		//Get Data
        $my_company = $this->m_main->viewWhereOrdering('my_company', array('company_id' => 1), 'company_id', 'ASC')->row();
        $asset_categories = $this->m_main->viewWhereOrdering('mst_asset_category', array('deleted' => 0), 'asset_category_name', 'ASC')->result_array();
        $cities = $this->m_main->viewWhereOrdering('mst_cities', array('deleted' => 0), 'city_name', 'ASC')->result_array();
        $tags = $this->m_main->viewWhereOrdering('mst_tags', array('deleted' => 0), 'tag_name', 'ASC')->result_array();
        $new_properties = $this->m_property->getNew(12)->result_array();
		if(isset($_COOKIE[SHORT_APP_NAME_VARIABLE_JS.'MAIN_fullname'])) {
			$property_count_by_category = $this->m_property->count_by_category($_COOKIE[SHORT_APP_NAME_VARIABLE_JS.'MAIN_fullname'])->result_array();
		} else {
			$property_count_by_category = $this->m_property->count_by_category()->result_array();
		}

		//Load View
		$data = array(
			'content' 		=> 'page/category_v',
			'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
									<span class="breadcrumb-item active">Home</span>',
			'js_function_file'=> 'home-sale-type-function',
			'data'			=> array(
				'my_company'	=> $my_company,
				'asset_categories'	=> $asset_categories,
				'cities'			=> $cities,
				'new_properties'	=> $new_properties,
				'tags'				=> $tags,
				'property_count_by_category'	=> $property_count_by_category
			)
		);
		$this->template->render_view('template_v', $data);
	}

	public function property()
	{
		//Will read on javascript
		echo '<script> var propertyId = "'.$this->uri->segment(3).'"</script>';

		//Get Data
        $my_company = $this->m_main->viewWhereOrdering('my_company', array('company_id' => 1), 'company_id', 'ASC')->row();
        $asset_categories = $this->m_main->viewWhereOrdering('mst_asset_category', array('deleted' => 0), 'asset_category_name', 'ASC')->result_array();
        $cities = $this->m_main->viewWhereOrdering('mst_cities', array('deleted' => 0), 'city_name', 'ASC')->result_array();
        $tags = $this->m_main->viewWhereOrdering('mst_tags', array('deleted' => 0), 'tag_name', 'ASC')->result_array();
        $new_properties = $this->m_property->getNew(12)->result_array();
		if(isset($_COOKIE[SHORT_APP_NAME_VARIABLE_JS.'MAIN_fullname'])) {
			$property_count_by_category = $this->m_property->count_by_category($_COOKIE[SHORT_APP_NAME_VARIABLE_JS.'MAIN_fullname'])->result_array();
		} else {
			$property_count_by_category = $this->m_property->count_by_category()->result_array();
		}

		//Load View
		$data = array(
			'content' 		=> 'page/property_v',
			'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
									<span class="breadcrumb-item active">Home</span>',
			'js_function_file'=> 'home-property-function',
			'data'			=> array(
				'my_company'	=> $my_company,
				'asset_categories'	=> $asset_categories,
				'cities'			=> $cities,
				'new_properties'	=> $new_properties,
				'tags'				=> $tags,
				'property_count_by_category'	=> $property_count_by_category
			)
		);
		$this->template->render_view('template_v', $data);
	}

	public function my_property()
	{
		//Will read on javascript
		echo '<script> var propertyId = "'.$this->uri->segment(3).'"</script>';

		//Get Data
        $my_company = $this->m_main->viewWhereOrdering('my_company', array('company_id' => 1), 'company_id', 'ASC')->row();
        $asset_categories = $this->m_main->viewWhereOrdering('mst_asset_category', array('deleted' => 0), 'asset_category_name', 'ASC')->result_array();
        $cities = $this->m_main->viewWhereOrdering('mst_cities', array('deleted' => 0), 'city_name', 'ASC')->result_array();
        $tags = $this->m_main->viewWhereOrdering('mst_tags', array('deleted' => 0), 'tag_name', 'ASC')->result_array();
        $new_properties = $this->m_property->getNew(12)->result_array();
		if(isset($_COOKIE[SHORT_APP_NAME_VARIABLE_JS.'MAIN_fullname'])) {
			$property_count_by_category = $this->m_property->count_by_category($_COOKIE[SHORT_APP_NAME_VARIABLE_JS.'MAIN_fullname'])->result_array();
		} else {
			$property_count_by_category = $this->m_property->count_by_category()->result_array();
		}

		//Load View
		$data = array(
			'content' 		=> 'page/my_property_v',
			'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
									<span class="breadcrumb-item active">Home</span>',
			'js_function_file'=> 'home-my-property-function',
			'data'			=> array(
				'my_company'	=> $my_company,
				'asset_categories'	=> $asset_categories,
				'cities'			=> $cities,
				'new_properties'	=> $new_properties,
				'tags'				=> $tags,
				'property_count_by_category'	=> $property_count_by_category
			)
		);
		$this->template->render_view('template_v', $data);
	}

	public function tag()
	{
		//Will read on javascript
		echo '<script> var tag = "'.$this->uri->segment(3).'"</script>';

		//Get Data
        $my_company = $this->m_main->viewWhereOrdering('my_company', array('company_id' => 1), 'company_id', 'ASC')->row();
        $asset_categories = $this->m_main->viewWhereOrdering('mst_asset_category', array('deleted' => 0), 'asset_category_name', 'ASC')->result_array();
        $cities = $this->m_main->viewWhereOrdering('mst_cities', array('deleted' => 0), 'city_name', 'ASC')->result_array();
        $tags = $this->m_main->viewWhereOrdering('mst_tags', array('deleted' => 0), 'tag_name', 'ASC')->result_array();
        $new_properties = $this->m_property->getNew(12)->result_array();
		if(isset($_COOKIE[SHORT_APP_NAME_VARIABLE_JS.'MAIN_fullname'])) {
			$property_count_by_category = $this->m_property->count_by_category($_COOKIE[SHORT_APP_NAME_VARIABLE_JS.'MAIN_fullname'])->result_array();
		} else {
			$property_count_by_category = $this->m_property->count_by_category()->result_array();
		}

		//Load View
		$data = array(
			'content' 		=> 'page/property_v',
			'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
									<span class="breadcrumb-item active">Home</span>',
			'js_function_file'=> 'home-tag-function',
			'data'			=> array(
				'my_company'	=> $my_company,
				'asset_categories'	=> $asset_categories,
				'cities'			=> $cities,
				'new_properties'	=> $new_properties,
				'tags'				=> $tags,
				'property_count_by_category'	=> $property_count_by_category
			)
		);
		$this->template->render_view('template_v', $data);
	}

	public function login()
	{
		//Will read on javascript
		echo '<script> var tag = "'.$this->uri->segment(3).'"</script>';

		//Get Data
        $my_company = $this->m_main->viewWhereOrdering('my_company', array('company_id' => 1), 'company_id', 'ASC')->row();
        $asset_categories = $this->m_main->viewWhereOrdering('mst_asset_category', array('deleted' => 0), 'asset_category_name', 'ASC')->result_array();
        $cities = $this->m_main->viewWhereOrdering('mst_cities', array('deleted' => 0), 'city_name', 'ASC')->result_array();
        $tags = $this->m_main->viewWhereOrdering('mst_tags', array('deleted' => 0), 'tag_name', 'ASC')->result_array();
        $new_properties = $this->m_property->getNew(12)->result_array();
		if(isset($_COOKIE[SHORT_APP_NAME_VARIABLE_JS.'MAIN_fullname'])) {
			$property_count_by_category = $this->m_property->count_by_category($_COOKIE[SHORT_APP_NAME_VARIABLE_JS.'MAIN_fullname'])->result_array();
		} else {
			$property_count_by_category = $this->m_property->count_by_category()->result_array();
		}

		//Load View
		$data = array(
			'content' 		=> 'page/login_v',
			'breadcrumb' 	=> '<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
									<span class="breadcrumb-item active">Home</span>',
			'js_function_file'=> 'front-login-function',
			'data'			=> array(
				'my_company'	=> $my_company,
				'asset_categories'	=> $asset_categories,
				'cities'			=> $cities,
				'new_properties'	=> $new_properties,
				'tags'				=> $tags,
				'property_count_by_category'	=> $property_count_by_category
			)
		);
		$this->template->render_view('template_login_v', $data);
	}
}