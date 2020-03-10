<main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('home') ?>"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Berita</li>
                    </ol>
                </div><!-- End .container -->
            </nav>

            <div class="container">
                <div class="row">
                    <?php foreach ($listingberita as $listingberita) { ?>
                        <div class="col-lg-9">
                            <article class="entry">
                                <div class="entry-media">
                                    <a href="#">
                                        <img src="<?php echo base_url('assets/images/artikel/'.$listingberita->gambar) ?>" alt="Post">
                                    </a>
                                </div><!-- End .entry-media -->

                                <div class="entry-body">
                                    <div class="entry-date">
                                        <span class="day"><?php echo date_format(new DateTime($listingberita->tanggal_post), 'd') ?></span>
                                    <span class="month"><?php echo date_format(new DateTime($listingberita->tanggal_post), 'F') ?></span>
                                    </div><!-- End .entry-date -->

                                    <h2 class="entry-title">
                                        <a href="<?php echo base_url('detail') ?>"><?php echo $listingberita->judul_artikel ?></a>
                                    </h2>

                                    <div class="entry-content">
                                        <p><?php echo substr($listingberita->isi_artikel,0,500)."....." ?></p>

                                        <a href="single.html" class="read-more">Read More <i class="icon-angle-double-right"></i></a>
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
                            <nav class="toolbox toolbox-pagination">
                                <ul class="pagination">
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
                                </ul>
                            </nav>
                        </div><!-- End .col-lg-9 -->
                    <?php } ?>

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
                                <h4 class="widget-title">Kategori Berita</h4>

                                <?php foreach ($kategori_artikel as $kategori_artikel) { ?>
                                    <ul class="list">
                                        <li><a href="<?php echo $kategori_artikel->nama_kategori_artikel ?>"><?php echo $kategori_artikel->nama_kategori_artikel ?></a></li>
                                    </ul>
                                <?php } ?>
                            </div><!-- End .widget -->

                            <div class="widget">
                                <h4 class="widget-title">Recent Posts</h4>

                                <ul class="simple-entry-list">
                                    <li>
                                        <div class="entry-media">
                                            <a href="single.html">
                                                <img src="<?php echo base_url() ?>assets/padma-home/demo-4/assets/images/blog/widget/post-1.jpg" alt="Post">
                                            </a>
                                        </div><!-- End .entry-media -->
                                        <div class="entry-info">
                                            <a href="single.html">Post Format - Video</a>
                                            <div class="entry-meta">
                                                April 08, 2018
                                            </div><!-- End .entry-meta -->
                                        </div><!-- End .entry-info -->
                                    </li>

                                    <li>
                                        <div class="entry-media">
                                            <a href="single.html">
                                                <img src="<?php echo base_url() ?>assets/padma-home/demo-4/assets/images/blog/widget/post-2.jpg" alt="Post">
                                            </a>
                                        </div><!-- End .entry-media -->
                                        <div class="entry-info">
                                            <a href="single.html">Post Format - Image</a>
                                            <div class="entry-meta">
                                                March 23, 2016
                                            </div><!-- End .entry-meta -->
                                        </div><!-- End .entry-info -->
                                    </li>
                                </ul>
                            </div><!-- End .widget -->

                            <div class="widget">
                                <h4 class="widget-title">Tagcloud</h4>

                                <div class="tagcloud">
                                    <a href="blog.html#">Fashion</a>
                                    <a href="blog.html#">Shoes</a>
                                    <a href="blog.html#">Skirts</a>
                                    <a href="blog.html#">Dresses</a>
                                    <a href="blog.html#">Bags</a>
                                </div><!-- End .tagcloud -->
                            </div><!-- End .widget -->

                            <div class="widget">
                                <h4 class="widget-title">Archive</h4>

                                <ul class="list">
                                    <li><a href="blog.html#">April 2018</a></li>
                                    <li><a href="blog.html#">March 2018</a></li>
                                    <li><a href="blog.html#">February 2018</a></li>
                                </ul>
                            </div><!-- End .widget -->


                            <div class="widget widget_compare">
                                <h4 class="widget-title">Compare Products</h4>

                                <p>You have no items to compare.</p>
                            </div><!-- End .widget -->
                        </div><!-- End .sidebar-wrapper -->
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-6"></div><!-- margin -->
        </main><!-- End .main -->