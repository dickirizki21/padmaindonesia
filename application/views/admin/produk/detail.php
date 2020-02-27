<button class="btn bg-teal btn-xs" data-toggle="modal" data-target="#Detail<?php echo $produk->id_produk ?>"><i class="fa fa-eye"></i> 
    </button>
 
<div class="modal modal-default fade" id="Detail<?php echo $produk->id_produk ?>">
<div class="modal-dialog modal-md">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
      <h2 class="modal-title" align="center" style="font-family: sans-serif;">Detail Produk</h2>
    </div>
    <div class="modal-body">
<table class="table table-striped" align="center">
  <tbody>
    <tr>
      <td>
        <td colspan="3">
        <center><img src="<?php echo base_url().'assets/images/produk/'.$produk->gambar_produk ?>" class="img img-thumbnail" width="300">
        <?php  ?></center></td>
      </td>
    </tr>
  </tbody>
</table>
      <table class="table table-striped" border="0px">
        <thead>
          <tr>
            <th>Nama Produk</th>
            <td>: <?php echo $produk->nama_produk ?></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Diupload Oleh</td>
            <td>: <b><?php echo $produk->nama_pengguna ?></b> - Pada Tanggal <?php echo date('d-M-Y',strtotime($produk->tanggal_postg)) ?></td>
          </tr>
          <tr>
            <td>Kategori</td>
            <td>: <?php echo $produk->nama_kategori_produk ?> - <?php echo $produk->stok ?> Pcs</td>
          </tr>
          <tr>
            <td>Deskripsi Produk </td>
            <td>:</td>
          </tr>
          <tr>
            <td colspan="2" align="justify" style="overflow: hidden" ><?php echo $produk->deskripsi ?></td>
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