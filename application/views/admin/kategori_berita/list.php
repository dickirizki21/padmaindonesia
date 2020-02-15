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
<?php $i = 1; foreach($select_kb as $select_kb) { ?>
    <tr>
      <td><?php echo $i ?>-<?php echo date_format(new DateTime($select_kb->tanggal_kp), 'd-m-Y') ?> </td>
      <td><?php echo $select_kb->nama_kategori_produk ?></td>
      <td><?php echo $select_kb->slug_kategori_produk ?></td>
      <td><?php echo $select_kb->urutan_kp ?></td>
      <td width="150px">
        
        <a href="<?php echo base_url('backend/kategori_produk/edit/'.$select_kb->id_kategori_produk) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>

        <a href="<?php echo base_url('backend/kategori_produk/delete/'.$select_kb->id_kategori_produk) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data ini?')"><i class="fa fa-trash"></i></a>
      </td>
    </tr>
  </tbody>
<?php $i++; } ?>
        </table>
      </div>
    </section>
  </div>

