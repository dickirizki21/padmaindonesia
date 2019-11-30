<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	// Halaman Utama Website - Kontakpage
	public function index()
	{
		$data = array(	'title'	=>	'Kontak Kami - Padma Indonesia',
						'isi'	=>	'Kontak/list'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Kontak.php */
/* Location: ./application/controllers/Kontak.php */