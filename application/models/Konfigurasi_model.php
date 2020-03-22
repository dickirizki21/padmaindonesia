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

	// listing nav produk
	public function nav_produk()
	{
		$this->db->select('tbl_produk.*, tbl_kategori_produk.nama_kategori_produk, tbl_kategori_produk.slug_kategori_produk, tbl_pengguna.nama_pengguna');
		$this->db->from('tbl_produk');
		// join
		$this->db->join('tbl_kategori_produk', 'tbl_kategori_produk.id_kategori_produk = tbl_produk.id_kategori_produk', 'left');
		$this->db->join('tbl_pengguna', 'tbl_pengguna.id_pengguna = tbl_produk.id_pengguna', 'left');
		// end joint
		$this->db->group_by('tbl_produk.id_kategori_produk');
		$this->db->order_by('id_produk', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	// listing nav produk
	public function kategori_artikel_kanan()
	{
		$this->db->select('tbl_artikel.*, tbl_kategori_artikel.nama_kategori_artikel, tbl_kategori_artikel.slug_kategori_artikel, tbl_pengguna.nama_pengguna');
		$this->db->from('tbl_artikel');
		// join
		$this->db->join('tbl_kategori_artikel', 'tbl_kategori_artikel.id_kategori_artikel = tbl_artikel.id_kategori_artikel', 'left');
		$this->db->join('tbl_pengguna', 'tbl_pengguna.id_pengguna = tbl_artikel.id_pengguna', 'left');
		// end joint
		$this->db->group_by('tbl_artikel.id_kategori_artikel');
		$this->db->where('jenis_artikel', "Artikel");
		$this->db->order_by('id_artikel', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	// listing nav produk
	public function kategori_berita_kanan()
	{
		$this->db->select('tbl_artikel.*, tbl_kategori_artikel.nama_kategori_artikel, tbl_kategori_artikel.slug_kategori_artikel, tbl_pengguna.nama_pengguna');
		$this->db->from('tbl_artikel');
		// join
		$this->db->join('tbl_kategori_artikel', 'tbl_kategori_artikel.id_kategori_artikel = tbl_artikel.id_kategori_artikel', 'left');
		$this->db->join('tbl_pengguna', 'tbl_pengguna.id_pengguna = tbl_artikel.id_pengguna', 'left');
		// end joint
		$this->db->group_by('tbl_artikel.id_kategori_artikel');
		$this->db->where('jenis_artikel', "Berita");
		$this->db->order_by('id_artikel', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file Konfirgurasi_model.php */
/* Location: ./application/models/Konfirgurasi_model.php */