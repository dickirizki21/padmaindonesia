<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('konfigurasi_model');
	}

	// Halaman Utama Website - Tentangpage
	public function index()
	{

		$konfigurasi = $this->konfigurasi_model->listing();
		
		$data = array(	'title'	=>	'Tentang Kami - Padma Indonesia',
						'konfigurasi'	=> 	$konfigurasi,
						'isi'	=>	'Tentang/list'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Tentang.php */
/* Location: ./application/controllers/Tentang.php */