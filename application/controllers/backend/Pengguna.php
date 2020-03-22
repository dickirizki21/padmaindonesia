<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengguna_model');
		$this->load->model('toko_kami_model');
	}

	// Index Pengguna
	public function index()
	{
		$pengguna 		=	$this->pengguna_model->listing();
		$toko_kami 		= 	$this->toko_kami_model->listing();

		$data = array(	'title'				=>	'Data Pengguna ('.count($pengguna).')',
						'pengguna'			=>	$pengguna,
						'isi'				=>	'admin/pengguna/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Tambah Pengguna
	public function tambah()
	{
		$pengguna 		=	$this->pengguna_model->listing();

		//validasi input
		$valid = $this->form_validation;

		$valid->set_rules('username','Username','required|trim|is_unique[tbl_pengguna.username]',
			array(	'required'	=>	'%s Harus Diisi',
					'is_unique'	=>	'%s Sudah Ada.Buat Username Baru!'));
		$valid->set_rules('password','Password','required|trim|min_length[6]|max_length[32]',
			array(	'required'		=>	'%s Harus Diisi',
					'min_length'	=>	'%s Minimal 6 karakter',
					'max_length'	=>	'%s Maximal 32 Karakter'));
		$valid->set_rules('nama_pengguna','Nama Pengguna','required',
			array(	'required'	=>	'%s Harus Diisi'));

		if($valid->run()=== FALSE){
			//end validasi

		$data = array(	'title'				=>	'Tambah Pengguna',
						'pengguna'			=>	$pengguna,
						'isi'				=>	'admin/pengguna/tambah'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// START MASUK DATABASE
		}else{
			$i = $this->input;
			$data = array(	'id_pengguna'		=>	$i->post('id_pengguna'),
							'nama_pengguna'		=>	$i->post('nama_pengguna'),
							'email_pengguna'	=>	$i->post('email_pengguna'),
							'username'			=>	$i->post('username'),
							'password'			=>	sha1($i->post('password')),
							'akses_level'		=>	"User",
							'tanggal_pengguna'	=>	date('Y-m-d H:i:s')
							);
			$this->pengguna_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Pengguna Berhasil Di Tambahkan');
			redirect(base_url('backend/pengguna'),'refresh');

		}
	//end masuk database 
	}


	//edit pengguna
	public function edit($id_pengguna)
	{
		$pengguna 		=	$this->pengguna_model->listing($id_pengguna);


		//validaasi input
		$valid = $this->form_validation;

		$valid->set_rules('nama_pengguna','Nama Pengguna','required',
			array(	'required'	=>	'%s Harus Diisi'));

		if($valid->run()=== FALSE){
			//end validaasi
		$data = array(	'title'				=>	'Edit Pengguna',
						'id_pengguna'		=>	'id_pengguna',
						'pengguna'			=>	$pengguna,
						'isi'				=>	'admin/pengguna/edit'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		//start masuk ddatabase
		}else{
			$i = $this->input;
			$data = array(	'id_pengguna'		=>	$id_pengguna,
							'nama_pengguna'		=>	$i->post('nama_pengguna'),
							'email_pengguna'	=>	$i->post('email_pengguna'),
							'username'			=>	$i->post('username'),
							'password'			=>	sha1($i->post('password')),
							'akses_level'		=>	"User",
							'tanggal_pengguna'	=>	date('Y-m-d H:i:s')
						);
			$this->pengguna_model->edit($data);
			$this->session->set_flashdata('sukses', 'Pengguna Berhasil Diedit');
			redirect(base_url('backend/pengguna'),'refresh');

		}
		//end masuk database
	}

	//hapus pengguna
	public function delete($id_pengguna)
	{

		// proteksi user harus login dulu
		$this->simple_login->check_login();

		$data = array(	'id_pengguna'	=>	$id_pengguna);

		$this->pengguna_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data Pengguna Berhasil Dihapus');
		redirect(base_url('backend/pengguna'),'refresh');
	}

}

/* End of file Pengguna.php */
/* Location: ./application/controllers/backend/Pengguna.php */