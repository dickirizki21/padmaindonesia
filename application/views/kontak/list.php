<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('home') ?>"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Kontak Kami</li>
            </ol>
        </div><!-- End .container -->
    </nav>

    <div class="container">
        <!-- Maps -->
        
    <div class="col-md-12">        
       <?php echo $konfigurasi->maps ?>
    <!-- End #map -->
    </div> <br> <br>


        <div class="container">
            <div class="row mb-10 contact-info">
                <div class="col-md-12">
                    <h2 align="center" class="light-title">Kontak <strong>Kami</strong></h2>
                </div>
                    <div class="col-xs-3 mr-2">
                        <i class="icon-facebook"></i>
                        <p style="padding-top: 10px"><a href="<?php echo $konfigurasi->facebook ?>:" target="_blank">Padma Indonesia</a></p>
                    </div>
                    <div class="col-xs-3 mr-2">
                        <i class="icon-instagram"></i>
                         <p style="padding-top: 10px"><a href="<?php echo $konfigurasi->instagram ?>:" target="_blank">Padma Indonesia</a></p>
                    </div>
                    <div class="col-xs-3 mr-2">
                        <i class="icon-mail-alt"></i>
                        <p style="padding-top: 10px"><a href="mailto:info@padmaindonesia.co.id" target="_blank">info@padmaindonesia.co.id</a></p>
                    </div>
                    <div class="col-xs-2 mr-2">
                        <i class="icon-twitter"></i>
                        <p style="padding-top: 10px"><a href="<?php echo $konfigurasi->twitter ?>" target="_blank">Padma Indonesia</a></p>
                    </div>
                    <div class="col-xs-1 mr-2">
                        <i class="icon-phone"></i>
                        <p style="padding-top: 10px"><a href="tel:<?php echo $konfigurasi->tlp ?>"><?php echo $konfigurasi->tlp ?></a></p>
                    </div>
            </div><!-- End .row -->
        </div> 
    
</main><!-- End .main -->

