<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends CI_Controller {

	// Halaman Utama Website - Tokopage
	public function index()
	{
		$data = array(	'title'	=>	'Toko | Padma Indonesia',
						'isi'	=>	'Toko/list'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Toko.php */
/* Location: ./application/controllers/Toko.php */