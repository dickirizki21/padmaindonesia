<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	// halaman login
	public function index()
	{
		$data = array(	'title'		=> 'Login - Padma Indonesia');
		$this->load->view('login/list', $data, FALSE);
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */