<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class detail1 extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('konfigurasi_model');
		$this->load->model('kategori_produk_model');
	}

	// Halaman Utama Website - detail1page
	public function index()
	{

		$konfigurasi = $this->konfigurasi_model->listing();
		$kategori_produk = $this->kategori_produk_model->listing();
		
		$data = array(	'title'	=>	'Produk Detail | Padma Indonesia',
						'konfigurasi'	=> 	$konfigurasi,
						'kategori_produk'	=>	$kategori_produk,
						'isi'	=>	'produk/detail1'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file detail1.php */
/* Location: ./application/controllers/detail1.php */