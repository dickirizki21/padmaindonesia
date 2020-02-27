<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login
{
	protected $CI;

	public function __construct()
	{
        $this->CI =& get_instance();
        $this->CI->load->model('pengguna_model');
	}

	// login check username dan password
	public function login($username, $password)
	{
		$user_aktif	=	$this->CI->pengguna_model->login($username, $password);
		// jika ada datanya maka daftarkan session
		if (count($user_aktif) == 1) {
			$data_pengguna		=	$this->CI->pengguna_model->cek_data($username, $password);
			$id_pengguna		=	$data_pengguna->id_pengguna;
			$nama_pengguna		=	$data_pengguna->nama_pengguna;
			$akses_level		=	$data_pengguna->akses_level;

			$this->CI->session->set_userdata('username', $username);
			$this->CI->session->set_userdata('id_pengguna', $id_pengguna);
			$this->CI->session->set_userdata('nama_pengguna', $nama_pengguna);
			$this->CI->session->set_userdata('akses_level', $akses_level);
			// jika user ada redirect ke halaman yang di proteksi
			
			redirect(base_url('backend/dasbor'),'refresh');
		}else{
			// kalau ga ada user aktif
			$this->CI->session->set_flashdata('gagal', 'Username / Password Salah');
			redirect(base_url('login'),'refresh');
		}
		// end checking
	}

	// check login, jika belum redirect ke halaman login
	public function check_login()
	{
		if($this->CI->session->userdata('username') == ""){
			$this->CI->session->set_flashdata('gagal', 'Anda belum login');
			redirect(base_url('login'),'refresh');
		}
	}

	// logout
	public function logout()
	{
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('id_pengguna');
		$this->CI->session->unset_userdata('nama_pengguna');
		$this->CI->session->unset_userdata('akses_level');
		// setelah session di buang, rediredt ke login lagi
		$this->CI->session->set_flashdata('sukses', 'Anda Telah logout');
		redirect(base_url('login'),'refresh');
	}
}

/* End of file Simple_login.php */
/* Location: ./application/libraries/Simple_login.php */
