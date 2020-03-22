<button class="btn bg-teal btn-xs" data-toggle="modal" data-target="#Detail<?php echo $artikel->id_artikel ?>"><i class="fa fa-eye"></i> 
    </button>
 
<div class="modal modal-default fade" id="Detail<?php echo $artikel->id_artikel ?>">
<div class="modal-dialog modal-md">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
      <h2 class="modal-title" align="center" style="font-family: sans-serif;">Detail <?php echo $artikel->jenis_artikel ?></h2>
    </div>
    <div class="modal-body">
<table class="table table-striped" align="center">
  <tbody>
    <tr>
      <td>
        <td colspan="3">
        <center><img src="<?php echo base_url().'assets/images/artikel/'.$artikel->gambar ?>" class="img img-thumbnail" width="700px">
        <?php  ?></center></td>
      </td>
    </tr>
  </tbody>
</table>
      <table class="table table-striped" border="0px">
        <thead>
          <tr>
            <th>Judul <?php echo $artikel->jenis_artikel ?> </th>
            <td>: <?php echo $artikel->judul_artikel ?></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Ditulis Oleh</td>
            <td>: <b><?php echo $artikel->nama_pengguna ?></b> - Pada Tanggal <?php echo date('d F Y',strtotime($artikel->tanggal_post)) ?></td>
          </tr>
          <tr>
            <td>Jenis</td>
            <td>: <?php echo $artikel->jenis_artikel ?></td>
          </tr>
          <tr>
            <td>Isi <?php echo $artikel->jenis_artikel ?></td>
            <td>:</td>
          </tr>
          <tr>
            <td colspan="2" align="justify" style="overflow: hidden" ><?php echo $artikel->isi_artikel ?></td>
          </tr>
          
        </tbody>
      </table>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn bg-maroon" data-dismiss="modal">
      <i class="fa fa-times"></i>Close</button>
      
    </div>
  </div>
</div>
</div>
</section>
</div>