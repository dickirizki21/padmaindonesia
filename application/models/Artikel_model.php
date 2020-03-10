<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_model extends CI_Model {

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
				$this->db->select('tbl_artikel.*,
							tbl_kategori_artikel.nama_kategori_artikel,
							tbl_kategori_artikel.slug_kategori_artikel,
							tbl_pengguna.nama_pengguna');
				$this->db->from('tbl_artikel');
				// star join 2 tabel
					$this->db->join('tbl_kategori_artikel', 'tbl_artikel.id_kategori_artikel = tbl_kategori_artikel.id_kategori_artikel', 'LEFT');
					$this->db->join('tbl_pengguna', 'tbl_artikel.id_pengguna = tbl_pengguna.id_pengguna', 'LEFT');
				//where
				$this->db->where('id_artikel', $id);
				$this->db->order_by('id_artikel', 'desc');
				$query = $this->db->get();
				return $query->row();
			}else{
				$this->db->select('tbl_artikel.*,
							tbl_kategori_artikel.nama_kategori_artikel,
							tbl_kategori_artikel.slug_kategori_artikel,
							tbl_pengguna.nama_pengguna');
				$this->db->from('tbl_artikel');
				// start join 2 tabel
					$this->db->join('tbl_kategori_artikel', 'tbl_artikel.id_kategori_artikel = tbl_kategori_artikel.id_kategori_artikel', 'LEFT');
					$this->db->join('tbl_pengguna', 'tbl_artikel.id_pengguna = tbl_pengguna.id_pengguna', 'LEFT');
				// end join
				$this->db->order_by('id_artikel', 'desc');
				$query = $this->db->get();
				return $query->result();
			}
		}

		// listing kategori artikel
	public function listingartikel()
	{
		$this->db->select('tbl_artikel.*,
							tbl_kategori_artikel.nama_kategori_artikel,
							tbl_kategori_artikel.slug_kategori_artikel,
							tbl_pengguna.nama_pengguna');
		$this->db->from('tbl_artikel');
		$this->db->join('tbl_kategori_artikel', 'tbl_artikel.id_kategori_artikel = tbl_kategori_artikel.id_kategori_artikel', 'LEFT');
		$this->db->join('tbl_pengguna', 'tbl_artikel.id_pengguna = tbl_pengguna.id_pengguna', 'LEFT');
		$this->db->where('jenis_artikel', "Artikel");
		$this->db->where('status_artikel', "Publish");
		$this->db->order_by('id_artikel', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function listingberita()
	{
		$this->db->select('tbl_artikel.*, tbl_kategori_artikel.nama_kategori_artikel, tbl_kategori_artikel.slug_kategori_artikel, tbl_pengguna.nama_pengguna');
		$this->db->from('tbl_artikel');
		$this->db->join('tbl_kategori_artikel', 'tbl_artikel.id_kategori_artikel = tbl_kategori_artikel.id_kategori_artikel', 'LEFT');
		$this->db->join('tbl_pengguna', 'tbl_artikel.id_pengguna = tbl_pengguna.id_pengguna', 'LEFT');
		$this->db->where('jenis_artikel', "Berita");
		$this->db->where('status_artikel', "Publish");
		$this->db->order_by('id_artikel', 'desc');
		$query = $this->db->get();
		return $query->result();
	}


		// public function listing()
		// {
		// 	$this->db->select('tbl_artikel.*,
		// 					tbl_kategori_artikel.nama_kategori_artikel,
		// 					tbl_kategori_artikel.slug_kategori_artikel,
		// 					tbl_pengguna.nama_pengguna');
		// 	$this->db->from('tbl_artikel');
		// 	// start join 2 tabel
		// 		$this->db->join('tbl_kategori_artikel', 'tbl_artikel.id_kategori_artikel = tbl_kategori_artikel.id_kategori_artikel', 'LEFT');
		// 		$this->db->join('tbl_pengguna', 'tbl_artikel.id_pengguna = tbl_pengguna.id_pengguna', 'LEFT');
		// 	// end join
		// 	$this->db->order_by('id_artikel', 'desc');
		// 	$this->db->where('status_artikel',"PUBLISH");
		// 	$query = $this->db->get();
		// 	return $query->result();
		// }

		// detail data Artikrl
		public function detail($id_artikel)
		{
			$this->db->select('*');
			$this->db->from('tbl_artikel');
			//where
			$this->db->where('id_artikel', $id_artikel);
			$this->db->order_by('id_artikel', 'desc');
			$query = $this->db->get();
			return $query->row();
		}
		// public function detailartikel($slug_artikel)
		// {
		// 	$this->db->select('tbl_artikel.*,
		// 					tbl_kategori_artikel.nama_kategori_artikel,
		// 					tbl_kategori_artikel.slug_kategori_artikel,
		// 					tbl_pengguna.nama_pengguna');
		// 	$this->db->from('tbl_artikel');
		// 	// star join 2 tabel
		// 		$this->db->join('tbl_kategori_artikel', 'tbl_artikel.id_kategori_artikel = tbl_kategori_artikel.id_kategori_artikel', 'LEFT');
		// 		$this->db->join('tbl_pengguna', 'tbl_artikel.id_pengguna = tbl_pengguna.id_pengguna', 'LEFT');
		// 	//where
		// 	$this->db->where('slug_artikel', $slug_artikel);
		// 	$this->db->order_by('id_artikel', 'desc');
		// 	$query = $this->db->get();
		// 	return $query->row();
		// }

		public function get_list($limit, $start)
		{
		$this->db->join('tbl_kategori_artikel', 'tbl_artikel.id_kategori_artikel = tbl_kategori_artikel.id_kategori_artikel', 'LEFT');
		$this->db->join('tbl_pengguna', 'tbl_artikel.id_pengguna = tbl_pengguna.id_pengguna', 'LEFT');
	 	$this->db->order_by('tanggal_post', 'desc');
	 	$this->db->where('status_artikel',"PUBLISH");
        $query = $this->db->get('tbl_artikel', $limit, $start);
        return $query->result();
    	}

		public function artikel_terbaru()
	{
		$this->db->select('tbl_artikel.*,
							tbl_kategori_artikel.nama_kategori_artikel,
							tbl_kategori_artikel.slug_kategori_artikel,
							tbl_pengguna.nama');
			$this->db->from('tbl_artikel');
			// star join 2 tabel
				$this->db->join('tbl_kategori_artikel', 'tbl_artikel.id_kategori_artikel = tbl_kategori_artikel.id_kategori_artikel', 'LEFT');
				$this->db->join('tbl_pengguna','tbl_artikel.id_pengguna = tbl_pengguna.id_pengguna', 'LEFT');
			// end join
			$this->db->limit(3);
			$this->db->where('status_artikel',"PUBLISH");
			$this->db->order_by('id_artikel', 'desc');
			$query = $this->db->get();
			return $query->result();	
	}
		// Login 
		public function login($username, $password)
		{
			$this->db->select('*');
			$this->db->from('tbl_artikel');
			//where
			$this->db->where(array(	'username'	=>	$username,
									'password'	=>	sha1($password)));
			$this->db->order_by('id_artikel', 'desc');
			$query = $this->db->get();
			return $query->row();
		}

		// insert/tambah Artikel
		public function tambah($data)
		{
			$this->db->insert('tbl_artikel', $data);
		}

		// update Artikel
		public function edit($data)
		{
			$this->db->where('id_artikel', $data['id_artikel']);
			$this->db->update('tbl_artikel', $data);
		}

		// delete Artikel
		public function delete($data)
		{
			$this->db->where('id_artikel', $data['id_artikel']);
			$this->db->delete('tbl_artikel', $data);
		}


	

}

/* End of file Artikel_model.php */
/* Location: ./application/models/Artikel_model.php */