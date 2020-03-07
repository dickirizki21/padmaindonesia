<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('konfigurasi_model');
	}

	// Halaman Utama Website - Artikelpage
	public function index()

	$konfigurasi = $this->konfigurasi_model->listing();

	{
		$data = array(	'title'			=>	'Artikel | Padma Indonesia',
						'konfigurasi'	=> 	$konfigurasi,
						'isi'			=>	'Artikel/list'

						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Artikel.php */
/* Location: ./application/controllers/Artikel.php */