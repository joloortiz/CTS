<?php
class Visits extends CI_Controller {
	function index(){
		$this->load->library('pagination');
		//$config['base_url'] = '';
		$config['total_rows'] = $this->db->get('visits')->num_rows();
		$config['per_page'] = 10;
		$config['num_links'] = 20;
		
		$this->pagination->initialize($config);
		$data['visits'] = $this->db->get('visits',$config['per_page'], $this->uri->segment(3));
	    $this->load->view('dashboard_views/visits_view',$data);
		
		}
}