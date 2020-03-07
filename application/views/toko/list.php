<div class="container" style="padding-bottom: 60px">
    <center><h2 class="carousel-title" style="padding-top: 50px"><?php echo $title ?></h2></center>
</div>
    <div class="home-top-section">
        <div class="container" style="padding-left: 120px">
            <div class="row">
                
                <?php foreach ($toko_kami as $toko_kami) { ?>
                <div class="col-md-4" style="margin-bottom: 30px;">
                    <div class="cat-box">
                        <h2 align="center"><?php echo $toko_kami->nama_toko ?></h2>
                        <h5 align="center" style="color: #fc0341"><i class="icon-cat-default"></i><?php echo $toko_kami->lokasi_toko ?></h5>
                        <p align="justify"><?php echo $toko_kami->alamat_toko ?></p>
                    </div><!-- End .cat-box -->
                </div><!-- End .col-md-4 -->
                <?php } ?>
                

            </div><!-- End .row -->
        </div><!-- End .container -->
    </div>
<div class="mb-3 mb-lg-5"></div><!-- margin -->
