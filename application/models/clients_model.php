<?php

class Clients_model extends CI_Model {
	function get_clients(){

		$query = $this->db->get('clients');
		return $query->result();
	}

	function add_client($data){
		$this->db->insert('clients', $data);
		return;
	}

	function get_client_by_id(){
		$this->db->where('c_id', $this->uri->segment(3));
		$query = $this->db->get('clients');

		return $query->result();
	}
	function deactivate_client($data){
		$this->db->where('c_id', $this->uri->segment(3));
		$this->db->update('clients', $data);
	}
}