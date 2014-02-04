<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Map extends MY_Controller {

	public function __construct(){
		
		parent::__construct();
		//$this->is_logged_in();
        $this->load->helper('date');
		$this->load->model('Contact_model');
		$this->title = "Contacts Manager";
		$this->keywords = "contacts, contact manager, address book";
		
	}
		
	public function index($renderData=""){	
		
		// Load the library 
		$this->load->library('googlemaps');

		$config['center'] = 'Kansas';
		$config['zoom'] = '4';
		$this->googlemaps->initialize($config);

		foreach($this->Contact_model->all_contacts() as $index=>$contact) {
			if (isset($contact->address)&&(isset($contact->city))) {
				$marker = array();
				$marker['position'] = $contact->address." ".$contact->city." ".$contact->state." ".$contact->zip;
				$marker['infowindow_content'] = "<strong>".$contact->first_name." ".$contact->last_name."</strong><br/>";
				$marker['infowindow_content'] .= $contact->company."<br/>".$contact->phone."<br/><a href='".$contact->email."'>".$contact->email."</a><br/>";
				//$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld='.($index+1).'|9999FF|000000';
				$marker['icon'] = base_url('resources/img').'/male-2.png';
				$this->googlemaps->add_marker($marker);
			}
		}
		/*
		$marker = array();
		$marker['position'] = '15181 kimball st hesperia ca 92345';
		$marker['draggable'] = TRUE;
		$marker['animation'] = 'DROP';
		$this->googlemaps->add_marker($marker);

		$marker = array();
		$marker['position'] = '37.449, -122.1419';
		$marker['onclick'] = 'alert("You just clicked me!!")';
		$this->googlemaps->add_marker($marker);
		*/
		$this->data['map'] = $this->googlemaps->create_map();

        // $renderData accepts: ['', 'JSON', 'AJAX'] see core/MY_Controller for details.
		$this->_render('map/index',$renderData);
		
	}
	
}