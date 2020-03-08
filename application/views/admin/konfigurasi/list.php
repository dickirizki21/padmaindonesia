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
echo form_open_multipart(base_url('backend/konfigurasi'));
?>
<div class="col-lg-12">
  <div class="box box-primary box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Data Perusahaan</h3>
      <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="form-group form-group-lg" style="margin-bottom: -10px">
    <div class="box-body">
      <label class="col-lg-2" align="right" style="padding-top: 10px;" ></label>
        <div class="col-lg-10" style="margin-bottom: -15px">
          <!-- <label>Nama Perusahaan</label> -->
         <div class="alert alert-success alert-dismissible">
                <h4 align="center"><i class="icon fa fa-info"></i>
          Terakhir Di Update Oleh <?php echo $konfigurasi->nama_pengguna ?> Pada Tanggal <?php echo date('d F Y',strtotime($konfigurasi->tanggal_k)) ?></h4>
         </div>
        </div>
    </div>
  </div>
  <div class="form-group form-group-lg" style="margin-bottom: -10px">
    <div class="box-body">
      <label class="col-lg-2" align="right" style="padding-top: 10px;" >Nama Perusahaan</label>
        <div class="col-lg-10">
          <!-- <label>Nama Perusahaan</label> -->
          <input type="text" name="nama_perusahaan" placeholder="Nama Perusahaan" class="form-control" value="<?php echo $konfigurasi->nama_perusahaan ?>" required>
        </div>
    </div>
  </div>
  <div class="form-group" style="margin-bottom: -10px">
    <div class="box-body">
      <label class="col-lg-2" align="right" style="padding-top: 7px" >Visi</label>
        <div class="col-lg-10">
          <textarea style="height: 100px" name="visi" placeholder="Visi Perusahaan" class="form-control" value="" required><?php echo $konfigurasi->visi ?></textarea>
        </div>
    </div>
  </div>
  <div class="form-group" style="margin-bottom: -10px">
    <div class="box-body">
      <label class="col-lg-2" align="right" style="padding-top: 7px" >Misi</label>
        <div class="col-lg-10">
          <textarea style="height: 100px" name="misi" placeholder="Misi Perusahaan" class="form-control" value="" required><?php echo $konfigurasi->misi ?></textarea>
        </div>
    </div>
  </div>
  <div class="form-group" style="margin-bottom: -10px">
    <div class="box-body">
      <label class="col-lg-2" align="right" style="padding-top: 7px" >Sejarah Perusahaan</label>
        <div class="col-lg-10">
          <textarea style="height: 100px" name="sejarah_perusahaan" placeholder="Sejarah Perusahaan" class="form-control" value="" required><?php echo $konfigurasi->sejarah_perusahaan ?></textarea>
        </div>
    </div>
  </div>
  <div class="form-group" style="margin-bottom: -10px">
    <div class="box-body">
      <label class="col-lg-2" align="right" style="padding-top: 7px" >Alamat</label>
        <div class="col-lg-10">
          <textarea style="height: 100px" name="alamat" placeholder="Alamat Perusahaan" class="form-control" value="" required><?php echo $konfigurasi->alamat ?></textarea>
        </div>
    </div>
  </div>
  <div class="form-group" style="margin-bottom: -10px">
    <div class="box-body">
      <label class="col-lg-2" align="right" style="padding-top: 7px" >Kelebihan Perusahaan</label>
        <div class="col-lg-10">
          <textarea style="height: 100px" name="kelebihan_perusahaan" placeholder="Kelebihan Perusahaan" class="form-control" value="" required><?php echo $konfigurasi->kelebihan_perusahaan ?></textarea>
        </div>
    </div>
  </div>
  <div class="form-group" style="margin-bottom: -10px">
    <div class="box-body">
      <label class="col-lg-2" align="right" style="padding-top: 7px" >Tagline</label>
        <div class="col-lg-10">
          <!-- <label>Nama Perusahaan</label> -->
          <input type="text" name="tagline" placeholder="Tagline" class="form-control" value="<?php echo $konfigurasi->tagline ?>" required>
        </div>
    </div>
  </div>
  <div class="form-group" style="margin-bottom: 10px">
    <div class="box-body">
      <label class="col-lg-2" align="right" style="padding-top: 7px" >Keyword</label>
        <div class="col-lg-10">
          <!-- <label>Nama Perusahaan</label> -->
          <textarea style="height: 100px" name="keyword" placeholder="Keyword" class="form-control" value="" required><?php echo $konfigurasi->keyword ?></textarea>
        </div>
    </div>
  </div>

    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>

