<main class="main">
            <div class="container mt-3">
                <div class="row">
                    <div class="col-lg-9">
                    <?php foreach ($artikel as $artikels) { ?>
                        <article class="entry">
                            <div class="entry-media">
                                <a href="single.html">
                                    <img src="<?php echo base_url('assets/images/artikel/'.$artikels->gambar) ?>" alt="Artikel Image">
                                </a>
                            </div><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-date">
                                    <span class="day"><?php echo date_format(new DateTime($artikels->tanggal_post), 'd') ?></span>
                                    <span class="month"><?php echo date_format(new DateTime($artikels->tanggal_post), 'F') ?></span>
                                </div><!-- End .entry-date -->

                                <h2 class="entry-title"> 
                                    <a href="<?php echo base_url('detailartikel') ?>"><?php echo $artikels->judul_artikel; ?></a>
                                </h2>

                                <div class="entry-content">
                                    <p align="justify"><?php echo substr($artikels->isi_artikel,0,500)."....." ?></p>
                                    <a href="" class="read-more">Read More <i class="icon-angle-double-right"></i></a>
                                </div><!-- End .entry-content -->

                                <div class="entry-meta">
                                    <span><i class="icon-calendar"></i><?php echo date_format(new DateTime($artikels->tanggal_post), 'd F Y') ?></span>
                                    <span><i class="icon-user"></i>Ditulis Oleh <?php echo $artikels->nama_pengguna ?></span>
                                    <span><i class="fas fa-bullhorn"></i></i></i>
                                        <a><?php echo $artikels->nama_kategori_artikel ?></a>
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
                            <!-- <ul class="pagination">
                                <li class="page-item active">
                                    <a class="page-link" href="blog.html#">1 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="blog.html#">2</a></li>
                                <li class="page-item"><a class="page-link" href="blog.html#">3</a></li>
                                <li class="page-item"><a class="page-link" href="blog.html#">4</a></li>
                                <li class="page-item"><a class="page-link" href="blog.html#">5</a></li>
                                <li class="page-item"><span class="page-link">...</span></li>
                                <li class="page-item">
                                    <a class="page-link page-link-btn" href="blog.html#"><i class="icon-angle-right"></i></a>
                                </li>
                            </ul> -->
                        </nav>
                    </div><!-- End .col-lg-9 -->

                    <aside class="sidebar col-lg-3">
                        <div class="sidebar-wrapper">
                            <div class="widget widget-search">
                                <form role="search" method="get" class="search-form" action="#">
                                    <input type="search" class="form-control" placeholder="Search posts here..." name="s" required>
                                    <button type="submit" class="search-submit" title="Search">
                                        <i class="icon-search"></i>
                                        <span class="sr-only">Search</span>
                                    </button>
                                </form>
                            </div><!-- End .widget -->

                            <div class="widget widget-categories">
                                <h4 class="widget-title">Artikel Kategori</h4>

                                <?php foreach ($kategori_artikel as $kategori_artikel) { ?>
                                <ul class="list">
                                    <li><a href="<?php echo base_url('artikel/kategori/'.$kategori_artikel->slug_kategori_artikel) ?>"><?php echo $kategori_artikel->nama_kategori_artikel ?></a></li>
                                </ul>
                                <?php } ?>
                            </div><!-- End .widget -->

                            <div class="widget">
                                <h4 class="widget-title">Artikel Terbaru</h4>

                            <?php foreach ($listingartikelterbaru as $listingartikelterbaru) { ?>
                                <ul class="simple-entry-list mt-1 mb-1">
                                    <li>
                                        <div class="entry-media">
                                            <a href="single.html">
                                                <img style="height: 50px;die;" src="<?php echo base_url('assets/images/artikel/'.$listingartikelterbaru->gambar) ?>" alt="Post">

                                            </a>
                                        </div><!-- End .entry-media -->
                                        <div class="entry-info">
                                            <a href="single.html"><?php echo substr($listingartikelterbaru->judul_artikel,0,20)."..." ?></a>
                                            <div class="entry-meta">
                                                <?php echo date_format(new DateTime($listingartikelterbaru->tanggal_post), 'd F Y') ?>
                                            </div><!-- End .entry-meta -->
                                        </div><!-- End .entry-info -->
                                    </li>
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