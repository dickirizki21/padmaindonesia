<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

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

		$data = array(	'title'				=>	'Artikel ('.count($artikel).')',
						'artikel'			=>	$artikel,
						'data_toko_kami'	=>	$data_toko_kami,
						'data_pengguna'		=> 	$data_pengguna,
						'isi'				=>	'admin/artikel/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

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
		$artikel 				= 	$this->artikel_model->listing();
		$data_artikel 			= 	count($artikel);
		$produk 				= 	$this->produk_model->listing();
		$data_produk 			= 	count($produk);

		//validasi input
		$valid = $this->form_validation;

		$valid->set_rules('judul_artikel','Judul Artikel','required',
			array(	'required'	=>	'%s Judul Sudah Ada..'));
		
		if($valid->run()==FALSE){
			//end validasi
		
		$data = array(	'title'					=>	'Tambah Artikel',
						'artikel'				=>	$artikel,
						'kategori_artikel'		=>	$kategori_artikel,
						'data_artikel'			=>	$data_artikel,
						'data_kategori_artikel'	=>	$data_kategori_artikel,
						'isi'					=>	'admin/artikel/tambah'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// START MASUK DATABASE
		}else{
			// simpan gambar/foto
		$config['upload_path'] = './assets/images/artikel/';	//path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';	//menyesuaikan type gambar yang diakses
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya 
		$this->upload->initialize($config);
		if(!empty($_FILES['gambar']['name'])){
			if($this->upload->do_upload('gambar')){
				$gambar = $this->upload->data();
				//Compress Image
				$config['image_library']='gd2';
				$config['source_image']='./assets/images/artikel/'.$gambar['file_name'];
				$config['create_thumb']= FALSE;
				$config['maintain_ratio']= FALSE;
				$config['quality']= '60%';
				$config['width']= 1280;
				$config['height']= 500;
				$config['new_image']='./assets/images/artikel/'.$gambar['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$gmbr=$gambar['file_name'];

			$i = $this->input;
			// buat slug artikel
			$slug_artikel = url_title($i->post('judul_artikel'), 'dash', TRUE);
			$data = array(	'id_artikel'			=> 	$i->post('id_artikel'),
							'id_pengguna'			=>	$this->session->userdata('id_pengguna'),
							'id_kategori_artikel'	=>	$i->post('id_kategori_artikel'),
							'slug_artikel'			=>	$slug_artikel,
							'judul_artikel'			=>	$i->post('judul_artikel'),
							'status_artikel'		=>	$i->post('status_artikel'),
							'isi_artikel'			=>	$i->post('isi_artikel'),
							'jenis_artikel'			=>	$i->post('jenis_artikel'),
							'keyword'				=>	$i->post('keywords'),
							'gambar'				=>	$gmbr,
							'tanggal_post'			=>	date('Y-m-d H:i:s')
						);
			$this->artikel_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Artikel Berhasil Ditambahkan');
			redirect(base_url('backend/artikel'),'refresh');
			
			}
		//end masuk database

			}
		}
	}

	//edit Artikel
	public function edit($id_artikel)
	{
		$toko_kami 				= 	$this->toko_kami_model->listing();
		$data_toko_kami 		=	count($toko_kami);
		$pengguna 				= 	$this->pengguna_model->listing();
		$data_pengguna			= 	count($pengguna);
		$kategori_produk 		= 	$this->kategori_produk_model->listing();
		$data_kategori_produk 	=	count($kategori_produk);
		$kategori_artikel 		= 	$this->kategori_artikel_model->listing();
		$data_kategori_artikel 	=	count($kategori_artikel);
		$artikel 				= 	$this->artikel_model->listing($id_artikel);
		$produk 				= 	$this->produk_model->listing();
		$data_produk 			= 	count($produk);
		
		//validaasi input
		$valid = $this->form_validation;

		$valid->set_rules('judul_artikel','Judul Artikel','required',
			array(	'required'	=>	'%s Harus Diisi'));

		if($valid->run()== FALSE){
			//end validaasi
		$data = array(	'title'					=>	'Edit Artikel',
						'id_artikel'			=>	'id_artikel',
						'artikel'				=>	$artikel,
						'kategori_artikel'		=>	$kategori_artikel,
						'kategori_produk'		=>	$kategori_produk,
						'data_kategori_artikel'	=>	$data_kategori_artikel,
						'isi'					=>	'admin/artikel/edit'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		//start masuk ddatabase
		}else{

		// simpan gambar/foto
		$config['upload_path'] = './assets/images/artikel/';	//path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';	//menyesuaikan type gambar yang diakses
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya 
		$this->upload->initialize($config);
		if(!empty($_FILES['gambar']['name'])){
			if($this->upload->do_upload('gambar')){
				$gambar = $this->upload->data();
				//Compress Image
				$config['image_library']='gd2';
				$config['source_image']='./assets/images/artikel/'.$gambar['file_name'];
				$config['create_thumb']= FALSE;
				$config['maintain_ratio']= FALSE;
				$config['quality']= '60%';
				$config['width']= 1280;
				$config['height']= 500;
				$config['new_image']='./assets/images/artikel/'.$gambar['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$gmbr=$gambar['file_name'];

			$i = $this->input;
			// buat slug artikel
			$slug_artikel = url_title($i->post('judul_artikel'), 'dash', TRUE);
			$data = array(	'id_artikel'			=>	$id_artikel,
							'id_pengguna'			=>	$this->session->userdata('id_pengguna'),
							'id_kategori_artikel'	=>	$i->post('id_kategori_artikel'),
							'slug_artikel'			=>	$slug_artikel,
							'judul_artikel'			=>	$i->post('judul_artikel'),
							'status_artikel'		=>	$i->post('status_artikel'),
							'jenis_artikel'			=>	$i->post('jenis_artikel'),
							'isi_artikel'			=>	$i->post('isi_artikel'),
							'keyword'				=>	$i->post('keywords'),
							'gambar'				=>	$gmbr,//$upload_data['uploads']['file_name'],
							'tanggal_post'			=>	date('Y-m-d H:i:s'),
						);
			$this->artikel_model->edit($data);
			$this->session->set_flashdata('sukses', 'Artikel Berhasil Diedit');
			redirect(base_url('backend/artikel'),'refresh');

		}else{

			$i = $this->input;
			// buat slug artikel
			$slug_artikel = url_title($i->post('judul_artikel'), 'dash', TRUE);
			$data = array(	'id_artikel'			=>	$id_artikel,
							'id_pengguna'			=>	$this->session->userdata('id_pengguna'),
							'id_kategori_artikel'	=>	$i->post('id_kategori_artikel'),
							'slug_artikel'			=>	$slug_artikel,
							'judul_artikel'			=>	$i->post('judul_artikel'),
							'status_artikel'		=>	$i->post('status_artikel'),
							'jenis_artikel'			=>	$i->post('jenis_artikel'),
							'isi_artikel'			=>	$i->post('isi_artikel'),
							'keyword'				=>	$i->post('keywords'),
							'tanggal_post'			=>	date('Y-m-d H:i:s'),
						);
			$this->artikel_model->edit($data);
			$this->session->set_flashdata('sukses', 'Artikel Berhasil Diedit');
			redirect(base_url('backend/artikel'),'refresh');
				}
			}
		}
		//end masuk database
	}

	//hapus artikel
	public function delete($id_artikel)
	{
		// proteksi artikel harus login dulu
		$this->simple_login->check_login();

		$data = array(	'id_artikel'	=>	$id_artikel);

		$this->artikel_model->delete($data);
		$this->session->set_flashdata('sukses', 'Artikel Berhasil Dihapus');
		redirect(base_url('backend/artikel'),'refresh');
	}

}

/* End of file Artikel.php */
/* Location: ./application/controllers/backend/Artikel.php */