<div class="col-lg-12">
  <div class="box box-danger box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Kontak Perusahaan</h3>
      <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
  <div class="form-group" style="margin-bottom: -10px">
    <div class="box-body">
      <label class="col-lg-2" align="right" style="padding-top: 5px;" >Whatsapp</label>
        <div class="col-lg-10; input-group">
          <!-- <label>Nama Perusahaan</label> -->
          <span class="input-group-addon"><i class="fa fa-whatsapp"></i></span>
          <input type="text" name="tlp_wa" placeholder="Nama Perusahaan" class="form-control" value="<?php echo $konfigurasi->tlp_wa ?>" required>
        </div>
    </div>
  </div>
  <div class="form-group" style="margin-bottom: -10px">
    <div class="box-body">
      <label class="col-lg-2" align="right" style="padding-top: 5px" >Telepon</label>
        <div class="col-lg-10; input-group">
          <!-- <label>Nama Perusahaan</label> -->
          <span class="input-group-addon"><i class="fa fa-phone"></i></span>
          <input type="text" name="tlp" placeholder="Nama Perusahaan" class="form-control" value="<?php echo $konfigurasi->tlp ?>" required>
        </div>
    </div>
  </div>
  <div class="form-group" style="margin-bottom: -10px">
    <div class="box-body">
      <label class="col-lg-2" align="right" style="padding-top: 5px" >E-mail</label>
        <div class="col-lg-10; input-group">
          <!-- <label>Nama Perusahaan</label> -->
          <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
          <input type="text" name="email" placeholder="Nama Perusahaan" class="form-control" value="<?php echo $konfigurasi->email ?>" required>
        </div>
    </div>
  </div>
  <div class="form-group" style="margin-bottom: -10px">
    <div class="box-body">
      <label class="col-lg-2" align="right" style="padding-top: 5px" >Tokopedia</label>
        <div class="col-lg-10; input-group">
          <!-- <label>Nama Perusahaan</label> -->
          <span class="input-group-addon"><i class="fa fa-shopping-cart"></i></span>
          <input type="text" name="tokopedia" placeholder="Nama Perusahaan" class="form-control" value="<?php echo $konfigurasi->tokopedia ?>" required>
        </div>
    </div>
  </div>
  <div class="form-group" style="margin-bottom: -10px">
    <div class="box-body">
      <label class="col-lg-2" align="right" style="padding-top: 5px" >Bukalapak</label>
        <div class="col-lg-10; input-group">
          <!-- <label>Nama Perusahaan</label> -->
          <span class="input-group-addon"><i class="fa fa-shopping-cart"></i></span>
          <input type="text" name="bukalapak" placeholder="Nama Perusahaan" class="form-control" value="<?php echo $konfigurasi->bukalapak ?>" required>
        </div>
    </div>
  </div>
  <div class="form-group" style="margin-bottom: -10px">
    <div class="box-body">
      <label class="col-lg-2" align="right" style="padding-top: 5px" >Facebook</label>
       <div class="col-lg-10; input-group">
          <!-- <label>Nama Perusahaan</label> -->
          <span class="input-group-addon"><i class="fa fa-facebook-square"></i></span>
          <input type="text" name="facebook" placeholder="Nama Perusahaan" class="form-control" value="<?php echo $konfigurasi->facebook ?>" required>
        </div>
    </div>
  </div>
  <div class="form-group" style="margin-bottom: -10px">
    <div class="box-body">
      <label class="col-lg-2" align="right" style="padding-top: 5px" >Twitter</label>
        <div class="col-lg-10; input-group">
          <!-- <label>Nama Perusahaan</label> -->
          <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
          <input type="text" name="twitter" placeholder="Tagline" class="form-control" value="<?php echo $konfigurasi->twitter ?>" required>
        </div>
    </div>
  </div>
  <div class="form-group" style="margin-bottom: -10px">
    <div class="box-body">
      <label class="col-lg-2" align="right" style="padding-top: 5px" >Instagram</label>
        <div class="col-lg-10; input-group">
          <!-- <label>Nama Perusahaan</label> -->
          <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
          <input type="text" name="instagram" placeholder="Tagline" class="form-control" value="<?php echo $konfigurasi->instagram ?>" required>
        </div>
    </div>
  </div>
  <div class="form-group" style="margin-bottom: 10px">
    <div class="box-body">
      <label class="col-lg-2" align="right" style="padding-top: 5px" >Maps</label>
        <div class="col-lg-10; input-group">
          <!-- <label>Nama Perusahaan</label> -->
          <span class="input-group-addon"><i class="fa fa-map"></i></span>
           <textarea style="height: 100px" name="maps" placeholder="Keyword" class="form-control" value="" required><?php echo $konfigurasi->maps ?></textarea>
        </div>
    </div>
  </div>

    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>

  <div class="col-lg-12" align="center">
    <div class="form-group">
      <button type="submit" class="mb-2 mt-2 mr-1 btn btn-success btn-md">
        <i class="fa fa-save"> Simpan Data</i>
      </button>
      <button type="reset" class="mb-2 mt-2 mr-2 btn btn-info btn-md">
        <i class="fa fa-times"> Reset</i>
      </button>
    </div>
  </div>
<?php
// form close
echo form_close();
?>