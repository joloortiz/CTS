<?php

class Dashboard extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->is_logged_in();
	}		
	
	function is_logged_in(){
		$is_logged_in = $this->session->userdata('is_logged_in');
	
		if(!isset($is_logged_in) || $is_logged_in !== true){
			redirect('login/');
		}
	}
	
	function index(){
		$data = array( 'main_content' => 'dashboard', 'SITE_TEMPLATE' => 'default/', 'title' => 'dashboard', 'page' => 'dashboard' );
		$this->load->view( THEMES_DIR . MASTER_DIR . 'render', $data);
	}
	


}

?>