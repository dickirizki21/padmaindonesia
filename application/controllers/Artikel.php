<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	// Halaman Utama Website - Artikelpage
	public function index()
	{
		$data = array(	'title'	=>	'Artikel | Padma Indonesia',
						'isi'	=>	'Artikel/list'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Artikel.php */
/* Location: ./application/controllers/Artikel.php */