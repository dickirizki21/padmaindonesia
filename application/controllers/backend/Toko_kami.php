<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko_kami extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengguna_model');
		$this->load->model('toko_kami_model');
		$this->load->model('kategori_produk_model');
	}

	public function index()
	{
		$toko_kami 		= 	$this->toko_kami_model->listing();
		$data_toko_kami =	count($toko_kami);
		$pengguna 		= 	$this->pengguna_model->listing();
		$data_pengguna	= 	count($pengguna);
		$kategori_produk = 	$this->kategori_produk_model->listing();
		$data_kategori_produk =	count($kategori_produk);

		$data = array(	'title'				=>	'Cabang Outlet ('.count($toko_kami).')',
						'toko_kami'			=>	$toko_kami,
						'data_toko_kami'	=>	$data_toko_kami,
						'data_pengguna'		=> 	$data_pengguna,
						'isi'				=>	'admin/toko_kami/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Tambah Barang
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

		$valid->set_rules('nama_toko','Nama Toko','required',
			array(	'required'	=>	'%s Harus Diisi'));

		if($valid->run()=== FALSE){
			//end validasi

		$data = array(	'title'				=>	'Tambah Cabang Outlet',
						'toko_kami'			=>	$toko_kami,
						'data_toko_kami'	=>	$data_toko_kami,
						'data_pengguna'		=> 	$data_pengguna,
						'isi'				=>	'admin/toko_kami/tambah'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// START MASUK DATABASE
		}else{
			$i = $this->input;
			$data = array(	'id_toko'		=>	$i->post('id_toko'),
							'lokasi_toko'	=>	$i->post('lokasi_toko'),
							'nama_toko'		=>	$i->post('nama_toko'),
							'alamat_toko'	=>	$i->post('alamat_toko'),
							'urutan_toko'	=>	$i->post('urutan_toko')
						);

			$this->toko_kami_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Outlet Berhasil Ditambahkan');
			redirect(base_url('backend/toko_kami'),'refresh');

		}
	//end masuk database 
	}

	//edit outlet
	public function edit($id_toko)
	{
		// print_r($id_toko); die;
		$toko_kami 		= 	$this->toko_kami_model->listing($id_toko);
		// print_r($toko_kami); die;
		$pengguna 		= 	$this->pengguna_model->listing();
		$data_pengguna	= 	count($pengguna);


		//validaasi input
		$valid = $this->form_validation;

		$valid->set_rules('nama_toko','Nama Outlet','required',
			array(	'required'	=>	'%s Harus Diisi'));

		if($valid->run()=== FALSE){
			//end validaasi
		$data = array(	'title'				=>	'Edit Outlet',
						'id_toko'			=>	'id_toko',
						'toko_kami'			=>	$toko_kami,
						'data_pengguna'		=> 	$data_pengguna,
						'isi'				=>	'admin/toko_kami/edit'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		//start masuk ddatabase
		}else{
			$i = $this->input;
			$data = array(	'id_toko'		=>	$id_toko,
							'lokasi_toko'	=>	$i->post('lokasi_toko'),
							'nama_toko'		=>	$i->post('nama_toko'),
							'alamat_toko'	=>	$i->post('alamat_toko'),
							'urutan_toko'	=>	$i->post('urutan_toko')
						);
			$this->toko_kami_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data Outlet Berhasil Diedit');
			redirect(base_url('backend/toko_kami'),'refresh');


		}
		//end masuk database
	}


	//hapus kategori
	public function delete($id_toko)
	{

		// proteksi user harus login dulu
		$this->simple_login->check_login();

		$data = array(	'id_toko'	=>	$id_toko);

		$this->toko_kami_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data outlet Berhasil Dihapus');
		redirect(base_url('backend/toko_kami'),'refresh');
	}

}

/* End of file Toko_kami.php */
/* Location: ./application/controllers/backend/Toko_kami.php */