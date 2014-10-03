<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function register()
	{
		$data['main'] = 'auth/register';
		$this->load->view('template/auth/template', $data);
	}
	
	public function login()
	{
		$data['main'] = 'auth/login';
		$this->load->view('template/auth/template', $data);
	}
	
	public function forgot_password()
	{
		$data['main'] = 'auth/forgot_password';
		$this->load->view('template/auth/template', $data);
	}
	
	
}