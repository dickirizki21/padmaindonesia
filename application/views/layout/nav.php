</div><!-- End .header-dropown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <a href="<?php echo base_url('home') ?>" class="logo">
                           <!--  <img src="<?php echo base_url() ?>assets/padma-home/demo-4/assets/images/logo.png" alt="Padmaindonesia logo"> -->
                           <h2 style="color: #ffff;">PADMA INDONESIA</h2>
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <div class="header-search">
                            <a href="index.html#" class="search-toggle" role="button"><i class="icon-magnifier"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search..." required>
                                    <div class="select-custom">
                                        <select id="cat" name="cat">
                                            <option value="">All Kategori</option>
                                            <option value="4">- Kategori 1</option>
                                            <option value="12">- Kategori 2</option>
                                            <option value="13">- Kategori 3</option>
                                            <option value="66">- Kategori 4</option>
                                            <option value="67">- Kategori 5</option>
                                            <option value="5">- Kategori 6</option>
                                            <option value="21">- Kategori 7</option>
                                            <option value="22">- Kategori 8</option>
                                        </select>
                                    </div><!-- End .select-custom -->
                                    <button class="btn" type="submit"><i class="icon-magnifier"></i></button>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                    </div><!-- End .headeer-center -->

                    <div class="header-right">
                        <button class="mobile-menu-toggler" type="button">
                            <i class="icon-menu"></i>
                        </button>
                        <div class="header-contact">
                            <span align="center">Tanya Ke Whatsapp</span>
                            <a href="https://wa.me/<?php echo $konfigurasi->tlp_wa ?>?text=Hallo%20admin%20padma%20indonesia%20bisa%20bantu%20saya?" target="_blank">
                            <strong>+<?php echo $konfigurasi->tlp_wa ?></strong></a>
                        </div><!-- End .header-contact -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->

            <div class="header-bottom sticky-header">
                <div class="container">
                    <nav class="main-nav">
                        <ul class="menu sf-arrows">
                            <li class="active"><a href="<?php echo base_url('home') ?>">Beranda</a></li>
                            <li class="active"><a href="<?php echo base_url('tentang') ?>">Tentang Kami</a></li>
                            <li><a href="<?php echo base_url('produk') ?>">Produk</a>
                                <ul>
                                    <li><a href="<?php echo base_url('produk1') ?>">Produk 1</a></li>
                                    <li><a href="<?php echo base_url('produk1') ?>">Produk 2</a></li>
                                    <li><a href="<?php echo base_url('produk1') ?>">Produk 3</a></li>
                                    <li><a href="<?php echo base_url('produk1') ?>">Produk 4</a></li>
                                    <li><a href="<?php echo base_url('produk1') ?>">Produk 5</a></li>
                                    <li><a href="<?php echo base_url('produk1') ?>">Produk 6</a></li>
                                </ul>
                            </li>
                            <li class="active"><a href="<?php echo base_url('galeri') ?>">Galeri</a></li>
                            <li><a href="<?php echo base_url('berita') ?>">Berita</a></li>
                            <li><a href="<?php echo base_url('artikel') ?>">Artikel</a></li>
                            <li><a href="<?php echo base_url('toko') ?>">Toko Kami</a></li>
                            <li class="active"><a href="<?php echo base_url('kontak') ?>">Kontak Kami</a></li>
                        </ul>
                    </nav>
                </div><!-- End .header-bottom -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->