<?php
// Error input trigger alert
echo validation_errors('<div class="alert alert-warning">','</div>');

// form open
echo form_open(base_url('backend/kategori_artikel/edit/'.$kategori_artikel->$id_kategori_artikel));
?>
<div data-collapsed="0" class="card">

      <div class="card-body">

        <div class="row">

          <div class="col-lg-12 col-md-6 col-xs-3 form-group">
            <div class="col-lg-6 col-md-4 col-xs-3 form-group">
              <label> Kategori Artikel </label>
              <input type="text" name="nama_kategori_artikel" placeholder="ex. saran/tips/lainnya" class="form-control" value="<?php echo $kategori_artikel->nama_kategori_artikel ?>" required>
            </div>

            <div class="col-lg-6 col-md-4 col-xs-3 form-group">
              <label> Urutan</label>
              <input type="text" name="urutan_ka" placeholder="1-10" class="form-control" value="<?php echo $kategori_artikel->urutan_ka ?>" required>
            </div>

          </div>

          <div class="col-lg-12 col-md-3 form-group" align="right">
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