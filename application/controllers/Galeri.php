<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	// Halaman Utama Website - Galeripage
	public function index()
	{
		$data = array(	'title'	=>	'Galeri | Padma Indonesia',
						'isi'	=>	'Galeri/list'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Galeri.php */
/* Location: ./application/controllers/Galeri.php */