<?php

class Clients extends CI_Controller {
	
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
		$this->load->model('clients_model');
		$query = $this->clients_model->get_clients();

		if($query){
			$data['clients'] = $query;
		}
		//display all users
		$data = array( 'main_content' => 'clients_view', 'SITE_TEMPLATE' => 'default/', 'title' => 'dashboard', 'page' => 'clients_view' );
		$this->load->view( THEMES_DIR . MASTER_DIR . 'render', $data);
	}


	/*
	 *  CRUD Area
	*/

	//display add view 'clients/add'
	function add(){
		$data = array( 'main_content' => 'add_client_view', 'SITE_TEMPLATE' => 'default/', 'title' => 'dashboard', 'page' => 'clients_view' );
		$this->load->view( THEMES_DIR . MASTER_DIR . 'render', $data);
	}



	//new client
	function create(){
		 $data = array(
		 		'c_fname' => $this->input->post('firstname'),
				'c_email' => $this->input->post('email'),
				'c_dateadded' => unix_to_human(time(), TRUE, 'us'),
				'c_mname' => $this->input->post('middlename'),
		 		'c_lname' => $this->input->post('lastname'),
		 		'c_mobileno' => $this->input->post('mobilenumber'),
		 		'c_telno' => $this->input->post('telnumber'),
		 		'c_address' => $this->input->post('address'),
		 		'c_gender' => $this->input->post('gender'),
				
		);
		$this->load->model('clients_model');
		$this->clients_model->add_client($data);
		redirect('clients');
	}

	//edit client 'client/edit'
	function edit(){
		$this->load->model('clients_model');
		$query = $this->clients_model->get_client_by_id();
		if($query){
			$data['records'] = $query;
		}
		$this->load->view('dashboard_views/edit_client_view', $data);
	}

	function update(){

	}

	//deactivate client (model-deactivate)

	function deactivate(){
		$data = array(
				'isactive' => '0'
		);
		$this->load->model('clients_model');
		$this->clients_model->deactivate_client($data);
		redirect('clients');
	}


//   Validate Area

	function form_validate(){
		$this->form_validation->set_rules('firstname', 'First Name', 'required');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('mobilenumber', 'Number', 'numeric');
		$this->form_validation->set_rules('telnumber', 'Number', 'numeric');
		$this->form_validation->set_message('valid_email', 'Please enter a valid email');
		$this->form_validation->set_message('numeric', 'Please enter a valid number');
	
		if ($this->form_validation->run() == FALSE)
		{
			$this->add();
		}
		else
		{
			$this->create();
		}
	}
	
}



