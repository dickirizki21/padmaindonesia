<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_produk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengguna_model');
		$this->load->model('toko_kami_model');
		$this->load->model('kategori_produk_model');
		$this->load->model('kategori_artikel_model');
	}

	public function index()
	{
		$toko_kami 		= 	$this->toko_kami_model->listing();
		$data_toko_kami =	count($toko_kami);
		$pengguna 		= 	$this->pengguna_model->listing();
		$data_pengguna	= 	count($pengguna);
		$kategori_produk = 	$this->kategori_produk_model->listing();
		$data_kategori_produk =	count($kategori_produk);

		$data = array(	'title'				=>	'Kategori Produk ('.count($kategori_produk).')',
						'kategori_produk'	=>	$kategori_produk,
						'data_toko_kami'	=>	$data_toko_kami,
						'data_pengguna'		=> 	$data_pengguna,
						'isi'				=>	'admin/kategori_produk/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Tambah Pengguna
	public function tambah()
	{
		$toko_kami 		= 	$this->toko_kami_model->listing();
		$data_toko_kami =	count($toko_kami);
		$pengguna 		= 	$this->pengguna_model->listing();
		$data_pengguna	= 	count($pengguna);
		$kategori_produk = 	$this->kategori_produk_model->listing();
		$data_kategori_produk =	count($kategori_produk);

		//validasi input
		$valid = $this->form_validation;

		$valid->set_rules('nama_kategori_produk','Kategori Produk','required|is_unique[tbl_kategori_produk.nama_kategori_produk]',
			array(	'required'	=>	'%s Harus Diisi',
					'is_unique' =>	'%s sudah ada. Buat Nama Kategori baru!'));
		$valid->set_rules('urutan_kp','Urutan Kategori Produk','required|is_unique[tbl_kategori_produk.urutan_kp]',
			array(	'required'	=>	'%s Harus Diisi',
					'is_unique' =>	'%s sudah ada. Tambahkan Urutan Lain!'));

		if($valid->run()=== FALSE){
			//end validasi

		$data = array(	'title'				=>	'Tambah Kategori Produk',
						'kategori_produk'	=>	$kategori_produk,
						'data_toko_kami'	=>	$data_toko_kami,
						'data_pengguna'		=> 	$data_pengguna,
						'isi'				=>	'admin/kategori_produk/tambah'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// START MASUK DATABASE
		}else{
			$i = $this->input;
			// ambil slug kategori
			$slug = url_title($i->post('nama_kategori_produk'),'dash',TRUE);
			$data = array(	'id_kategori_produk'	=>	$i->post('id_kategori_produk'),
							'id_pengguna'			=>	$this->session->userdata('id_pengguna'),
							'slug_kategori_produk'	=>	$slug,
							'nama_kategori_produk'	=>	$i->post('nama_kategori_produk'),
							'urutan_kp'				=>	$i->post('urutan_kp'),
							'tanggal_kp'			=>	date('Y-m-d H:i:s')
							);
			$this->kategori_produk_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Kategori Produk Berhasil Di Tambahkan');
			redirect(base_url('backend/kategori_produk'),'refresh');

		}
	//end masuk database 
	}

	//edit pengguna
	public function edit($id_kategori_produk)
	{
		$toko_kami 		= 	$this->toko_kami_model->listing();
		$data_toko_kami =	count($toko_kami);
		$pengguna 		= 	$this->pengguna_model->listing();
		$data_pengguna	= 	count($pengguna);
		$kategori_produk = 	$this->kategori_produk_model->listing($id_kategori_produk);
		$data_kategori_produk =	count($kategori_produk);

		//validaasi input
		$valid = $this->form_validation;

		$valid->set_rules('nama_kategori_produk','Kategori Produk','required',
			array(	'required'	=>	'%s Harus Diisi'));

		$valid->set_rules('urutan_kp','Urutan Kategori Produk','required',
			array(	'required'	=>	'%s Harus Diisi'));

		if($valid->run()=== FALSE){
			//end validaasi
		$data = array(	'title'					=>	'Edit Kategori Produk',	
						'id_kategori_produk'	=>	'id_kategori_produk',
						'kategori_produk'		=>	$kategori_produk,	
						'data_pengguna'			=>	$data_pengguna,
						'data_toko_kami'		=>	$data_toko_kami,
						'data_kategori_produk'	=> 	$data_kategori_produk,
						'isi'					=>	'admin/kategori_produk/edit'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		//start masuk ddatabase
		}else{
			$i = $this->input;
			// ambil slug kategori
			$slug = url_title($i->post('nama_kategori_produk'),'dash',TRUE);
			$data = array(	'id_kategori_produk'	=>	$id_kategori_produk,
							'id_pengguna'			=>	$this->session->userdata('id_pengguna'),
							'slug_kategori_produk'	=>	$slug,
							'nama_kategori_produk'	=>	$i->post('nama_kategori_produk'),
							'urutan_kp'				=>	$i->post('urutan_kp'),
							'tanggal_kp'			=>	date('Y-m-d H:i:s')
						);
			$this->kategori_produk_model->edit($data);
			$this->session->set_flashdata('sukses', 'Kategori Produk Berhasil Diedit');
			redirect(base_url('backend/kategori_produk'),'refresh');

		}
		//end masuk database
	}

	//hapus pengguna
	public function delete($id_kategori_produk)
	{

		// proteksi user harus login dulu
		$this->simple_login->check_login();

		$data = array(	'id_kategori_produk'	=>	$id_kategori_produk);

		$this->kategori_produk_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data Kategori Produk Berhasil Dihapus');
		redirect(base_url('backend/kategori_produk'),'refresh');
	}

}

/* End of file Kategori_produk.php */
/* Location: ./application/controllers/backend/Kategori_produk.php */