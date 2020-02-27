<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengguna_model');
	}

	//halaman utama login 
	public function index()
	{
		// validasi
		$valid = $this->form_validation;

		$valid->set_rules('username','Username','required',
			array(	'required'	=>	'%s Harus Diisi'));

		$valid->set_rules('password','Password','required',
			array(	'required'	=>	'%s Harus Diisi'));

		if($valid->run()){
			// proses login ke library simple_login.php
			$username 	=	$this->input->post('username');
			$password 	=	$this->input->post('password');
			$this->simple_login->login($username, $password);
		}
		// end validasi
		$data = array(	'title'		=>	'Padma Indonesia | Login');
		$this->load->view('login/list', $data, FALSE);
	}

	//Lupa Password 
	public function lupa()
	{
		$data = array(	'title'		=>	'Lupa Password');
		$this->load->view('login/lupa', $data, FALSE);
	}

	//Logout 
	public function logout()
	{
		// panggil fungsi logoyut dari library simple_login.php
		$this->simple_login->logout();
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */