<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App extends CI_Controller {

	public function index()
	{
		$this->load->view('template/app/template');
	}
	
	
}