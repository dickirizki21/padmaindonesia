<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detailartikel extends CI_Controller {

	// Halaman Utama Website - Detailartikelpage
	public function index()
	{
		$data = array(	'title'	=>	'Detail Artikel | Padma Indonesia',
						'isi'	=>	'artikel/detail'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Detailartikel.php */
/* Location: ./application/controllers/Detailartikel.php */