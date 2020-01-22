<p>
  <a href="<?php echo base_url('backend/toko_kami/tambah')?>" class="btn btn-success btn-lg">
    <i class="fa fa-plus"></i> Tambah Data</a>
</p>
  <table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>NO</th>
        <th>KOTA</th>
        <th>NAMA OUTLET</th>
        <th>ALAMAT</th>
        <th>URUTAN</th>
        <th>ACTION</th>
      </tr>
      </thead>
       <tbody>
          <?php $i = 1; foreach($toko_kami as $toko_kami) { ?>
              <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $toko_kami->lokasi_toko ?></td>
                <td><?php echo $toko_kami->nama_toko ?></td>
                <td width="300px" align="justify"><?php echo $toko_kami->alamat_toko ?></td>
                <td><?php echo $toko_kami->urutan_toko ?></td>
                <td>
           

                  <a href="<?php echo base_url('backend/toko_kami/edit/'.$toko_kami->id_toko) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>

                  <a href="<?php echo base_url('backend/toko_kami/delete/'.$toko_kami->id_toko) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data ini?')"><i class="fa fa-trash-o"></i> hapus</a>

                </td>
              </tr>
            </tbody>
          <?php $i++; } ?>
      </table>
        <!-- /.box-body -->