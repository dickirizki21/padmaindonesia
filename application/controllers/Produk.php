<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	// Halaman Utama Website - Produkpage
	public function index()
	{
		$data = array(	'title'	=>	'Produk | Padma Indonesia',
						'isi'	=>	'Produk/list'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Produk.php */
/* Location: ./application/controllers/Produk.php */