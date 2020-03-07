<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detailartikel extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('konfigurasi_model');
	}

	// Halaman Utama Website - Detailartikelpage
	public function index()
	{

		$konfigurasi = $this->konfigurasi_model->listing();
		
		$data = array(	'title'	=>	'Detail Artikel | Padma Indonesia',
						'konfigurasi'	=> 	$konfigurasi,
						'isi'	=>	'artikel/detail'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Detailartikel.php */
/* Location: ./application/controllers/Detailartikel.php */