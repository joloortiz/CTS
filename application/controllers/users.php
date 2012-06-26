<?php

class Users extends CI_Controller {
	
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
	
	//fetch all users
	function index(){
		$this->load->model('users_model');
		$query = $this->users_model->get_active_users();
		$query2 = $this->users_model->get_inactive_users();
		
		if($query){
			$data['records'] = $query;
		}
		
		if($query2){
			$data['records2'] = $query2;
		}
		//display all users
	
		$this->load->view('users_view', $data);
	}
	
	//load add view 'users/add'
	function add(){		
		$this->load->view('add_user_view');
	}
	
	function form_validate(){		
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->add();
		}
		else
		{
			$this->create();
		}
	}
	
	//create user to the database
	function create(){
		$data = array(
					'u_username' => $this->input->post('username'),
					'u_password' =>  md5($this->input->post('password')),
					'u_email' => $this->input->post('email'),
					'u_dateadded' => unix_to_human(time(), TRUE, 'us'),
					'isactive' => '1',
					'isadmin' => '0'
				);
		$this->load->model('users_model');
		$this->users_model->add_user($data);
		redirect('users');
	}
	
	//load edit user view 'users/edit'
	function edit(){
		$this->load->model('users_model');
		$query = $this->users_model->get_user_by_id();
		if($query){
			$data['records'] = $query;
		}
		$this->load->view('edit_user_view', $data);
	}
	
	//update user details except the password
	function update(){
		$data = array(
					'u_username' => $this->input->post('username'),
					'u_email' => $this->input->post('email'),
					'u_fname' => $this->input->post('fname'),
					'u_mname' => $this->input->post('mname'),
					'u_lname' => $this->input->post('lname'),
					'u_address' => $this->input->post('address'),
					'u_gender' => $this->input->post('gender')
				);
		$this->load->model('users_model');
		$this->users_model->update_user($data);
		redirect("users/edit/".$this->uri->segment(3));
	}
	
	//update user password
	function update_password(){
		$data = array(
					'u_password' => $this->input->post('password')
				);
		$this->load->model('users_model');
		$this->users_model->update_password($data);
		redirect("users/edit/".$this->uri->segment(3));
	}
	
	//deactive user
	function deactivate(){
		$data = array(
					'isactive' => '0'
				);
		$this->load->model('users_model');
		$this->users_model->deactivate_user($data);
		redirect('users');		
	}
	
	//activate user
	function activate(){
		$data = array(
				'isactive' => '1'
		);
		$this->load->model('users_model');
		$this->users_model->activate_user($data);
		redirect('users');
	}
}




?>