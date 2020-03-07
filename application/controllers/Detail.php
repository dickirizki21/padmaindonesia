<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('konfigurasi_model');
	}

	// Halaman Utama Website - Detailpage
	public function index()
	{

		$konfigurasi = $this->konfigurasi_model->listing();
		
		$data = array(	'title'	=>	'Detail | Padma Indonesia',
						'konfigurasi'	=> 	$konfigurasi,
						'isi'	=>	'berita/detail'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Detail.php */
/* Location: ./application/controllers/Detail.php */