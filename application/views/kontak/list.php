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
    </div>

        <div class="row">
            <div class="col-md-8" style="padding-top: 30px; padding-left: 30px">
                <h2 class="light-title">Tulis <strong>Komentar</strong></h2>

                <form action="#">
                    <div class="form-group required-field">
                        <label for="contact-name">Nama</label>
                        <input type="text" class="form-control" id="contact-name" name="contact-name" required>
                    </div><!-- End .form-group -->

                    <div class="form-group required-field">
                        <label for="contact-email">Email</label>
                        <input type="email" class="form-control" id="contact-email" name="contact-email" required>
                    </div><!-- End .form-group -->

                    <div class="form-group">
                        <label for="contact-phone">Nomor Telepon</label>
                        <input type="tel" class="form-control" id="contact-phone" name="contact-phone">
                    </div><!-- End .form-group -->

                    <div class="form-group required-field">
                        <label for="contact-message">Komentar</label>
                        <textarea cols="30" rows="1" id="contact-message" class="form-control" name="contact-message" required></textarea>
                    </div><!-- End .form-group -->

                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div><!-- End .form-footer -->
                </form>
            </div><!-- End .col-md-8 -->

            <div class="col-md-2" style="padding-top: 30px">
                <h2 class="light-title">Kontak <strong>Kami</strong></h2>

                <div class="contact-info">
                    <div>
                        <i class="icon-facebook"></i>
                        <p style="padding-top: 10px"><a href="<?php echo $konfigurasi->facebook ?>:" target="_blank">Padma Indonesia</a></p>
                    </div>
                    <div>
                        <i class="icon-instagram"></i>
                         <p style="padding-top: 10px"><a href="<?php echo $konfigurasi->instagram ?>:" target="_blank">Padma Indonesia</a></p>
                    </div>
                    <div>
                        <i class="icon-mail-alt"></i>
                        <p style="padding-top: 10px"><a href="mailto:info@padmaindonesia.co.id" target="_blank">info@padmaindonesia.co.id</a></p>
                    </div>
                </div><!-- End .contact-info -->
            </div><!-- End .col-md-4 -->

             <div class="col-md-2" style="padding-top: 30px">
                <h2 class="light-title" style="visibility: hidden">Kontak <strong>Kami</strong></h2>

                <div class="contact-info">
                    <div>
                        <i class="icon-twitter"></i>
                        <p style="padding-top: 10px"><a href="<?php echo $konfigurasi->twitter ?>" target="_blank">Padma Indonesia</a></p>
                    </div>
                    
                    <div>
                        <i class="icon-phone"></i>
                        <p style="padding-top: 10px"><a href="#"><?php echo $konfigurasi->tlp ?></a></p>
                    </div>
                </div><!-- End .contact-info -->
            </div><!-- End .col-md-4 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="mb-8"></div><!-- margin -->
</main><!-- End .main -->
