<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('konfigurasi_model');
	}

	// Halaman Utama Website - Kontakpage
	public function index()
	{

		$konfigurasi = $this->konfigurasi_model->listing();
		
		$data = array(	'title'	=>	'Kontak Kami - Padma Indonesia',
						'konfigurasi'	=> 	$konfigurasi,
						'isi'	=>	'Kontak/list'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Kontak.php */
/* Location: ./application/controllers/Kontak.php */