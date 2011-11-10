<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('subject', 'Subject', 'trim|required');
		$this->form_validation->set_rules('message', 'Message', 'required');
		
		$data['options'] = array('Question' => 'Question','Business proposal' => 'Business proposal','Advertisement' => 'Advertisement','Complaint' => 'Complaint');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('contact/contact_view',$data);
		}
		else
		{
			$this->load->library('email');

			$this->email->from(set_value('email'), set_value('name'));
			$this->email->to('Hello@atomicflowtech.com'); 
			
			$this->email->subject(set_value('subject'));
			$this->email->message(set_value('message'));	
			
			$this->email->send();
			
			$this->load->view('contact/contact_success');
		}
	}
}
