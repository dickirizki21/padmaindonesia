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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.8164751783356!2d107.03199231427304!3d-6.287837995449056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698e247a6cac9d%3A0xd6a12bae61967602!2sPT%20Cahaya%20Indorahmat%20Pratamajaya!5e0!3m2!1sen!2sid!4v1574608170830!5m2!1sen!2sid" width="100%" height="450" frameborder="1" style="border:0" allowfullscreen></iframe>
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

            <div class="col-md-4" style="padding-top: 30px">
                <h2 class="light-title">Kontak <strong>Kami</strong></h2>

                <div class="contact-info">
                    <div>
                        <i class="icon-phone"></i>
                        <p style="padding-top: 10px"><a href="tel:">0201 203 2032</a></p>
                    </div>
                    <div>
                        <i class="icon-facebook"></i>
                        <p style="padding-top: 10px"><a href="tel:">porto_fb</a></p>
                    </div>
                    <div>
                        <i class="icon-mail-alt"></i>
                        <p style="padding-top: 10px"><a href="mailto:#">porto@gmail.com</a></p>
                    </div>
                    <div>
                        <i class="icon-instagram"></i>
                        <p style="padding-top: 10px">porto_skype</p>
                    </div>
                </div><!-- End .contact-info -->
            </div><!-- End .col-md-4 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="mb-8"></div><!-- margin -->
</main><!-- End .main -->
