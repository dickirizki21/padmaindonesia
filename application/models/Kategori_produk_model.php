<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_produk_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->database();
	}

		// listing data cabang toko
		public function listing($id = null)
		{
			if ($id !== null) {
				$this->db->select('*');
				$this->db->from('tbl_kategori_produk');
				$this->db->where('id_kategori_produk', $id);
				$this->db->order_by('id_kategori_produk', 'desc');
				$query = $this->db->get();
				return $query->row();
				
			}else{

				$this->db->select('*');
				$this->db->from('tbl_kategori_produk');
				$this->db->order_by('id_kategori_produk', 'desc');
				$query = $this->db->get();
				return $query->result();
			}
		}
	
	// detail data outlet
		public function detail()
		{
			$this->db->select('*');
			$this->db->from('tbl_kategori_produk');
			//where
			$this->db->order_by('id_toko', 'desc');
			$query = $this->db->get();
			return $query->row();
		}

		// insert/tambah user
		public function tambah($data)
		{
			$this->db->insert('tbl_kategori_produk', $data);
		}

		// update user
		public function edit($data)
		{
			$this->db->where('id_kategori_produk', $data['id_kategori_produk']);
			$this->db->update('tbl_kategori_produk', $data);
		}

		// delete user
		public function delete($data)
		{
			$this->db->where('id_kategori_produk', $data['id_kategori_produk']);
			$this->db->delete('tbl_kategori_produk', $data);
		}
		
	

}

/* End of file Kategori_produk_model.php */
/* Location: ./application/models/Kategori_produk_model.php */