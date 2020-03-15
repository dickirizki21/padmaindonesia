        <main class="main">
            <div class="home-top-container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="home-slider owl-carousel owl-carousel-lazy">
                                <div class="home-slide">
                                    <div class="owl-lazy slide-bg" data-src="<?php echo base_url() ?>assets/padma-home/demo-4/assets/images/slider/slider-1.jpg"></div>
                                    <div class="home-slide-content text-white">
                                        <h3>Get up to <span>60%</span> off</h3>
                                        <h1>Summer Sale</h1>
                                        <p>Limited items available at this price.</p>
                                        <a href="category.html#" class="btn btn-dark">Shop Now</a>
                                    </div><!-- End .home-slide-content -->
                                </div><!-- End .home-slide -->

                                <div class="home-slide">
                                    <div class="owl-lazy slide-bg" data-src="<?php echo base_url() ?>assets/padma-home/demo-4/assets/images/slider/slider-2.jpg"></div>
                                    <div class="home-slide-content text-white">
                                        <h3>200++ <span>PRODUCT</span></h3>
                                        <h1>SALE!!!</h1>
                                        <p>200 Product...</p>
                                        <a href="category.html#" class="btn btn-dark">Shop Now</a>
                                    </div><!-- End .home-slide-content -->
                                </div><!-- End .home-slide -->

                                <div class="home-slide">
                                    <div class="owl-lazy slide-bg" data-src="<?php echo base_url() ?>assets/padma-home/demo-4/assets/images/slider/slider-3.jpg"></div>
                                    <div class="home-slide-content text-white">
                                        <h3>up to <span>40%</span> off</h3>
                                        <h1>NEW ARRIVALS</h1>
                                        <p>Starting at $9</p>
                                        <a href="category.html#" class="btn btn-dark">Shop Now</a>
                                    </div><!-- End .home-slide-content -->
                                </div><!-- End .home-slide -->
                            </div><!-- End .home-slider -->
                        </div><!-- End .col-lg-9 -->

                        <div class="col-lg-3 order-lg-first">
                            <div class="side-custom-menu">
                                <h2 align="center">KATEGORI PRODUK</h2>

                                <div class="side-menu-body">
                                    <ul>
                                        <?php 
                                            $i=0;
                                            foreach ($kategori_produk as $kategori_produk) { 
                                        if ($i < 6) {
                                        ?> 
                                            <li><a href="<?php echo base_url('produk') ?>"><i class="icon-right-dir"></i><?php echo  $kategori_produk->nama_kategori_produk ?></a></li>
                                        <?php $i+=1; }} ?>
                                    </ul>

                                    <a href="<?php echo base_url('produk') ?>" class="btn btn-block btn-primary">CEK <strong>SEKARANG!!!</strong></a>
                                </div><!-- End .side-menu-body -->
                            </div><!-- End .side-custom-menu -->
                        </div><!-- End .col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .home-top-container -->

            <div class="info-boxes-container">
                <div class="container">
                    <div class="info-box">
                        <i class="icon-shipping"></i>

                        <div class="info-box-content">
                            <h4>PENGIRIMAN CEPAT</h4>
                            <p>Sudah Bekerja Sama Dengan Beberapa Expedisi</p>
                        </div><!-- End .info-box-content -->
                    </div><!-- End .info-box -->

                    <div class="info-box">
                        <i class="icon-us-dollar"></i>

                        <div class="info-box-content">
                            <h4>GARANSI KEPUASAN CUSTOMER</h4>
                            <p>100% Customer Puas Dengan Produk Kami</p>
                        </div><!-- End .info-box-content -->
                    </div><!-- End .info-box -->

                    <div class="info-box">
                        <i class="icon-support"></i>

                        <div class="info-box-content">
                            <h4>ONLINE SUPPORT 2x24 JAM</h4>
                            <p>Silahkan Tanyakan Saja</p>
                        </div><!-- End .info-box-content -->
                    </div><!-- End .info-box -->
                </div><!-- End .container -->
            </div><!-- End .info-boxes-container -->

            <div class="banners-group">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="banner banner-image">
                                <a href="<?php echo base_url('produk') ?>">
                                    <img src="<?php echo base_url() ?>assets/padma-home/demo-4/assets/images/banners/banner-1.jpg" alt="banner">
                                </a>
                            </div><!-- End .banner -->

                            <div class="banner banner-image">
                                <a href="<?php echo base_url() ?>assets/padma-home/demo-4/index.html#">
                                    <img src="<?php echo base_url() ?>assets/padma-home/demo-4/assets/images/banners/banner-2.jpg" alt="banner">
                                </a>
                            </div><!-- End .banner -->

                            <div class="banner banner-image">
                                <a href="<?php echo base_url('produk') ?>">
                                    <img src="<?php echo base_url() ?>assets/padma-home/demo-4/assets/images/banners/banner-3.jpg" alt="banner">
                                </a>
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-3 -->

                        <div class="col-lg-3 col-sm-6 order-lg-last">
                            <div class="banner banner-image">
                                <a href="<?php echo base_url('produk') ?>">
                                    <img src="<?php echo base_url() ?>assets/padma-home/demo-4/assets/images/banners/banner-4.jpg" alt="banner">
                                </a>
                            </div><!-- End .banner -->

                            <div class="banner banner-image">
                                <a href="<?php echo base_url('produk') ?>">
                                    <img src="<?php echo base_url() ?>assets/padma-home/demo-4/assets/images/banners/banner-5.jpg" alt="banner">
                                </a>
                            </div><!-- End .banner -->

                            <div class="banner banner-image">
                                <a href="<?php echo base_url('produk') ?>">
                                    <img src="<?php echo base_url() ?>assets/padma-home/demo-4/assets/images/banners/banner-6.jpg" alt="banner">
                                </a>
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-3 -->        

                        <div class="col-lg-6">
                            <div class="banner banner-image">
                                <a href="<?php echo base_url('produk') ?>">
                                    <img src="<?php echo base_url() ?>assets/padma-home/demo-4/assets/images/banners/banner-7.jpg" alt="banner">
                                </a>
                            </div><!-- End .banner -->

                            <div class="banner banner-image">
                                <a href="<?php echo base_url('produk') ?>">
                                    <img src="<?php echo base_url() ?>assets/padma-home/demo-4/assets/images/banners/banner-8.jpg" alt="banner">
                                </a>
                            </div><!-- End .banner -->

                            <div class="banner banner-image">
                                <a href="<?php echo base_url('produk') ?>">
                                    <img src="<?php echo base_url() ?>assets/padma-home/demo-4/assets/images/banners/banner-9.jpg" alt="banner">
                                </a>
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-6 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .banners-group -->

            <div class="mb-4"></div><!-- margin -->
        <!-- LIST PRODUCT BARU -->
             <div class="banner banner-cat" 
                style="background-image: url('<?=base_url()?>assets/padma-home/demo-4/assets/images/banners/banner-top.jpg');">
                <!-- <img src="<?php echo base_url() ?>assets/padma-home/demo-4/assets/images/banners/banner-top.jpg" alt=""> -->
                <div class="banner-content container">
                    <h2 class="banner-subtitle">Dapatkan<span> DISINI!!</span></h2>
                    <h1 class="banner-title">
                        Produk Unggulan
                    </h1>
                    <a href="<?php echo('produk') ?>" class="btn btn-dark">Belanja sekarang!</a>
                </div><!-- End .banner-content -->
            </div><!-- End .banner -->

        <div class="container">
             <div class="row row-sm mt-5">
                <?php 
                $i=0;
                foreach ($produk as $produk) { 
                if ($i<4) { ?>
                    <div class="col-6 col-md-3">
                        <div class="product">
                            <div class="card">
                                         <img src="<?php echo base_url('assets/images/produk/'.$produk->gambar_produk) ?>" alt="Image Produk">
                                          <div class="card-body">
                                            <h3 align="center" class="card-title"><?php echo substr($produk->nama_produk,0,20) ?></h3>
                                            <p align="justify" class="card-text"><?php echo substr($produk->deskripsi,0,100)."....." ?></p>
                                          </div>
                            </div>
                        </div><!-- End .product -->
                    </div><!-- End .col-md-4 -->
                <?php $i++; }} ?>
            </div>
        </div>
    </main><!-- End .main -->