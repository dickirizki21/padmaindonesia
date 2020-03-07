<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('konfigurasi_model');
		$this->load->model('toko_kami_model');
	}

	// Halaman Utama Website - Tokopage
	public function index()
	{
		$konfigurasi 	= $this->konfigurasi_model->listing();
		$toko_kami		= $this->toko_kami_model->listing();
		
		$data = array(	'title'			=>	'Toko | Padma Indonesia',
						'konfigurasi'	=> 	$konfigurasi,
						'toko_kami'		=>	$toko_kami,
						'isi'			=>	'Toko/list'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Toko.php */
/* Location: ./application/controllers/Toko.php */