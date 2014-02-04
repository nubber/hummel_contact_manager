<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacts extends MY_Controller {

	public function __construct(){
		
		parent::__construct();
        $this->load->helper('date');
		$this->load->helper('contacts_helper');
		$this->load->model('Contact_model');
		$this->data['create_contact_form'] = array('class' => 'form-horizontal', 'id' => 'create_contact_form');
		$this->before_filter();
		
	}
	
	public function before_filter(){
		$this->data['sort'] = $sort = $this->input->get('sort');
		$this->data['contacts'] = $this->Contact_model->all_contacts($sort);
	}
		
	public function index($renderData=""){	
		
		$this->_render('contacts/index',$renderData);

	}

	public function new_contact(){	

		$this->_render('contacts/new');

	}		

	public function create($renderData=""){	
		
		$this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');

		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|max_length[50]|xss_clean');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|max_length[50]|xss_clean');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required|number');			
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');			
		$this->form_validation->set_rules('address', 'Address', 'trim');
		$this->form_validation->set_rules('city', 'City', 'trim');
		$this->form_validation->set_rules('state', 'State', 'trim');
		$this->form_validation->set_rules('zip', 'Zip', 'trim');
		$this->form_validation->set_rules('date', 'Date', 'date');
	
				
		if ($this->form_validation->run() == FALSE){
			$this->_render('contacts/new',$renderData);
		} else {
			
			$insert_array = array(
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'nick_name' => $this->input->post('nick_name'),
				'company' => $this->input->post('company'),
				'phone' => $this->input->post('phone'),
				'email' => $this->input->post('email'),
				'address' => $this->input->post('address'),
				'city' => $this->input->post('city'),
				'state' => $this->input->post('state'),
				'zip' => $this->input->post('zip'),
				'country' => $this->input->post('country'),
				'birth_date' => $this->input->post('birth_date'),
				'website' => $this->input->post('website'),
				'twitter_handle' => $this->input->post('twitter_handle'),
				'instagram_handle' => $this->input->post('instagram_handle'),
			);
			
			if ($this->Contact_model->create_contact($insert_array)) {
	   		 	$this->session->set_flashdata('status', 'Contact as been created.');
				redirect('/contacts', 'refresh');
			}
			
		}
		
	}	
	
		
	public function show(){	

		$this->data['contact'] = $contact = $this->Contact_model->get_contact($this->data['uri_segment_2']);
		
		// setup google map
		$this->load->library('googlemaps');
		$contact_address = $contact->address." ".$contact->city." ".$contact->state." ".$contact->zip;
		$config['center'] = $contact_address;
		$config['zoom'] = '9';
		$config['map_height'] = '250';
		$this->googlemaps->initialize($config);
		$marker = array();
		$marker['position'] = $contact_address;
		$marker['infowindow_content'] = "<strong>".$contact->first_name." ".$contact->last_name."</strong><br/>";
		$marker['infowindow_content'] .= $contact->company."<br/>".$contact->phone."<br/><a href='".$contact->email."'>".$contact->email."</a><br/>";
		$marker['icon'] = base_url('resources/img').'/male-2.png';
		$this->googlemaps->add_marker($marker);
		$this->data['map'] = $this->googlemaps->create_map();

		//setup twitter feed

		
		$this->_render('contacts/show');

	}

		
	public function edit($renderData=""){	
		
		$this->data['contact'] = $contact = $this->Contact_model->get_contact($this->data['uri_segment_2']);

		$this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');

		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|max_length[50]|xss_clean');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|max_length[50]|xss_clean');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required|number');			
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');			
		$this->form_validation->set_rules('address', 'Address', 'trim');
		$this->form_validation->set_rules('city', 'City', 'trim');
		$this->form_validation->set_rules('state', 'State', 'trim');
		$this->form_validation->set_rules('zip', 'Zip', 'trim');
		$this->form_validation->set_rules('date', 'Date', 'date');
	
				
		if ($this->form_validation->run() == FALSE){
			$this->_render('contacts/edit',$renderData);
		} else {
			
			$update_array = array(
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'nick_name' => $this->input->post('nick_name'),
				'company' => $this->input->post('company'),
				'phone' => $this->input->post('phone'),
				'email' => $this->input->post('email'),
				'address' => $this->input->post('address'),
				'city' => $this->input->post('city'),
				'state' => $this->input->post('state'),
				'zip' => $this->input->post('zip'),
				'country' => $this->input->post('country'),
				'birth_date' => $this->input->post('birth_date'),
				'website' => $this->input->post('website'),
				'twitter_handle' => $this->input->post('twitter_handle'),
				'instagram_handle' => $this->input->post('instagram_handle')
			);

			$this->Contact_model->update_contact($update_array, $contact->id);
			
   		 	$this->session->set_flashdata('status', 'Contact as been updated.');
				
			redirect('contacts/'.$contact->id);
			
		}
	}


	public function delete($renderData=""){	
		
		$contact = $this->Contact_model->get_contact($this->data['uri_segment_2']);
		
		$this->Contact_model->delete_contact($contact->id);
		
		$this->session->set_flashdata('status', 'Contact as been deleted.');
		
		redirect('contacts/');
		
	}	
		
	
}