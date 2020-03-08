<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('konfigurasi_model');
		$this->load->model('kategori_artikel_model');
		$this->load->model('artikel_model');
	}

	// Halaman Utama Website - Artikelpage
	public function index()
	{

		$konfigurasi = $this->konfigurasi_model->listing();
		$kategori_artikel = $this->kategori_artikel_model->listing();
		$artikel = $this->artikel_model->listing();
		$listingartikel = $this->artikel_model->listingartikel();

		$data = array(	'title'				=>	'Artikel | Padma Indonesia',
						'artikel'			=>	$artikel,
						'listingartikel'		=> 	$listingartikel,
						'konfigurasi'		=> 	$konfigurasi,
						'kategori_artikel'	=>	$kategori_artikel,
						'isi'				=>	'Artikel/list'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Artikel.php */
/* Location: ./application/controllers/Artikel.php */