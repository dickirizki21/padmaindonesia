<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_artikel extends CI_Controller {

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
		$toko_kami 				= 	$this->toko_kami_model->listing();
		$data_toko_kami 		=	count($toko_kami);
		$pengguna 				= 	$this->pengguna_model->listing();
		$data_pengguna			= 	count($pengguna);
		$kategori_produk 		= 	$this->kategori_produk_model->listing();
		$data_kategori_produk 	=	count($kategori_produk);
		$kategori_artikel 		= 	$this->kategori_artikel_model->listing();
		$data_kategori_artikel 	=	count($kategori_artikel);

		$data = array(	'title'				=>	'Kategori Artikel & Berita ('.count($kategori_artikel).')',
						'kategori_artikel'	=>	$kategori_artikel,
						'data_toko_kami'	=>	$data_toko_kami,
						'data_pengguna'		=> 	$data_pengguna,
						'isi'				=>	'admin/kategori_artikel/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Tambah Pengguna
	public function tambah()
	{
		$toko_kami 				= 	$this->toko_kami_model->listing();
		$data_toko_kami 		=	count($toko_kami);
		$pengguna 				= 	$this->pengguna_model->listing();
		$data_pengguna			= 	count($pengguna);
		$kategori_produk 		= 	$this->kategori_produk_model->listing();
		$data_kategori_produk 	=	count($kategori_produk);
		$kategori_artikel 		= 	$this->kategori_artikel_model->listing();
		$data_kategori_artikel 	=	count($kategori_artikel);
		//validasi input
		$valid = $this->form_validation;

		$valid->set_rules('nama_kategori_artikel','Kategori artikel','required|is_unique[tbl_kategori_artikel.nama_kategori_artikel]',
			array(	'required'	=>	'%s Harus Diisi',
					'is_unique' =>	'%s sudah ada. Buat Nama Kategori baru!'));
		$valid->set_rules('urutan_ka','Urutan Kategori Artikel','required|is_unique[tbl_kategori_artikel.urutan_ka]',
			array(	'required'	=>	'%s Harus Diisi',
					'is_unique' =>	'%s sudah ada. Tambahkan Urutan Lain!'));

		if($valid->run()=== FALSE){
			//end validasi

		$data = array(	'title'				=>	'Tambah Kategori Artikel',
						'kategori_artikel'	=>	$kategori_artikel,
						'data_toko_kami'	=>	$data_toko_kami,
						'data_pengguna'		=> 	$data_pengguna,
						'isi'				=>	'admin/kategori_artikel/tambah'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// START MASUK DATABASE
		}else{
			$i = $this->input;
			// ambil slug kategori
			$slug = url_title($i->post('nama_kategori_artikel'),'dash',TRUE);
			$data = array(	'id_kategori_artikel'	=>	$i->post('id_kategori_artikel'),
							'id_pengguna'			=>	$this->session->userdata('id_pengguna'),
							'slug_kategori_artikel'	=>	$slug,
							'nama_kategori_artikel'	=>	$i->post('nama_kategori_artikel'),
							'urutan_ka'				=>	$i->post('urutan_ka'),
							'tanggal_ka'			=>	date('Y-m-d H:i:s')
							);
			$this->kategori_artikel_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Kategori Artikel Berhasil Di Tambahkan');
			redirect(base_url('backend/kategori_artikel'),'refresh');

		}
	//end masuk database 
	}

	//edit pengguna
	public function edit($id_kategori_artikel)
	{
		$toko_kami 				= 	$this->toko_kami_model->listing();
		$data_toko_kami 		=	count($toko_kami);
		$pengguna 				= 	$this->pengguna_model->listing();
		$data_pengguna			= 	count($pengguna);
		$kategori_produk 		= 	$this->kategori_produk_model->listing();
		$data_kategori_produk 	=	count($kategori_produk);
		$kategori_artikel 		= 	$this->kategori_artikel_model->listing($id_kategori_artikel);
		$data_kategori_artikel 	=	count($kategori_artikel);

		//validaasi input
		$valid = $this->form_validation;

		$valid->set_rules('nama_kategori_artikel','Kategori Produk','required',
			array(	'required'	=>	'%s Harus Diisi'));

		$valid->set_rules('urutan_ka','Urutan Kategori Produk','required',
			array(	'required'	=>	'%s Harus Diisi'));

		if($valid->run()=== FALSE){
			//end validaasi
		$data = array(	'title'					=>	'Edit Kategori',	
						'id_kategori_artikel'	=>	'id_kategori_artikel',
						'kategori_artikel'		=>	$kategori_artikel,	
						'data_pengguna'			=>	$data_pengguna,
						'data_toko_kami'		=>	$data_toko_kami,
						'data_kategori_produk'	=> 	$data_kategori_produk,
						'isi'					=>	'admin/kategori_artikel/edit'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		//start masuk ddatabase
		}else{
			$i = $this->input;
			// ambil slug kategori
			$slug = url_title($i->post('nama_kategori_artikel'),'dash',TRUE);
			$data = array(	'id_kategori_artikel'	=>	$id_kategori_artikel,
							'id_pengguna'			=>	$this->session->userdata('id_pengguna'),
							'slug_kategori_artikel'	=>	$slug,
							'nama_kategori_artikel'	=>	$i->post('nama_kategori_artikel'),
							'urutan_ka'				=>	$i->post('urutan_ka'),
							'tanggal_ka'			=>	date('Y-m-d H:i:s')
						);
			$this->kategori_artikel_model->edit($data);
			$this->session->set_flashdata('sukses', 'Kategori Artikel Berhasil Diedit');
			redirect(base_url('backend/kategori_artikel'),'refresh');

		}
		//end masuk database
	}

	//hapus pengguna
	public function delete($id_kategori_artikel)
	{

		// proteksi user harus login dulu
		$this->simple_login->check_login();

		$data = array(	'id_kategori_artikel'	=>	$id_kategori_artikel);

		$this->kategori_artikel_model->delete($data);
		$this->session->set_flashdata('sukses', 'Kategori Artikel Berhasil Dihapus');
		redirect(base_url('backend/kategori_artikel'),'refresh');
	}

}

/* End of file Kategori_artikel.php */
/* Location: ./application/controllers/backend/Kategori_artikel.php */