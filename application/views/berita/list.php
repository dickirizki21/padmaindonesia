<?php 
$kategori_berita_kanan = $this->konfigurasi_model->kategori_berita_kanan();
 ?>
    <main class="main">
            <div class="container mt-3">
                <div class="row">
                        <div class="col-lg-9">
                            <?php foreach ($listingberita as $listingberita) { ?>
                            <article class="entry">
                                <div class="entry-media">
                                    <a href="<?php echo base_url('berita/readber/'.$listingberita->slug_artikel) ?>">
                                        <img src="<?php echo base_url('assets/images/artikel/'.$listingberita->gambar) ?>" alt="Post">
                                    </a>
                                </div><!-- End .entry-media -->

                                <div class="entry-body">
                                    <div class="entry-date">
                                        <span class="day"><?php echo date_format(new DateTime($listingberita->tanggal_post), 'd') ?></span>
                                    <span class="month"><?php echo date_format(new DateTime($listingberita->tanggal_post), 'F') ?></span>
                                    </div><!-- End .entry-date -->

                                    <h2 class="entry-title">
                                        <a href="<?php echo base_url('berita/readber/'.$listingberita->slug_artikel) ?>"><?php echo $listingberita->judul_artikel ?></a>
                                    </h2>

                                    <div class="entry-content">
                                        <p><?php echo substr($listingberita->isi_artikel,0,500)."....." ?></p>

                                        <a href="<?php echo base_url('berita/readber/'.$listingberita->slug_artikel) ?>" class="read-more">Read More <i class="icon-angle-double-right"></i></a>
                                    </div><!-- End .entry-content -->

                                    <div class="entry-meta">
                                       <span><i class="icon-calendar"></i><?php echo date_format(new DateTime($listingberita->tanggal_post), 'd F Y') ?></span>
                                        <span><i class="icon-user"></i>Ditulis Oleh <?php echo $listingberita->nama_pengguna ?></span>
                                        <span><i class="fas fa-bullhorn"></i></i></i>
                                            <a><?php echo $listingberita->nama_kategori_artikel ?></a>
                                    </span>
                                    </div><!-- End .entry-meta -->
                                </div><!-- End .entry-body -->
                            </article><!-- End .entry -->
                            <?php } ?>   
                            <nav>
                                <div class="paginasi col-md-12 text-right">
                                    <?php if (isset($pagination)) { echo  $pagination; }?>
                                    <div class="clearfix"></div>
                                </div>
                            </nav>
                        </div><!-- End .col-lg-9 -->

                    <aside class="sidebar col-lg-3">
                        <div class="sidebar-wrapper">
                            <div class="widget widget-search">
                                <form role="search" method="get" class="search-form" action="#">
                                    <input type="search" class="form-control" placeholder="Cari Promo Disini...." name="s" required>
                                    <button type="submit" class="search-submit" title="Search">
                                        <i class="icon-search"></i>
                                        <span class="sr-only">Search</span>
                                    </button>
                                </form>
                            </div><!-- End .widget -->

                            <div class="widget widget-categories">
                                <h4 class="widget-title">Kategori Berita</h4>

                                <?php foreach ($kategori_berita_kanan as $kategori_berita_kanan) { ?>
                                    <ul class="list">
                                        <li><a href="<?php echo base_url('artikel/kategori/'.$kategori_berita_kanan->slug_kategori_artikel) ?>"><?php echo $kategori_berita_kanan->nama_kategori_artikel ?></a></li>
                                    </ul>
                                <?php } ?>
                            </div><!-- End .widget -->

                            <div class="widget">
                                <h4 class="widget-title">Berita Terbaru</h4>
                                <?php foreach ($listingberitaterbaru as $listingberitaterbaru) { ?>
                                <ul class="simple-entry-list">
                                    <li>
                                        <div class="entry-media">
                                            <a href="single.html">
                                                <img src="<?php echo base_url('assets/images/artikel/'.$listingberitaterbaru->gambar) ?>" alt="Post">
                                            </a>
                                        </div><!-- End .entry-media -->
                                       <div class="entry-info">
                                            <a href="<?php echo base_url('berita/readber/'.$listingberitaterbaru->slug_artikel) ?>"><?php echo substr($listingberitaterbaru->judul_artikel,0,20)."..." ?></a>
                                            <div class="entry-meta">
                                                <?php echo date_format(new DateTime($listingberitaterbaru->tanggal_post), 'd F Y') ?>
                                            </div><!-- End .entry-meta -->
                                        </div><!-- End .entry-info -->
                                    </li>
                                </ul>
                                <?php } ?>
                            </div><!-- End .widget -->

                            <div class="widget">
                                <h4 class="widget-title">Archive</h4>

                                <ul class="list" class="treeview-menu">
                                    <?php foreach($listingarsipberita as $listingarsipberita) { ?>
                                        <li><a><?php echo date_format(new DateTime($listingarsipberita->tanggal_post), 'F Y') ?>
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