<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

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

		$data = array(	'title'				=>	'Produk ('.count($produk).')',
			'produk'			=>	$produk,
			'data_toko_kami'	=>	$data_toko_kami,
			'data_pengguna'		=> 	$data_pengguna,
			'isi'				=>	'admin/produk/list'
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
		
		$valid->set_rules('nama_produk','Nama Produk','required|trim|min_length[10]|max_length[32]',
			array(	'required'	=>	'%s Nama Produk Harus Di isi Bosku',
				'min_length'	=>	'%s Minimal 10 karakter',
				'max_length'	=>	'%s Maximal 30 Karakter'));
		$valid->set_rules('deskripsi','Deskripsi Produk','required',
			array(	'required'	=>	'%s Deskripsi Harus Di isi'));
		
		if($valid->run()==FALSE){
			//end validasi

			$data = array(	'title'					=>	'Tambah Produk',
							'produk'				=>	$produk,
							'kategori_artikel'		=>	$kategori_artikel,
							'kategori_produk'		=>	$kategori_produk,
							'data_artikel'			=>	$data_artikel,
							'data_produk'			=> 	$data_produk,
							'data_kategori_artikel'	=>	$data_kategori_artikel,
				'isi'					=>	'admin/produk/tambah'
			);
			$this->load->view('admin/layout/wrapper', $data, FALSE);
		// START MASUK DATABASE
		}else{
			// simpan gambar/foto
		$config['upload_path'] = './assets/images/produk/';	//path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';	//menyesuaikan type gambar yang diakses
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya 
		$this->upload->initialize($config);
		if(!empty($_FILES['gambar_produk']['name'])){
			if($this->upload->do_upload('gambar_produk')){
				$gambar_produk = $this->upload->data();
				//Compress Image
				$config['image_library']='gd2';
				$config['source_image']='./assets/images/produk/'.$gambar_produk['file_name'];
				$config['create_thumb']= FALSE;
				$config['maintain_ratio']= FALSE;
				$config['quality']= '60%';
				$config['width']= 700;
				$config['height']= 550;
				$config['new_image']='./assets/images/produk/'.$gambar_produk['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$gmbr=$gambar_produk['file_name'];

				$i = $this->input;
			// buat slug artikel
				$slug_nama_produk = url_title($i->post('nama_produk'), 'dash', TRUE);
				$data = array(	'id_produk'				=> 	$i->post('id_produk'),
								'id_kategori_produk'	=>	$i->post('id_kategori_produk'),
								'id_pengguna'			=>	$this->session->userdata('id_pengguna'),
								'nama_produk'			=>	$i->post('nama_produk'),
								'slug_nama_produk'		=>	$slug_nama_produk,
								'deskripsi'				=>	$i->post('deskripsi'),
								'stok'					=>	$i->post('stok'),
								'gambar_produk'			=>	$gmbr,
								'tanggal_postg'			=>	date('Y-m-d H:i:s')
				);
				$this->produk_model->tambah($data);
				$this->session->set_flashdata('sukses', 'Produk Berhasil Ditambahkan');
				redirect(base_url('backend/produk'),'refresh');

			}
		//end masuk database

		}
	}
}

	//edit Artikel
public function edit($id_produk)
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
	$produk 				= 	$this->produk_model->listing($id_produk);

		//validaasi input
	$valid = $this->form_validation;
	if ($this->input->post()) {
		$valid->set_rules('nama_produk','Nama Produk','required|trim|min_length[10]|max_length[32]',
			array(	'required'	=>	'%s Nama Produk Harus Di isi Bosku',
				'min_length'	=>	'%s Minimal 10 karakter',
				'max_length'	=>	'%s Maximal 30 Karakter'));
		$valid->set_rules('deskripsi','Deskripsi Produk','required',
			array(	'required'	=>	'%s Deskripsi Harus Di isi'));	
		if ($valid->run() == FALSE) {


			print_r("Gagal"); die;
		}else{
			if (!empty($_FILES['gambar_produk']['name'])) {
				$config['upload_path'] = './assets/images/produk/';	//path folder
				$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';	//menyesuaikan type gambar yang diakses
				$config['encrypt_name'] = TRUE; //nama yang terupload nantinya 
				$this->upload->initialize($config);
				if($this->upload->do_upload('gambar_produk')){
					$gambar_produk = $this->upload->data();
				//Compress Image
					$config['image_library']='gd2';
					$config['source_image']='./assets/images/produk/'.$gambar_produk['file_name'];
					$config['create_thumb']= FALSE;
					$config['maintain_ratio']= FALSE;
					$config['quality']= '60%';
					$config['width']= 700;
					$config['height']= 550;
					$config['new_image']='./assets/images/produk/'.$gambar_produk['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();

					$gmbr=$gambar_produk['file_name'];

					$i = $this->input;
			// buat slug artikel
					$slug_nama_produk = url_title($i->post('nama_produk'), 'dash', TRUE);
					$data = array(	'id_produk'				=> 	$id_produk,
									'id_kategori_produk'	=>	$i->post('id_kategori_produk'),
									'id_pengguna'			=>	$this->session->userdata('id_pengguna'),
									'nama_produk'			=>	$i->post('nama_produk'),
									'slug_nama_produk'		=>	$slug_nama_produk,
									'deskripsi'				=>	$i->post('deskripsi'),
									'stok'					=>	$i->post('stok'),
									'gambar_produk'			=>	$gmbr,
									'tanggal_postg'			=>	date('Y-m-d H:i:s')
					);
					$this->produk_model->edit($data);
					$this->session->set_flashdata('sukses', 'Produk Berhasil Diedit');
					redirect(base_url('backend/produk'),'refresh');
				}else{
					$error = array('error' => $this->upload->display_errors());
					print_r($error); die;
				}
			}else{
				$i = $this->input;
				// buat slug artikel
				$slug_nama_produk = url_title($i->post('nama_produk'), 'dash', TRUE);
				$post = $i->post();
				$post['slug_nama_produk'] = $slug_nama_produk;
				$post['tanggal_postg'] = date('Y-m-d H:i:s');
				$post['id_produk']	= $id_produk;
				// print_r($post); die;
				// $data = array(	'id_produk'				=> 	$id_produk,
				// 	'id_kategori_produk'	=>	$i->post('id_kategori_produk'),
				// 	'id_pengguna'			=>	$this->session->userdata('id_pengguna'),
				// 	'nama_produk'			=>	$i->post('nama_produk'),
				// 	'slug_nama_produk'		=>	$slug_nama_produk,
				// 	'deskripsi'				=>	$i->post('deskripsi'),
				// 	'stok'					=>	$i->post('stok'),
				// 	'tanggal_postg'			=>	date('Y-m-d H:i:s')
				// );
				$edit = $this->produk_model->edit($post);
				$this->session->set_flashdata('sukses', 'Produk Berhasil Diedit');
				redirect(base_url('backend/produk'),'refresh');

			}
		}
	}
	$data = array(	'title'					=>	'Edit Produk',
					'id_produk'				=> 	'id_produk',
					'produk'				=>	$produk,
					'kategori_artikel'		=>	$kategori_artikel,
					'kategori_produk'		=>	$kategori_produk,
					'data_artikel'			=>	$data_artikel,
					'data_kategori_artikel'	=>	$data_kategori_artikel,
					'isi'					=>	'admin/produk/edit'
	);

	$this->load->view('admin/layout/wrapper', $data, FALSE);
}

	//hapus artikel
public function delete($id_produk)
{
		// proteksi artikel harus login dulu
	$this->simple_login->check_login();

	$data = array(	'id_produk'	=>	$id_produk);

	$this->produk_model->delete($data);
	$this->session->set_flashdata('sukses', 'Produk Berhasil Dihapus');
	redirect(base_url('backend/produk'),'refresh');
}


}

/* End of file Produk.php */
/* Location: ./application/controllers/backend/Produk.php */