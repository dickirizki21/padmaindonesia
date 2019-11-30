<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	// Halaman Utama Website - Beritapage
	public function index()
	{
		$data = array(	'title'	=>	'Berita | Padma Indonesia',
						'isi'	=>	'Berita/list'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Berita.php */
/* Location: ./application/controllers/Berita.php */