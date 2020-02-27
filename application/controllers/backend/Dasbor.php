<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengguna_model');
		$this->load->model('toko_kami_model');
		$this->load->model('kategori_produk_model');
		$this->load->model('kategori_artikel_model');
		$this->load->model('artikel_model');
		$this->load->model('produk_model');
	}

	public function index()
	{
		$toko_kami 				= 	$this->toko_kami_model->listing();
		$data_toko_kami 		=	count($toko_kami);
		$pengguna 				= 	$this->pengguna_model->listing();
		$data_pengguna			= 	count($pengguna);
		$kategori_produk 		= 	$this->kategori_produk_model->listing();
		$data_kategori_produk 	=	count($kategori_produk);
		$kategori_artikel 		= 	$this->kategori_artikel_model->listing();
		$data_kategori_artikel 	=	count($kategori_artikel);
		$artikel 				= 	$this->artikel_model->listing();
		$data_artikel 			= 	count($artikel);
		$produk 				= 	$this->produk_model->listing();
		$data_produk 			= 	count($produk);

		$data = array(	'title'				=>	'Dashboard Administrator',
						'isi'				=>	'admin/dasbor/list',
						'data_produk' 		=> $data_produk,
						'data_artikel'		=> $data_artikel,
						'data_pengguna'		=> $data_pengguna,
						'data_toko_kami'	=> $data_toko_kami
					);
		
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

}

/* End of file Dasbor.php */
/* Location: ./application/controllers/backend/Dasbor.php */