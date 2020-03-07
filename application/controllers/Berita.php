<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('konfigurasi_model');
	}

	// Halaman Utama Website - Beritapage
	public function index()
	{

		$konfigurasi = $this->konfigurasi_model->listing();

		$data = array(	'title'	=>	'Berita | Padma Indonesia',
						'konfigurasi'	=> 	$konfigurasi,
						'isi'	=>	'Berita/list'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Berita.php */
/* Location: ./application/controllers/Berita.php */