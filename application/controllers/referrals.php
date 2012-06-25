<?php

class Referrals extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->is_logged_in();
	}
	
	function is_logged_in(){
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
	
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