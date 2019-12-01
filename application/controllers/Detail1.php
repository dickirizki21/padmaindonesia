<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class detail1 extends CI_Controller {

	// Halaman Utama Website - detail1page
	public function index()
	{
		$data = array(	'title'	=>	'Produk Detail | Padma Indonesia',
						'isi'	=>	'produk/detail1'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file detail1.php */
/* Location: ./application/controllers/detail1.php */