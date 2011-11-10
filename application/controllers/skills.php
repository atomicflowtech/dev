<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Skills extends CI_Controller {

	public function index()
	{
		$this->load->view('skills_view');
	}
}
