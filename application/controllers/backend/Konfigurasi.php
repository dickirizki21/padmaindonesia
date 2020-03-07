<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengguna_model');
		$this->load->model('toko_kami_model');
		$this->load->model('kategori_produk_model');
		$this->load->model('kategori_artikel_model');
		$this->load->model('artikel_model');
		$this->load->model('produk_model');
		$this->load->model('konfigurasi_model');
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
		$konfigurasi 			= 	$this->konfigurasi_model->listing();
		$data_konfigurasi		= 	count($konfigurasi);


		//validasi input
		$valid = $this->form_validation;

		$valid->set_rules('visi','Visi','required',
			array(	'required'	=>	'%s Harus Diisi'));

		if($valid->run()=== FALSE){
			//end validasi

		$data = array(	'title'				=>	'Konfigurasi Website',
						'konfigurasi'		=>	$konfigurasi,
						'isi'				=>	'admin/konfigurasi/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// START MASUK DATABASE
		}else{
			$i = $this->input;
			$data = array(	'id_konfigurasi'		=>	$konfigurasi->id_konfigurasi,
							'id_pengguna'			=>	$this->session->userdata('id_pengguna'),
							'nama_perusahaan'		=> 	$i->post('nama_perusahaan'),
							'visi'					=>	$i->post('visi'),
							'misi'					=>	$i->post('misi'),
							'sejarah_perusahaan'	=>	$i->post('sejarah_perusahaan'),
							'alamat'				=>	$i->post('alamat'),
							'tlp_wa'				=>	$i->post('tlp_wa'),
							'tlp'					=>	$i->post('tlp'),
							'email'					=>	$i->post('email'),
							'tokopedia'				=>	$i->post('tokopedia'),
							'bukalapak'				=>	$i->post('bukalapak'),
							'facebook'				=>	$i->post('facebook'),
							'twitter'				=>	$i->post('twitter'),
							'instagram'				=>	$i->post('instagram'),
							'tagline'				=>	$i->post('tagline'),
							'kelebihan_perusahaan'	=>	$i->post('kelebihan_perusahaan'),
							'maps'					=>	$i->post('maps'),
							'keyword'				=> 	$i->post('keyword'),
							'tanggal_k'				=>	date('Y-m-d H:i:s')
							);
			$this->konfigurasi_model->edit($data);
			$this->session->set_flashdata('sukses', 'Konfigurasi Berhasil Update');
			redirect(base_url('backend/konfigurasi'),'refresh');

		}
	//end masuk database 
	}

}

/* End of file Konfigurasi.php */
/* Location: ./application/controllers/backend/Konfigurasi.php */