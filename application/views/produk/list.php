<main class="main">
    <div class="banner banner-cat" style="background-image: url('<?php echo base_url() ?>assets/padma-home/demo-4/assets/images/banners/banner-top.jpg');">
        <div class="banner-content container">
            <h1 class="banner-title">
                Padma Indonesia
            </h1>
            <a href="category-4col.html#" class="btn btn-dark">Belanja Sekarang</a>
        </div><!-- End .banner-content -->
    </div><!-- End .banner -->

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-9">

            <div class="row row-sm">
                <?php foreach ($produk as $produk) { ?>
                    <div class="col-6 col-md-4 col-xl-3">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="<?php echo base_url('detail1') ?>" class="product-image">
                                    <?php if($produk->gambar_produk=="") {echo 'Tidak Ada'; }else{ ?>
                                         <img src="<?php echo base_url('assets/images/produk/'.$produk->gambar_produk)?>" class="img img-thumbnail" width="100">
                                    <?php } ?>
                                </a>
                            </figure>
                                <div class="product-details">
                                    <div class="price-box">
                                        <label class="product-price"><?php echo substr($produk->nama_produk,0,20)  ?></label>
                                    </div><!-- End .price-box -->

                                    <div class="product-action btn btn-light">
                                         <i class="fa fa-eye"></i><a href="<?php echo base_url('detail1') ?>" title="Detail Produk">
                                            <span> Detail Produk</span>
                                        </a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product-details -->
                        </div><!-- End .product -->
                    </div><!-- End .col-xl-3 -->
                <?php } ?>
                    
            </div><!-- End .row -->

                <nav class="toolbox toolbox-pagination">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link page-link-btn" href="category-4col.html#"><i class="icon-angle-left"></i></a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="category-4col.html#">1 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="category-4col.html#">2</a></li>
                        <li class="page-item"><a class="page-link" href="category-4col.html#">3</a></li>
                        <li class="page-item"><a class="page-link" href="category-4col.html#">4</a></li>
                        <li class="page-item"><span>...</span></li>
                        <li class="page-item"><a class="page-link" href="category-4col.html#">15</a></li>
                        <li class="page-item">
                            <a class="page-link page-link-btn" href="category-4col.html#"><i class="icon-angle-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div><!-- End .col-lg-9 -->

            <aside class="sidebar-shop col-lg-3 order-lg-first">
                <div class="sidebar-wrapper">
                    <div class="widget">
                        <h3 class="widget-title">
                            <a data-toggle="collapse" href="category-4col.html#widget-body-1" role="button" aria-expanded="true" aria-controls="widget-body-1">Kategori</a>
                        </h3>

                        <div class="collapse show" id="widget-body-1">
                            <div class="widget-body">
                                <ul class="cat-list">
                                    <?php foreach ($kategori_produk as $kategori_produk) { ?>
                                        <li><i class="icon-right-dir"></i><a href="category-4col.html#"><?php echo $kategori_produk->nama_kategori_produk ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div><!-- End .widget-body -->
                        </div><!-- End .collapse -->
                    </div><!-- End .widget -->
                    <div class="widget widget-block">
                        <h3 class="widget-title">Custom Desain</h3>
                        <h5>Printing Kaos.</h5>
                        <p align="justify"><?php echo $konfigurasi->kelebihan_perusahaan ?></p>
                    </div><!-- End .widget -->
                </div><!-- End .sidebar-wrapper -->
            </aside><!-- End .col-lg-3 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="mb-5"></div><!-- margin -->
</main><!-- End .main -->