<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {

	// Halaman Utama Website - Tentangpage
	public function index()
	{
		$data = array(	'title'	=>	'Tentang | Padma Indonesia',
						'isi'	=>	'Tentang/list'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Tentang.php */
/* Location: ./application/controllers/Tentang.php */