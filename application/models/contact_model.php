<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_model extends CI_Model {
		
	public function __construct(){
		parent::__construct();
	}
	
	public function all_contacts($sort=array('last_name'=>'asc')){
		
		$q = $this->db->order_by("last_name $sort[last_name]")
						->get_where('contacts',array('user_id'=>NULL));
		return $q->result();
		
	}

	public function create_contact($insert_array){
		
		$this->db->set('created_at', 'NOW()', FALSE);
		$this->db->set('updated_at', 'NOW()', FALSE);
       return $q = $this->db->insert('contacts', $insert_array);
		
	}
	
	public function get_contact($id){
		
		$q = $this->db->get_where('contacts',array('id'=>$id));		
		return $q->row();
		
	}

	public function update_contact($update_array, $query_id){
		$this->db->set('updated_at', 'NOW()', FALSE);
		return $this->db->update('contacts', $update_array, array('id' => $query_id));
	}

	public function delete_contact($id){
				
		$this->db->delete('contacts', array('id' => $id)); 
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
		
	}


	
}

