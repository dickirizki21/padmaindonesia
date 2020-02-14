<?php
// Error input trigger alert
echo validation_errors('<div class="alert alert-warning">','</div>');

// form open
echo form_open(base_url('backend/kategori_produk/edit/'.$kategori_produk->$id_kategori_produk));
?>
<div data-collapsed="0" class="card">

      <div class="card-body">

        <div class="row">

          <div class="col-lg-6 col-md-3 form-group">
            <label> Nama Lengkap </label>
            <input type="text" name="nama_kategori_produk" class="form-control" value="<?php echo $kategori_produk->nama_kategori_produk ?>">
          </div>

          <div class="col-lg-12 col-md-3 form-group">
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
</section>

<?php
// form close
echo form_close();
?>