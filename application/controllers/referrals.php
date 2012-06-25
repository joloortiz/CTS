<?php
class Referrals extends CI_Controller {

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