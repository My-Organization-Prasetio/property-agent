<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main_controller extends CI_Controller
{

	public function check_login()
	{
        if($_COOKIE[SHORT_APP_NAME_VARIABLE_JS.'MAIN_level'] != 'agen' || $_COOKIE[SHORT_APP_NAME_VARIABLE_JS.'MAIN_LOGIN_STATUS'] != 1){
            redirect(base_url().'home/login');
        }
    }

    public function main_variable(){
		return 
            '<script>
                var base_url = "'.base_url().'";
                console.log(base_url);
            </script>';
    }
}