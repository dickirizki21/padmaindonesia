<?php
//error input trigger alert
echo validation_errors('<div class="alert alert-warning">','</div>');

//form open
echo form_open(base_url('backend/toko_kami/tambah'));
?>

<div class="col-md-5">
    <div class="form-group">
      <label>Nama Outlet</label>
      <input type="text" name="nama_toko"  class="form-control" placeholder="Masukan Nama Toko" value="<?php echo set_value('nama_toko') ?>" required>
    </div> 
</div>
<div class="col-md-5">
    <div class="form-group">
      <label>Lokasi Kota Outlet</label>
      <input type="text" name="lokasi_toko"  class="form-control" placeholder="Lokasi Kota Toko" value="<?php echo set_value('lokasi_toko') ?>" required>
    </div> 
</div>
<div class="col-md-2">
    <div class="form-group">
      <label>Urutan</label>
      <input type="text" name="urutan_toko"  class="form-control" placeholder="Urutan" value="<?php echo set_value('urutan_toko') ?>" required>
    </div> 
</div>

<div class="col-md-12">  
  <div class="form-group">
    <label>Alamat Lengkap</label>
    <textarea type="input" name="alamat_toko"  class="form-control" rows="5" value="<?php echo set_value('alamat_toko') ?>" required>
      
    </textarea>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group">
    <button type="submit" class="btn btn-success btn-lg">
      <i class="fa fa-save"> Simpan Data</i>
    </button>

    <button type="reset"  class="btn btn-default btn-lg">
      <i class="fa fa-times"> Reset</i>
    </button>
  </div>
</div>
