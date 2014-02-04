<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
		
	public function __construct(){
		parent::__construct();
	}
	

	public function create_user($insert_array){
		
		if(!$this->db->insert('users', $insert_array)):
			return FALSE;
		endif;
		
	}

	public function get_user($id){
		
		$query = $this->db->query('SELECT * FROM users WHERE id = ?', array($id));
		return $query->row_array();
		
	}

	public function update_user($insert_array, $query_id){
		
		if(!$this->db->update('users', $insert_array, array('id' => $query_id))):
			return FALSE;
		endif;
		
	}

	public function delete_user($id){
				
		$this->db->delete('users', array('id' => $id)); 
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
		
	}


	
}

