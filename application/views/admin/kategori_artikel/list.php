      <div class="card-body">
        <p>
            <a href="<?php echo base_url('backend/kategori_artikel/tambah')?>" class="btn btn-success btn-lg">
              <i class="fa fa-plus"></i> Tambah Kategori Artikel</a>
        </p>
  <table id="example1" class="table table-bordered table-striped">
          <thead>
    <tr>
      <th>No</th>
      <th>Kategori</th>
      <th>Slug Kategori</th>
      <th>Urutan</th>
      <th>Action</th>
    </tr>
    </thead>
    <tbody>
<?php $i = 1; foreach($kategori_artikel as $kategori_artikel) { ?>
    <tr>
      <td><?php echo $i ?>-<?php echo date_format(new DateTime($kategori_artikel->tanggal_ka), 'd-m-Y') ?> </td>
      <td><?php echo $kategori_artikel->nama_kategori_artikel ?></td>
      <td><?php echo $kategori_artikel->slug_kategori_artikel ?></td>
      <td><?php echo $kategori_artikel->urutan_ka ?></td>
      <td width="150px">
        
        <a href="<?php echo base_url('backend/kategori_artikel/edit/'.$kategori_artikel->id_kategori_artikel) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>

        <a href="<?php echo base_url('backend/kategori_artikel/delete/'.$kategori_artikel->id_kategori_artikel) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data ini?')"><i class="fa fa-trash"></i></a>
      </td>
    </tr>
  </tbody>
<?php $i++; } ?>
        </table>
      </div>
    </section>
  </div>

