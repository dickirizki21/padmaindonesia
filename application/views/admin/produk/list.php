<p>
	<a href="<?php echo base_url('backend/produk/tambah') ?>" class="btn btn-success btn-lg">
		<i class="fa fa-plus"></i> Tambah Produk</a>
</p>

 <table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th>No</th>
      <th>Gambar</th>
      <th>Nama Produk</th>
      <th>Kategori</th>
      <th>Stok</th>
      <th>Action</th>
    </tr>
    </thead>
    <tbody>
<?php $i = 1; foreach($produk as $produk) { ?>
    <tr>
      <td><?php echo $i  ?>-<?php echo date_format(new DateTime($produk->tanggal_postg), 'd-m-Y') ?></td>
      <td>
        <?php if($produk->gambar_produk=="") {echo 'Tidak Ada'; }else{ ?>
          <img src="<?php echo base_url('assets/images/produk/'.$produk->gambar_produk)?>" class="img img-thumbnail" width="100">
        <?php } ?>
      </td>
      <td><?php echo $produk->nama_produk ?></td>
      <td><?php echo $produk->nama_kategori_produk ?></td>
      <td><?php echo $produk->stok ?> Pcs</b></td>
      <td>
      	
      	<a href="<?php echo base_url('backend/produk/edit/'.$produk->id_produk) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>

        <a href="<?php echo base_url('backend/produk/delete/'.$produk->id_produk) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data ini?')"><i class="fa fa-trash-o"></i> </a>

        <?php include('detail.php'); ?>
        
      </td>
    </tr>
<?php $i++; } ?>
  </tbody>
</table>