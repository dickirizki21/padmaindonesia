<?php 
    $more_produk = $this->produk_model->total_listing_produk_mainpage();
 ?>
        <main class="main">
            <div class="container mt-3">
                <div class="product-single-container product-single-default">
                    <div class="row">
                        <div class="col-lg-7 product-single-gallery">
                            <div class="sticky-slider">
                                <div class="product-slider-container product-item">
                                    <div class="product-single-carousel owl-carousel owl-theme">
                                        <div class="product-item">
                                            <img class="product-single-image" src="<?php echo base_url('assets/images/produk/'.$produk->gambar_produk) ?>" data-zoom-image="<?php echo base_url('assets/images/produk/'.$produk->gambar_produk) ?>"/>
                                        </div>
                                    </div>
                                    <!-- End .product-single-carousel -->
                                    <span class="prod-full-screen">
                                        <i class="icon-plus"></i>
                                    </span>
                                </div>

                                <div class="prod-thumbnail row owl-dots transparent-dots" id='carousel-custom-dots'>
                                    <div class="owl-dot">
                                        <img src="<?php echo base_url('assets/images/produk/'.$produk->gambar_produk) ?>"/>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .col-md-6 -->

                        <div class="col-lg-5">
                            <div class="product-single-details">
                                <h1 class="product-title" align="center"><?php echo $produk->nama_produk ?></h1>

                                <div class="product-single-tabs mt-3">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="product-full-width.html#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="true">Deskripsi Produk</a>
                                    </li>
                                </ul>
                                <div class="tab-content" style="margin-top: -50px">
                                    <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
                                        <div class="product-desc-content" align="justify">
                                            <p><?php echo $produk->deskripsi ?></p>
                                        </div><!-- End .product-desc-content -->
                                    </div><!-- End .tab-pane -->
                                </div><!-- End .tab-content -->
                            </div><!-- End .product-single-tabs -->
                        </div><!-- End .col-md-6 -->

                                <div class="product-desc" align="center">
                                    <h4>Order Disini:</h4>
                                    <button onclick="window.location.href='<?php echo $konfigurasi->tokopedia ?>'" class="btn btn-success col-md-12" type="submit" style = "text-transform:capitalize;">
                                        <i class="fa fa-shopping-cart" ></i> Padma Indonesia On Tokopedia
                                    </button> <br>

                                    <button onclick="window.location.href='<?php echo $konfigurasi->bukalapak ?>'" class="btn btn-danger col-md-12 mt-1" type="submit" style = "text-transform:capitalize;">
                                        <i class="fa fa-shopping-cart" ></i> Padma Indonesia On Bukalapak
                                    </button>

                                </div><!-- End .product-desc -->
                               
                            </div><!-- End .product-single-details -->

                            
                    </div><!-- End .row -->
                </div><!-- End .product-single-container -->
            </div><!-- End .container -->

            <div class="featured-section">
                <div class="container">
                    <h2 class="carousel-title">Produk Lainnya</h2>

                    <div class="featured-products owl-carousel owl-theme owl-dots-top">
                        <?php foreach ($more_produk as $more_produk){ ?>
                            
                        <div class="badge badge-success product">
                            <figure class="product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="<?php echo base_url('assets/images/produk/'.$more_produk->gambar_produk) ?>" alt="product">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h2 class="product-title text-white" style="margin-bottom: 15px;">
                                <strong><?php echo $more_produk->nama_produk ?></strong>
                                </h2>
                                <div class="product-action">
                                    <button onclick="window.location.href='<?php echo base_url('produk/detail/'.$more_produk->slug_nama_produk) ?>'" class="btn btn-light col-md-12" type="submit" style = "text-transform:capitalize;">
                                        <i class="fa fa-eye" ></i> Detail Produk
                                    </button>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->
                        <?php } ?>

                    </div><!-- End .product -->
                </div><!-- End .featured-proucts -->
            </div><!-- End .container -->
        </div><!-- End .featured-section -->
    </main><!-- End .main -->