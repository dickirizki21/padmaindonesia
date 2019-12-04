<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	// Halaman Utama Website - Detailpage
	public function index()
	{
		$data = array(	'title'	=>	'Detail | Padma Indonesia',
						'isi'	=>	'berita/detail'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Detail.php */
/* Location: ./application/controllers/Detail.php */