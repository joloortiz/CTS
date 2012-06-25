<?php

class Users_model extends CI_Model{
	
	function validate(){
		$this->db->where('u_username', $this->input->post('username'));
		$this->db->where('u_password', md5($this->input->post('password')));
		$this->db->where('isactive', '1');
		$query = $this->db->get('users');
	
		if($query->num_rows == 1){
			return true;
		}
	}
	
	function get_active_users(){
		$this->db->where('isactive', '1');
		$this->db->where('isadmin', '0');
		$query = $this->db->get('users');
		
		return $query->result();
	}
	
	function get_inactive_users(){
		$this->db->where('isactive', '0');
		$this->db->where('isadmin', '0');
		$query = $this->db->get('users');
	
		return $query->result();
	}
	
	function get_user_by_id(){
		$this->db->where('u_id', $this->uri->segment(3));
		$query = $this->db->get('users');
		
		return $query->result();
	}

	function add_user($data){
		$this->db->insert('users', $data);
		return;
	}
	
	function update_user($data){
		$this->db->where('u_id', $this->uri->segment(3));
		$this->db->update('users', $data);
	}
	
	function update_password($data){
		$this->db->where('u_id', $this->uri->segment(3));
		$this->db->update('users', $data);
	}
	
	function deactivate_user($data){
		$this->db->where('u_id', $this->uri->segment(3));
		$this->db->update('users', $data);
	}

	function activate_user($data){
		$this->db->where('u_id', $this->uri->segment(3));
		$this->db->update('users', $data);
	}
}

?>
