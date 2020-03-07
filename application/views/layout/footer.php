 <footer class="footer">
            <div class="footer-middle">
                <div class="container">
                    <div class="footer-ribbon">
                        Get in touch
                    </div><!-- End .footer-ribbon -->
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">Kontak Kami</h4>
                                <ul class="contact-info">
                                    <li>
                                        <span class="contact-info-label">Alamat <b>:</b></span><?php echo $konfigurasi->alamat ?>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Telepon / Wa <b>:</b></span><a href="https://wa.me/<?php echo $konfigurasi->tlp_wa ?>?text=Hallo%20admin%20padma%20indonesia%20bisa%20bantu%20saya?" target="_blank">+<?php echo $konfigurasi->tlp_wa ?></a>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Email <b>:</b></span> <a href="mailto:info@padmaindonesia.co.id" target="_blank"><?php echo $konfigurasi->email ?></a>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Waktu Buka <b>:</b></span>
                                        Mon - Sun / 9:00AM - 8:00PM
                                    </li>
                                </ul>
                                <div class="social-icons">
                                    <a href="<?php echo $konfigurasi->facebook ?>" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
                                    <a href="<?php echo $konfigurasi->tlp ?>" class="social-icon" target="_blank"><i class="icon-phone"></i></a>
                                    <a href="<?php echo $konfigurasi->instagram ?>" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
                                </div><!-- End .social-icons -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-lg-3 -->

                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="widget">
                                        <h4 class="widget-title">Produk Kami</h4>

                                        <div class="row">
                                            <div class="col-sm-6 col-md-5">
                                                <ul class="links">
                                                    <li><a href="<?php echo base_url('detail1') ?>">Produk 1</a></li>
                                                    <li><a href="<?php echo base_url('detail1') ?>">Produk 2</a></li>
                                                    <li><a href="<?php echo base_url('detail1') ?>">Produk 3</a></li>
                                                </ul>
                                            </div><!-- End .col-sm-6 -->
                                            <div class="col-sm-6 col-md-5">
                                                <ul class="links">
                                                    <li><a href="<?php echo base_url('detail1') ?>">Produk 4</a></li>
                                                    <li><a href="<?php echo base_url('detail1') ?>">Produk 5</a></li>
                                                    <li><a href="<?php echo base_url('detail1') ?>" class="login-link">Produk 6</a></li>
                                                </ul>
                                            </div><!-- End .col-sm-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .widget -->
                                </div><!-- End .col-md-5 -->

                                <div class="col-md-7">
                                    <div class="widget">
                                        <h4 class="widget-title">Mengapa Pilih Padma Indonesia?</h4>
                                        
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p align="justify"><?php echo $konfigurasi->kelebihan_perusahaan ?></p>
                                            </div><!-- End .col-sm-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .widget -->
                                </div><!-- End .col-md-7 -->
                            </div><!-- End .row -->
                        </div><!-- End .col-lg-9 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .footer-middle -->

            <div class="container">
                <div class="footer-bottom">
                    <p class="footer-copyright">&copy; Padma Indonesia 2019</p>
                </div><!-- End .footer-bottom -->
            </div><!-- End .container -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->

    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-cancel"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="active"><a href="index.html">Beranda</a></li>
                    <li>
                        <a href="category.html">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="product.html">Produk</a>
                        <ul>
                                    <li><a href="<?php echo base_url('produk1') ?>">Produk 1</a></li>
                                    <li><a href="<?php echo base_url('produk1') ?>">Produk 2</a></li>
                                    <li><a href="<?php echo base_url('produk1') ?>">Produk 3</a></li>
                                    <li><a href="<?php echo base_url('produk1') ?>">Produk 4</a></li>
                                    <li><a href="<?php echo base_url('produk1') ?>">Produk 5</a></li>
                                    <li><a href="<?php echo base_url('produk1') ?>">Produk 6</a></li>
                                </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url('galeri') ?>">Galeri<span class="tip tip-hot"></span></a>
                    </li>
                    <li><a href="<?php echo base_url('berita') ?>">Berita</a>
                    </li>
                    <li><a href="<?php echo base_url('toko') ?>">Toko Kami</a></li>
                    <li><a href="<?php echo base_url('kontak') ?>">Kontak Kami</a></li>
                </ul>
            </nav><!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <div class="newsletter-popup mfp-hide" id="newsletter-popup-form" style="background-image: url('assets/images/newsletter_popup_bg.jpg')">
        <div class="newsletter-popup-content">
            <img src="assets/images/logo-black.png" alt="Logo" class="logo-newsletter">
            <h2>BE THE FIRST TO KNOW</h2>
            <p>Subscribe to the Porto eCommerce newsletter to receive timely updates from your favorite products.</p>
            <form action="#">
                <div class="input-group">
                    <input type="email" class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Email address" required>
                    <input type="submit" class="btn" value="Go!">
                </div><!-- End .from-group -->
            </form>
            <div class="newsletter-subscribe">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="1">
                        Don't show this popup again
                    </label>
                </div>
            </div>
        </div><!-- End .newsletter-popup-content -->
    </div><!-- End .newsletter-popup -->

    <a id="scroll-top" href="<?php echo base_url() ?>assets/padma-home/demo-4/index.html#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script src="<?php echo base_url() ?>assets/padma-home/demo-4/assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/padma-home/demo-4/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>assets/padma-home/demo-4/assets/js/plugins.min.js"></script>

    <!-- Main JS File -->
    <script src="<?php echo base_url() ?>assets/padma-home/demo-4/assets/js/main.min.js"></script>

    <!-- Google Map-->
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDc3LRykbLB-y8MuomRUIY0qH5S6xgBLX4"></script>
    <script src="<?php echo base_url() ?>assets/padma-home/demo-4/assets/js/map.js"></script>
    
</body>
</html>