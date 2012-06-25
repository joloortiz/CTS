<?php
class Referrals extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		header("cache-Control: no-store, no-cache, must-revalidate");
		$this->is_logged_in();
	}
	
	function is_logged_in(){
		$is_logged_in = $this->session->userdata('is_logged_in');
	
		if(!isset($is_logged_in) || $is_logged_in !== true){
			redirect('login/');
		}
	}
	
	function index(){
      	
		
		$this->load->model('referrals_model');
		$query = $this->referrals_model->get_refers();

		if($query){
			$data['refers'] = $query;
		}
		//display referrals
		$this->load->view('dashboard_views/referrals_view', $data);
	}

}