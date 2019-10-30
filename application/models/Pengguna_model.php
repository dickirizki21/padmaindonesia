<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna_model extends CI_Model {

		// load database
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->database();
	}

	// listing data pengguna
		public function listing()
		{
			$this->db->select('*');
			$this->db->from('tbl_pengguna');
			$this->db->order_by('id_pengguna', 'desc');
			$query = $this->db->get();
			return $query->result();
		}

		public function listingin()
		{
			$this->db->select('*');
			$this->db->from('tbl_pengguna');
			$this->db->order_by('id_pengguna', 'desc');
			$query = $this->db->get();
			return $query->row();
		}
	
	// detail data user
		public function detail($id_pengguna)
		{
			$this->db->select('*');
			$this->db->from('tbl_pengguna');
			//where
			$this->db->where('id_pengguna', $id_pengguna);
			$this->db->order_by('id_pengguna', 'desc');
			$query = $this->db->get();
			return $query->row();
		}


		// insert/tambah user
		public function tambah($data)
		{
			$this->db->insert('tbl_pengguna', $data);
		}

		// update user
		public function edit($data)
		{
			$this->db->where('id_pengguna', $data['id_pengguna']);
			$this->db->update('tbl_pengguna', $data);
		}

		// delete user
		public function delete($data)
		{
			$this->db->where('id_pengguna', $data['id_pengguna']);
			$this->db->delete('tbl_pengguna', $data);
		}
		

}

/* End of file Pengguna_model.php */
/* Location: ./application/models/Pengguna_model.php */