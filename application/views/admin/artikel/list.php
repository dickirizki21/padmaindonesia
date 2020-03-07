<p>
	<a href="<?php echo base_url('backend/artikel/tambah') ?>" class="btn btn-success btn-lg">
		<i class="fa fa-plus"></i> Tambah Artikel</a>
</p>

 <table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th>No</th>
      <th>Gambar</th>
      <th>Judul Artikel</th>
      <th>Kategori</th>
      <th>Jenis</th>
      <th>Action</th>
    </tr>
    </thead>
    <tbody>
  <?php $i = 1; foreach($artikel as $artikel) { ?>
    <tr>
      <td><?php echo $i  ?>-<?php echo date_format(new DateTime($artikel->tanggal_post), 'd-m-Y') ?></td>
      <td>
        <?php if($artikel->gambar=="") {echo 'Tidak Ada'; }else{ ?>
          <img src="<?php echo base_url('assets/images/artikel/'.$artikel->gambar)?>" class="img img-thumbnail" width="100">
        <?php } ?>
      </td>
      <td><?php echo $artikel->judul_artikel ?></td>
      <td><?php echo $artikel->nama_kategori_artikel ?></td>
      <td><?php echo $artikel->jenis_artikel ?> - <b><?php echo $artikel->status_artikel ?></b></td>
      <td>
      	
      	<a href="<?php echo base_url('backend/artikel/edit/'.$artikel->id_artikel) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>

        <a href="<?php echo base_url('backend/artikel/delete/'.$artikel->id_artikel) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data ini?')"><i class="fa fa-trash-o"></i> </a>

        <?php include('detail.php'); ?>
        
      </td>
    </tr>
  <?php $i++; } ?>
  </tbody>
</table>