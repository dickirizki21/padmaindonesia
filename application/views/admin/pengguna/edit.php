<?php
// Error input trigger alert
echo validation_errors('<div class="alert alert-warning">','</div>');

// form open
echo form_open(base_url('backend/pengguna/edit/'.$pengguna->$id_pengguna));
?>
<div data-collapsed="0" class="card">

<div class="col-md-6">
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-title"><?php echo $title ?></h2>
        </div>
      </div>

      <div class="card-body">

        <div class="row">

          <div class="col-lg-6 col-md-3">
            <div class="form-group">
            <label> Nama Lengkap </label>
            <input type="text" name="nama_pengguna" placeholder="Nama Lengkap Anda" class="form-control" value="<?php echo $pengguna->nama_pengguna ?>">
            </div>
          </div>

          <div class="col-lg-6 col-md-3">
            <div class="form-group">
            <label> Username </label>
            <input type="text" name="username" placeholder="Masukan Username" class="form-control" value="<?php echo $pengguna->username ?>">
            </div>
          </div>

          <div class="col-lg-6 col-md-3">
            <div class="form-group">
            <label> Email </label>
            <input type="email" name="email_pengguna" placeholder="Masukan Email" class="form-control" value="<?php echo $pengguna->email_pengguna ?>">
            </div>
          </div>

          <div class="col-lg-6 col-md-3">
            <div class="form-group">
            <label> Password </label>
            <input type="password" name="password" placeholder="Masukan Password" class="form-control" value="">
            </div>
          </div>

          <div class="col-lg-12">
            <div class="form-group">
            <label> Hak Akses</label>
              <select name="akses_level">
                <option value="admin">Admin</option>
                <option value="user" <?php if($pengguna->akses_level=="user") { echo "selected"; } ?>>User</option>
              </select>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="form-group">
              <button type="submit" class="mb-2 mt-2 mr-1 btn btn-success btn-md">
                <i class="fa fa-save"> Simpan Data</i>
              </button>
              <button type="reset" class="mb-2 mt-2 mr-2 btn btn-danger btn-md">
                <i class="fa fa-times"> Reset</i>
              </button>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
</div>
</section>

<?php
// form close
echo form_close();
?>