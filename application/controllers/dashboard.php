<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function __construct(){
		
		parent::__construct();
        $this->load->helper('date');
		$this->title = "Contacts Manager";
		$this->keywords = "contacts, contact manager, address book";
		
	}
		
	public function index($renderData=""){	
		
		$this->_render('dashboard/index',$renderData);
		
	}
	
}