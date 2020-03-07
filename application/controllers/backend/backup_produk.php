if($valid->run()== FALSE){
			//end validaasi
		print_r("validasi error"); die;
		$data = array(	'title'					=>	'Edit Produk',
			'id_produk'				=> 	'id_produk',
			'produk'				=>	$produk,
			'kategori_artikel'		=>	$kategori_artikel,
			'kategori_produk'		=>	$kategori_produk,
			'data_artikel'			=>	$data_artikel,
			'data_produk'			=> 	$data_produk,
			'data_kategori_artikel'	=>	$data_kategori_artikel,
			'isi'					=>	'admin/produk/edit'
		);

		$this->load->view('admin/layout/wrapper', $data, FALSE);
		//start masuk ddatabase
	}else{

		// simpan gambar/foto
		$config['upload_path'] = './assets/images/produk/';	//path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';	//menyesuaikan type gambar yang diakses
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya 
		$this->upload->initialize($config);
		if(!empty($_FILES['gambar_produk']['name'])){
			echo "ada gambar nih"; die;
			if($this->upload->do_upload('gambar_produk')){
				$gambar_produk = $this->upload->data();
				//Compress Image
				$config['image_library']='gd2';
				$config['source_image']='./assets/images/produk/'.$gambar_produk['file_name'];
				$config['create_thumb']= FALSE;
				$config['maintain_ratio']= FALSE;
				$config['quality']= '60%';
				$config['width']= 700;
				$config['height']= 550;
				$config['new_image']='./assets/images/produk/'.$gambar_produk['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$gmbr=$gambar_produk['file_name'];

				$i = $this->input;
			// buat slug artikel
				$slug_nama_produk = url_title($i->post('nama_produk'), 'dash', TRUE);
				$data = array(	'id_produk'				=> 	$id_produk,
					'id_kategori_produk'	=>	$i->post('id_kategori_produk'),
					'id_pengguna'			=>	$this->session->userdata('id_pengguna'),
					'nama_produk'			=>	$i->post('nama_produk'),
					'slug_nama_produk'		=>	$slug_nama_produk,
					'deskripsi'				=>	$i->post('deskripsi'),
					'stok'					=>	$i->post('stok'),
					'gambar_produk'			=>	$gmbr,
					'tanggal_postg'			=>	date('Y-m-d H:i:s')
				);
				$this->produk_model->edit($data);
				$this->session->set_flashdata('sukses', 'Produk Berhasil Diedit');
				echo "run kesini"; die;
				redirect(base_url('backend/produk'),'refresh');

			}else{	

				echo "run kesini"; die;
				$i = $this->input;
			// buat slug artikel
				$slug_nama_produk = url_title($i->post('nama_produk'), 'dash', TRUE);
				$data = array(	'id_produk'				=> 	$id_produk,
					'id_kategori_produk'	=>	$i->post('id_kategori_produk'),
					'id_pengguna'			=>	$this->session->userdata('id_pengguna'),
					'nama_produk'			=>	$i->post('nama_produk'),
					'slug_nama_produk'		=>	$slug_nama_produk,
					'deskripsi'				=>	$i->post('deskripsi'),
					'stok'					=>	$i->post('stok'),
							// 'gambar_produk'			=>	$gmbr,
					'tanggal_postg'			=>	date('Y-m-d H:i:s')
				);
				$edit = $this->produk_model->edit($data);
				if ($edit) {
					print_r(true);
				}
				print_r(false);
				die;
				$this->session->set_flashdata('sukses', 'Produk Berhasil Diedit');
				redirect(base_url('backend/produk'),'refresh');
			}
		}
	}