<?php 
$more_artikel = $this->artikel_model->total_listing_artikel_mainpage();
$kategori_artikel_kanan = $this->konfigurasi_model->kategori_artikel_kanan();
 ?>
<main class="main">
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-9">
                <article class="entry single">
                    <div class="entry-media">
                        <div class="entry-slider owl-carousel owl-theme owl-theme-light">
                            <img src="<?php echo base_url('assets/images/artikel/'.$artikel->gambar) ?>" alt="Post">
                        </div><!-- End .entry-slider -->
                    </div><!-- End .entry-media -->

                    <div class="entry-body">
                        <div class="entry-date">
                            <span class="day"><?php echo date_format(new DateTime($artikel->tanggal_post), 'd') ?></span>
                            <span class="month"><?php echo date_format(new DateTime($artikel->tanggal_post), 'F') ?></span>
                        </div><!-- End .entry-date -->

                        <h2 class="entry-title" align="justify">
                            <?php echo $artikel->judul_artikel ?>
                        </h2>

                        <div class="entry-meta">
                            <span><i class="icon-calendar"></i><?php echo date_format(new DateTime($artikel->tanggal_post), 'd F Y') ?></span>
                            <span><i class="icon-user"></i>Ditulis Oleh <?php echo $artikel->nama_pengguna ?></span>
                            <span><i class="fas fa-bullhorn"></i></i></i>
                                <a><?php echo $artikel->nama_kategori_artikel ?></a>
                            </span>
                        </div><!-- End .entry-meta -->

                        <div class="entry-content">
                            <p align="justify"><?php echo $artikel->isi_artikel ?></p> 
                        </div><!-- End .entry-content -->
                    </div><!-- End .entry-body -->
                </article><!-- End .entry -->

                <div class="related-posts">
                    <h4 class="light-title">Artikel <strong>Lainnya</strong></h4>

                    <div class="owl-carousel owl-theme related-posts-carousel">
                        <?php foreach ($more_artikel as $more_artikel){ ?>
                        <article class="entry">
                            <div class="entry-media">
                                <a href="<?php echo base_url('artikel/readar/'.$more_artikel->slug_artikel) ?>">
                                    <img src="<?php echo base_url('assets/images/artikel/'.$more_artikel->gambar) ?>"  alt="Post">
                                </a>
                            </div><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-date">
                                    <span class="day"><?php echo date_format(new DateTime($more_artikel->tanggal_post), 'd') ?></span>
                                    <span class="month"><?php echo date_format(new DateTime($more_artikel->tanggal_post), 'F') ?></span>
                                </div><!-- End .entry-date -->

                                <h2 class="entry-title">
                                    <?php echo $more_artikel->judul_artikel ?>
                                </h2>

                                <div class="entry-content" align="justify">
                                    <p><?php echo substr($more_artikel->isi_artikel,0,150) ?></p>

                                    <a href="<?php echo base_url('artikel/readar/'.$more_artikel->slug_artikel) ?>" class="read-more">Read More <i class="icon-angle-double-right"></i></a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article>
                        <?php } ?>
                    </div><!-- End .owl-carousel -->
                </div><!-- End .related-posts -->
            </div><!-- End .col-lg-9 -->

            <aside class="sidebar col-lg-3">
                        <div class="sidebar-wrapper">
                            <div class="widget widget-search">
                                <form role="search" method="get" class="search-form" action="#">
                                    <input type="search" class="form-control" placeholder="Cari Artikel Disini..." name="s" required>
                                    <button type="submit" class="search-submit" title="Search">
                                        <i class="icon-search"></i>
                                        <span class="sr-only">Search</span>
                                    </button>
                                </form>
                            </div><!-- End .widget -->

                            <div class="widget widget-categories">
                                <h4 class="widget-title">Artikel Kategori</h4>

                                <?php foreach ($kategori_artikel_kanan as $kategori_artikel_kanan) { ?>
                                <ul class="list">
                                    <li><a href="<?php echo base_url('artikel/kategori/'.$kategori_artikel_kanan->slug_kategori_artikel) ?>"><?php echo $kategori_artikel_kanan->nama_kategori_artikel ?></a></li>
                                </ul>
                                <?php } ?>
                            </div><!-- End .widget -->

                            <div class="widget">
                                <h4 class="widget-title">Archive</h4>

                                <ul class="list" class="treeview-menu">
                                    <?php foreach($listingarsipartikel as $listingarsipartikel) { ?>
                                        <li><a><?php echo date_format(new DateTime($listingarsipartikel->tanggal_post), 'F Y') ?>
                                        </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div><!-- End .widget -->


                        </div><!-- End .sidebar-wrapper -->
                    </aside><!-- End .col-lg-3 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="mb-6"></div><!-- margin -->
</main><!-- End .main -->