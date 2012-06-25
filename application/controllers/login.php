<?php

class Login extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->is_logged_in();
	}
	//checks if the user is already logged in
	function is_logged_in(){
		$is_logged_in = $this->session->userdata('is_logged_in');

		if(isset($is_logged_in) && $is_logged_in === true){
			redirect('dashboard');
		}
	}
	
	function index(){
		$data = array( 'main_content' => 'login_page', 'SITE_TEMPLATE' => 'default/', 'title' => 'Login', 'page' => 'login_page' );
		$this->load->view( THEMES_DIR . MASTER_DIR . 'render', $data);
	}
	
	//validate credentials for login details
	function validate_credentials(){
		$this->load->model('users_model');
		$query = $this->users_model->validate();
		
		if($query){
			$data = array( 
					'username' => $this->input->post('username'),
					'is_logged_in' => true
			);
			
			$this->session->set_userdata($data);
			redirect('dashboard');
		}
		else{
			$this->index();
		}
	}



}
?>