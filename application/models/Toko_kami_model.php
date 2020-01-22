<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko_kami_model extends CI_Model {

	// load database
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
				$this->db->from('tbl_toko_kami');
				$this->db->where('id_toko', $id);
				$this->db->order_by('id_toko', 'desc');
				$query = $this->db->get();
				return $query->row();
			}else{
					$this->db->select('*');
				$this->db->from('tbl_toko_kami');
				$this->db->order_by('id_toko', 'desc');
				$query = $this->db->get();
				return $query->result();
			}
		}
	
	// detail data outlet
		public function detail()
		{
			$this->db->select('*');
			$this->db->from('tbl_toko_kami');
			//where
			$this->db->order_by('id_toko', 'desc');
			$query = $this->db->get();
			return $query->row();
		}

		// insert/tambah user
		public function tambah($data)
		{
			$this->db->insert('tbl_toko_kami', $data);
		}

		// update user
		public function edit($data)
		{
			$this->db->where('id_toko', $data['id_toko']);
			$this->db->update('tbl_toko_kami', $data);
		}

		// delete user
		public function delete($data)
		{
			$this->db->where('id_toko', $data['id_toko']);
			$this->db->delete('tbl_toko_kami', $data);
		}
		


}

/* End of file Toko_kami_model.php */
/* Location: ./application/models/Toko_kami_model.php */