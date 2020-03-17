<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function __construct()
	{
		// load model
		parent::__construct();
		$this->load->model('konfigurasi_model');
		$this->load->model('kategori_artikel_model');
		$this->load->model('artikel_model');
		$this->load->model('kategori_produk_model');
	}

	// Halaman Utama Website - Artikelpage
	public function index()
	{
		// listing berita dengan pagination
		$this->load->library('pagination');

		$config['base_url'] 	= base_url('artikel/index/');
		$config['total_rows'] 	= count($this->artikel_model->total_listing_artikel_mainpage());
		$config['per_page'] 	= 5;
		$config['uri_segment']	= 3;
		// limit dan start
			$limit			= $config['per_page'];
			$start			= ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;

		$this->pagination->initialize($config);

		$artikel				= $this->artikel_model->listing_artikel_mainpage($limit,$start);
		
		// end listing berita dengan pagination
		$konfigurasi 			= $this->konfigurasi_model->listing();
		$kategori_artikel 		= $this->kategori_artikel_model->kategori_artikel_groupby();
		$listingarsipartikel 	= $this->kategori_artikel_model->listingarsipartikel();
		$listingartikel 		= $this->artikel_model->listingartikel();
		$listingartikelterbaru 	= $this->artikel_model->listingartikelterbaru();
		$kategori_produk 		= $this->kategori_produk_model->listing();

		$data = array(	'title'					=>	'Artikel | Padma Indonesia',
						'artikel'				=>	$artikel,
						'listingartikel'		=> 	$listingartikel,
						'listingartikelterbaru'	=>	$listingartikelterbaru,
						'listingarsipartikel'	=> 	$listingarsipartikel,
						'konfigurasi'			=> 	$konfigurasi,
						'kategori_artikel'		=>	$kategori_artikel,
						'kategori_produk'		=>	$kategori_produk,
						'pagination'			=>	$this->pagination->create_links(),
						'isi'					=>	'artikel/list'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	// listing kategori artikel
	public function kategori($slug_kategori_artikel)
	{

		// listing kategori berita dengan pagination
		$this->load->library('pagination');
		$kategori_artikel 		=	$this->kategori_artikel_model->listing_by_kategori_artikel($slug_kategori_artikel);
		$id_kategori_artikel	=	$kategori_artikel->id_kategori_artikel;

		$config['base_url'] 	= base_url('artikel/kategori/'.$slug_kategori_artikel.'/index/');
		$config['total_rows'] 	= count($this->artikel_model->total_Kategori_artikel_mainpage($id_kategori_artikel));
		$config['per_page'] 	= 5;
		$config['uri_segment']	= 5;
		// limit dan start
			$limit				= $config['per_page'];
			$start				= ($this->uri->segment(5)) ? ($this->uri->segment(5)) : 0;

		$this->pagination->initialize($config);

		$artikel				= $this->artikel_model->kategori_artikel($id_kategori_artikel,$limit,$start);
		
		// end listing berita dengan pagination
		$konfigurasi 			= $this->konfigurasi_model->listing();
		$listingarsipartikel 	= $this->kategori_artikel_model->listingarsipartikel();
		$listingartikel 		= $this->artikel_model->listingartikel();
		$listingartikelterbaru 	= $this->artikel_model->listingartikelterbaru();
		$kategori_produk 		= $this->kategori_produk_model->listing();

		$data = array(	'title'					=>	'Artikel | Padma Indonesia',
						'artikel'				=>	$artikel,
						'listingartikel'		=> 	$listingartikel,
						'listingartikelterbaru'	=>	$listingartikelterbaru,
						'listingarsipartikel'	=> 	$listingarsipartikel,
						'konfigurasi'			=> 	$konfigurasi,
						'kategori_artikel'		=>	$kategori_artikel,
						'kategori_produk'		=>	$kategori_produk,
						'pagination'			=>	$this->pagination->create_links(),
						'isi'					=>	'artikel/list'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	public function detail_artikel($slug_artikel)
        {
                $detail_artikel			= $this ->artikel_model->detail_artikel($slug_artikel);
                $konfigurasi 			= $this->konfigurasi_model->listing();
				$kategori_artikel 		= $this->kategori_artikel_model->listing();
				$listingarsipartikel 	= $this->kategori_artikel_model->listingarsipartikel();
				$artikel 				= $this->artikel_model->listing();
				$listingartikel 		= $this->artikel_model->listingartikel();
				$listingartikelterbaru 	= $this->artikel_model->listingartikelterbaru();
				$kategori_produk 		= $this->kategori_produk_model->listing();

                $data = array(  'title'					=> $artikel->judul_artikel.' | Artikel - CIP',
                                'artikel'				=>	$artikel,
                                'detail_artikel'		=>	$detail_artikel,
								'listingartikel'		=> 	$listingartikel,
								'listingartikelterbaru'	=>	$listingartikelterbaru,
								'listingarsipartikel'	=> 	$listingarsipartikel,
								'konfigurasi'			=> 	$konfigurasi,
								'kategori_artikel'		=>	$kategori_artikel,
								'kategori_produk'		=>	$kategori_produk,
                                'isi'       			=>  'artikel/detail');
                $this->load->view('layout/wrapper', $data, FALSE);              
        }

}

/* End of file Artikel.php */
/* Location: ./application/controllers/Artikel.php */