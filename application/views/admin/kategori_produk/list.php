      <div class="card-body">
        <p>
            <a href="<?php echo base_url('backend/kategori_produk/tambah')?>" class="btn btn-success btn-lg">
              <i class="fa fa-plus"></i> Tambah Kategori Produk</a>
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
<?php $i = 1; foreach($kategori_produk as $kategori_produk) { ?>
    <tr>
      <td><?php echo $i ?>-<?php echo date_format(new DateTime($kategori_produk->tanggal_kp), 'd-m-Y') ?> </td>
      <td><?php echo $kategori_produk->nama_kategori_produk ?></td>
      <td><?php echo $kategori_produk->slug_kategori_produk ?></td>
      <td><?php echo $kategori_produk->urutan_kp ?></td>
      <td width="150px">
        
        <a href="<?php echo base_url('backend/kategori_produk/edit/'.$kategori_produk->id_kategori_produk) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>

        <a href="<?php echo base_url('backend/kategori_produk/delete/'.$kategori_produk->id_kategori_produk) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data ini?')"><i class="fa fa-trash"></i></a>
      </td>
    </tr>
<?php $i++; } ?>
  </tbody>
        </table>
      </div>
    </section>
  </div>

