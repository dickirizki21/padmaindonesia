<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('konfigurasi_model');
		$this->load->model('kategori_produk_model');
	}

	// Halaman Utama Website - Kontakpage
	public function index()
	{

		$konfigurasi = $this->konfigurasi_model->listing();
		$kategori_produk = $this->kategori_produk_model->listing();
		
		$data = array(	'title'	=>	'Kontak Kami - Padma Indonesia',
						'konfigurasi'	=> 	$konfigurasi,
						'kategori_produk'	=>	$kategori_produk,
						'isi'	=>	'Kontak/list'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Kontak.php */
/* Location: ./application/controllers/Kontak.php */