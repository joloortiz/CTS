<?php
class Referrals_model extends CI_Model {

	function get_refers(){

		$query = $this->db->get('referers');
		return $query->result();
	}
}