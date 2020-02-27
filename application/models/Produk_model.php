<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {

	//load koneksi database
	public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}	

		// listing data Artikel
	public function listing($id = null)
		{
			if ($id !== null) {
				$this->db->select('tbl_produk.*,
							tbl_kategori_produk.nama_kategori_produk,
							tbl_kategori_produk.slug_kategori_produk,
							tbl_pengguna.nama_pengguna');
				$this->db->from('tbl_produk');
				// star join 2 tabel
					$this->db->join('tbl_kategori_produk', 'tbl_produk.id_kategori_produk = tbl_kategori_produk.id_kategori_produk', 'LEFT');
					$this->db->join('tbl_pengguna', 'tbl_produk.id_pengguna = tbl_pengguna.id_pengguna', 'LEFT');
				//where
				$this->db->where('id_produk', $id);
				$this->db->order_by('id_produk', 'desc');
				$query = $this->db->get();
				return $query->row();
			}else{
				$this->db->select('tbl_produk.*,
							tbl_kategori_produk.nama_kategori_produk,
							tbl_kategori_produk.slug_kategori_produk,
							tbl_pengguna.nama_pengguna');
				$this->db->from('tbl_produk');
				// start join 2 tabel
					$this->db->join('tbl_kategori_produk', 'tbl_produk.id_kategori_produk = tbl_kategori_produk.id_kategori_produk', 'LEFT');
					$this->db->join('tbl_pengguna', 'tbl_produk.id_pengguna = tbl_pengguna.id_pengguna', 'LEFT');
				// end join
				$this->db->order_by('id_produk', 'desc');
				$query = $this->db->get();
				return $query->result();
			}
		}

		// detail data Artikrl
		public function detail($id_produk)
		{
			$this->db->select('*');
			$this->db->from('tbl_produk');
			//where
			$this->db->where('id_produk', $id_produk);
			$this->db->order_by('id_produk', 'desc');
			$query = $this->db->get();
			return $query->row();
		}

		public function get_list($limit, $start)
		{
		$this->db->join('tbl_kategori_produk', 'tbl_produk.id_kategori_produk = tbl_kategori_produk.id_kategori_produk', 'LEFT');
		$this->db->join('tbl_pengguna', 'tbl_produk.id_pengguna = tbl_pengguna.id_pengguna', 'LEFT');
	 	$this->db->order_by('tanggal_post', 'desc');
        $query = $this->db->get('tbl_produk', $limit, $start);
        return $query->result();
    	}

		public function artikel_terbaru()
	{
		$this->db->select('tbl_produk.*,
							tbl_kategori_produk.nama_kategori_produk,
							tbl_kategori_produk.slug_kategori_produk,
							tbl_pengguna.nama');
			$this->db->from('tbl_produk');
			// star join 2 tabel
				$this->db->join('tbl_kategori_produk', 'tbl_produk.id_kategori_produk = tbl_kategori_produk.id_kategori_produk', 'LEFT');
				$this->db->join('tbl_pengguna','tbl_produk.id_pengguna = tbl_pengguna.id_pengguna', 'LEFT');
			// end join
			$this->db->limit(3);
			$this->db->order_by('tanggal_postg', 'desc');
			$query = $this->db->get();
			return $query->result();	
	}
		// Login 
		public function login($username, $password)
		{
			$this->db->select('*');
			$this->db->from('tbl_produk');
			//where
			$this->db->where(array(	'username'	=>	$username,
									'password'	=>	sha1($password)));
			$this->db->order_by('id_produk', 'desc');
			$query = $this->db->get();
			return $query->row();
		}

		// insert/tambah Artikel
		public function tambah($data)
		{
			$this->db->insert('tbl_produk', $data);
		}

		// update Artikel
		public function edit($data)
		{
			$this->db->where('id_produk', $data['id_produk']);
			$this->db->update('tbl_produk', $data);
		}

		// delete Artikel
		public function delete($data)
		{
			$this->db->where('id_produk', $data['id_produk']);
			$this->db->delete('tbl_produk', $data);
		}


	

}

/* End of file Produk_model.php */
/* Location: ./application/models/Produk_model.php */