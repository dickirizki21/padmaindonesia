      <header class="card-header">
        <h2 class="card-title"><?php echo $title ?></h2>
      </header>
      <div class="card-body">
        <p>
            <a href="<?php echo base_url('backend/pengguna/tambah')?>" class="btn btn-success btn-lg">
              <i class="fa fa-plus"></i> Tambah Pengguna</a>
        </p>
        <table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
          <thead>
    <tr>
      <th>No</th>
      <th>Username </th>
      <th>Nama Lengkap</th>
      <th>ACTION</th>
    </tr>
    </thead>
    <tbody>
<?php $i = 1; foreach($pengguna as $pengguna) { ?>
    <tr>
      <td><?php echo $i  ?>-<?php echo date_format(new DateTime($pengguna->tanggal_pengguna), 'd-m-Y') ?></td>
      <td><?php echo $pengguna->username ?> - <b><?php echo $pengguna->akses_level ?></b></td>
      <td><?php echo $pengguna->nama_pengguna ?></td>
      <td width="150px">
        
        <a href="<?php echo base_url('backend/pengguna/edit/'.$pengguna->id_pengguna) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>

        <a href="<?php echo base_url('backend/pengguna/delete/'.$pengguna->id_pengguna) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Menghapus Data ini?')"><i class="fa fa-trash"></i></a>
      </td>
    </tr>
  </tbody>
<?php $i++; } ?>
        </table>
      </div>
    </section>
  </div>
</div>
</section>