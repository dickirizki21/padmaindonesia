<main class="main">
            <div class="page-header page-header-bg" style="background-image: url('<?php echo base_url() ?>assets/padma-home/demo-4/assets/images/page-header-bg.jpg');">
                <div class="container">
                    <h1><span>TENTANG</span>
                        PERUSAHAAN KAMI</h1>
                    <a href="contact.html" class="btn btn-dark">Hubungi</a>
                </div><!-- End .container -->
            </div><!-- End .page-header -->

            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('home') ?>"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tentang</li>
                    </ol>
                </div><!-- End .container -->
            </nav>

            <div class="about-section">
                <div class="container">
                    <h2 class="subtitle">Sejarah</h2>
                    <p align="justify"><?php echo $konfigurasi->sejarah_perusahaan ?></p>

                    <h2 class="subtitle" align="center">Visi</h2>
                    <p class="lead">“ <?php echo $konfigurasi->visi ?> ”</p>

                    <h2 class="subtitle" align="center">Misi</h2>
                    <p><?php echo $konfigurasi->misi ?></p>
                </div><!-- End .container -->
            </div><!-- End .about-section -->

            <div class="features-section mb-10">
                <div class="container">
                    <h2 class="subtitle">MENGAPA MEMILIH KAMI?</h2>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="feature-box">
                                <i class="icon-shipped"></i>

                                <div class="feature-box-content">
                                    <h3>Lorem Lorem Ipsum Ipsum</h3>
                                    <p align="justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div><!-- End .feature-box-content -->
                            </div><!-- End .feature-box -->
                        </div><!-- End .col-lg-4 -->
                        
                        <div class="col-lg-4">
                            <div class="feature-box">
                                <i class="icon-us-dollar"></i>

                                <div class="feature-box-content">
                                    <h3>Lorem Lorem Ipsum Ipsum</h3>
                                    <p align="justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                </div><!-- End .feature-box-content -->
                            </div><!-- End .feature-box -->
                        </div><!-- End .col-lg-4 -->

                        <div class="col-lg-4">
                            <div class="feature-box">
                                <i class="icon-online-support"></i>

                                <div class="feature-box-content">
                                    <h3>Lorem Lorem Ipsum Ipsum</h3>
                                    <p align="justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                </div><!-- End .feature-box-content -->
                            </div><!-- End .feature-box -->
                        </div><!-- End .col-lg-4 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .features-section -->
        </main><!-- End .main -->