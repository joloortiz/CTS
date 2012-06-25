<?php
class Logout extends CI_Controller {
	
	function index(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('is_logged_in');
		$this->session->sess_destroy();
		redirect('/','refresh');
	}
	
}
?>