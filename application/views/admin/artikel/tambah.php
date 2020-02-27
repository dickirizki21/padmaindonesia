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
echo form_open_multipart(base_url('backend/artikel/tambah'));
?>

<div class="col-md-8">
	<div class="form-group form-group-lg">
		<label>Judul Artikel</label>
		<input type="text" name="judul_artikel" class="form-control" placeholder="Judul Artikel" value="<?php echo set_value('judul_artikel') ?>" required>
	</div>
</div>

<div class="col-md-4">
	<div class="form-group form-group-lg">
		<label>Status Artikel</label>
		<select name="status_artikel" class="form-control">
			 <option value="" hidden not selected>---Pilih---</option>
			<option value="PUBLISH">Publish</option>
			<option value="DRAFT">Draft</option>
		</select>
	</div>
</div>

<div class="col-md-4">
	<div class="form-group form-group-lg">
		<label>Jenis</label>
		<select name="jenis_artikel" class="form-control">
			 <option value="" hidden not selected>---Pilih---</option>
			<option value="Berita">Berita</option>
			<option value="Artikel">Artikel</option>
		</select>
	</div>
</div>

<div class="col-md-4">
	<div class="form-group form-group-lg">
		<label>Kategori Artikel / Berita</label>
		<select name="id_kategori_artikel" class="form-control">
		<option value="" hidden not selected>---Pilih---</option>
		<?php foreach($kategori_artikel as $kategori_artikel) { ?>
			<option value="<?php echo $kategori_artikel->id_kategori_artikel ?>">
				<?php echo $kategori_artikel->nama_kategori_artikel ?>
			</option>
			<?php } ?>
		</select>
	</div>
</div>

<div class="col-md-4">
	<div class="form-group form-group-lg">
		<label>Gambar</label>
		<input type="file" name="gambar" class="form-control" required>
	</div>
</div>


<div class="col-md-12">
	
	<div class="form-group">
		<label> Isi Artikel</label>
		<textarea name="isi_artikel" class="form-control" id="ckeditorr" rows="3" placeholder="Isi Artikel" value="<?php echo set_value('isi_artikel') ?>" required></textarea>
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-success btn-lg">
			<i class="fa fa-save"> Simpan Data</i>
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