<?php
// Error input trigger alert
echo validation_errors('<div class="alert alert-warning">','</div>');

// error upload file
if (isset($error)) {
	echo '<p class="alert alert-warning">';
	echo $error;
	echo '</p>';
}	
// form open
echo form_open_multipart(base_url('backend/produk/edit/'.$produk->$id_produk));
?>

<div class="col-md-8">
	<div class="form-group form-group-lg">
		<label>Nama Produk</label>
		<input type="text" name="nama_produk" class="form-control" placeholder="Masukan Nama Produk" value="<?php echo $produk->nama_produk ?>" required>
	</div>
</div>

<div class="col-md-4">
	<div align="middle" class="form-group form-group-lg">
		<img id="blah" height="170px" width="250px" src="<?php echo base_url('assets/images/produk/'.$produk->gambar_produk)?>" class="img img-thumbnail" width="100">
	</div>
</div>

<div class="col-md-4">
	<div class="form-group form-group-lg">
		<label>Kategori Produk</label>
		<select name="id_kategori_produk" class="form-control">
		<?php foreach($kategori_produk as $kategori_produk) { ?>
			<option value="<?php echo $kategori_produk->id_kategori_produk ?>" <?php if ($produk->id_kategori_produk == $kategori_produk->id_kategori_produk) { echo "selected";
        } ?>><?php echo $kategori_produk->nama_kategori_produk ?>
			</option>
			<?php } ?>
		</select>
	</div>
</div>

<div class="col-md-4">
	<div class="form-group form-group-lg">
		<label>Stok Produk</label>
		<input type="text" name="stok" class="form-control" placeholder="Masukan Stok Produk" value="<?php echo $produk->stok ?>" required>
	</div>
</div>

<div class="col-md-4">

	<div class="form-group form-group-lg">
		<label>Gambar</label>
		<input id="imgInp" type="file" name="gambar_produk" class="form-control" >
	</div>
</div>


<div class="col-md-12">
	<div class="form-group">
		<label>Deskripsi Produk</label>
		<textarea name="deskripsi" class="form-control" id="ckeditorr" rows="3" placeholder="Isi Artikel" required><?php echo $produk->deskripsi ?></textarea>
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-success btn-lg">
			<i class="fa fa-save"> Edit Data</i>
		</button>

		<button type="reset" class="btn btn-default btn-lg">
			<i class="fa fa-times"> Reset</i>
		</button>
	</diV>
</div>

<?php
// form close
echo form_close();
?>