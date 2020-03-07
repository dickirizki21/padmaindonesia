<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function listing()
	{
		// $query = $this->db->get('tbl_konfigurasi');
		// return $query->row();
		$this->db->select('tbl_konfigurasi.*,
							tbl_pengguna.nama_pengguna');
				$this->db->from('tbl_konfigurasi');
				// star join 2 tabel
					$this->db->join('tbl_pengguna', 'tbl_konfigurasi.id_pengguna = tbl_pengguna.id_pengguna', 'LEFT');
				//where
				$this->db->where('id_konfigurasi', '1');
				$this->db->order_by('id_konfigurasi', 'desc');
				$query = $this->db->get();
				return $query->row();
	}

	public function edit($data)
	{
		$this->db->where('id_konfigurasi', $data['id_konfigurasi']);
		$this->db->update('tbl_konfigurasi', $data);
	}

}

/* End of file Konfirgurasi_model.php */
/* Location: ./application/models/Konfirgurasi_model.php */