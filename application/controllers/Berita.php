<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('konfigurasi_model');
		$this->load->model('kategori_artikel_model');
		$this->load->model('artikel_model');
		$this->load->model('kategori_produk_model');
	}

	// Halaman Utama Website - Beritapage
	public function index()
	{
		$kategori_artikel = $this->kategori_artikel_model->listing();
		$listingberita = $this->artikel_model->listingberita();
		$listingberitaterbaru = $this->artikel_model->listingberitaterbaru();
		$kategori_produk = $this->kategori_produk_model->listing();


		$konfigurasi = $this->konfigurasi_model->listing();

		$data = array(	'title'				=>	'Berita | Padma Indonesia',
						'konfigurasi'		=> 	$konfigurasi,
						'listingberita'		=> 	$listingberita,
						'kategori_artikel'	=>	$kategori_artikel,
						'listingberita_terbaru'	=>	$listingberitaterbaru,
						'kategori_produk'	=>	$kategori_produk,
						'isi'				=>	'Berita/list'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Berita.php */
/* Location: ./application/controllers/Berita.php */