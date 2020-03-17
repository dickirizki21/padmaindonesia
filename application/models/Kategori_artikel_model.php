<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_artikel_model extends CI_Model {

		// load database
		public function __construct()
		{
			parent::__construct();
			//Do your magic here
			$this->load->database();
		}

		// listing data grid view
		public function listing($id = null)
		{
			if ($id !== null) {
				$this->db->select('*');
				$this->db->from('tbl_kategori_artikel');
				$this->db->where('id_kategori_artikel', $id);
				$this->db->order_by('id_kategori_artikel', 'desc');
				$query = $this->db->get();
				return $query->row();
				
			}else{

				$this->db->select('*');
				$this->db->from('tbl_kategori_artikel');
				$this->db->order_by('id_kategori_artikel', 'desc');
				$query = $this->db->get();
				return $query->result();
			}
		}

		public function listingarsipartikel()
		{
			$this->db->select('tbl_artikel.*, tbl_kategori_artikel.nama_kategori_artikel, tbl_kategori_artikel.slug_kategori_artikel, tbl_pengguna.nama_pengguna');
			$this->db->from('tbl_artikel');
			// join
				$this->db->join('tbl_kategori_artikel', 'tbl_kategori_artikel.id_kategori_artikel = tbl_artikel.id_kategori_artikel', 'LEFT');
				$this->db->join('tbl_pengguna', 'tbl_pengguna.id_pengguna = tbl_artikel.id_pengguna', 'LEFT');
			// end join
			$this->db->where('jenis_artikel', "Artikel");
			$this->db->group_by('YEAR(tbl_artikel.tanggal_post)');
			$this->db->order_by('id_artikel', 'DESC');
			$query = $this->db->get();
			return $query->result();

		}

		public function listing_by_kategori_artikel($slug_kategori_artikel)
		{
			$this->db->select('*');
			$this->db->from('tbl_kategori_artikel');
			$this->db->where('slug_kategori_artikel', $slug_kategori_artikel);
			$this->db->order_by('id_kategori_artikel');
			$query = $this->db->get();
			return $query->row();
		}

		// listing kategori berita group by
		public function kategori_artikel_groupby()
		{
			$this->db->select('tbl_artikel.*, tbl_kategori_artikel.nama_kategori_artikel, tbl_kategori_artikel.slug_kategori_artikel, tbl_pengguna.nama_pengguna');
			$this->db->from('tbl_artikel');
			// join
				$this->db->join('tbl_kategori_artikel', 'tbl_kategori_artikel.id_kategori_artikel = tbl_artikel.id_kategori_artikel', 'LEFT');
				$this->db->join('tbl_pengguna', 'tbl_pengguna.id_pengguna = tbl_artikel.id_pengguna', 'LEFT');
			// end join
			$this->db->where('jenis_artikel', "Artikel");
			$this->db->group_by('tbl_artikel.id_kategori_artikel');
			$this->db->order_by('id_artikel', 'DESC');
			$query = $this->db->get();
			return $query->result();
		}
	
		
		// insert/tambah user
		public function tambah($data)
		{
			$this->db->insert('tbl_kategori_artikel', $data);
		}

		// update user
		public function edit($data)
		{
			$this->db->where('id_kategori_artikel', $data['id_kategori_artikel']);
			$this->db->update('tbl_kategori_artikel', $data);
		}

		// delete user
		public function delete($data)
		{
			$this->db->where('id_kategori_artikel', $data['id_kategori_artikel']);
			$this->db->delete('tbl_kategori_artikel', $data);
		}

}

/* End of file Kategori_artikel_model.php */
/* Location: ./application/models/Kategori_artikel_model.php */