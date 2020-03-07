<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('konfigurasi_model');
		$this->load->model('kategori_produk_model');
		$this->load->model('produk_model');
	}

	// Halaman Utama Website - Produkpage
	public function index()
	{

		$konfigurasi = $this->konfigurasi_model->listing();
		$kategori_produk	=	$this->kategori_produk_model->listing();
		$produk 			= 	$this->produk_model->listing();
		
		$data = array(	'title'				=>	'Produk | Padma Indonesia',
						'konfigurasi'		=> 	$konfigurasi,
						'kategori_produk'	=>	$kategori_produk,
						'produk'			=>	$produk,
						'isi'				=>	'produk/list'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Produk.php */
/* Location: ./application/controllers/Produk.php */