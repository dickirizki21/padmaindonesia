<!doctype html>
<html class="fixed">
	<head>
		<title><?php echo $title ?></title>

		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="vendor/animate/animate.css">

		<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/vendor/font-awesome/css/all.min.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/css/theme.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/css/custom.css">

		<!-- Head Libs -->
		<script src="<?php echo base_url()?>assets/admin/vendor/modernizr/modernizr.js"></script>	
		<script src="<?php echo base_url()?>assets/admin/master/style-switcher/style.switcher.localstorage.js"></script>

	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="<?php base_url('login/list') ?>" class="logo float-left">
					<img src="<?php echo base_url()?>assets/admin/img/logo.png" height="54" alt="Porto Admin" />
				</a>

				<div class="panel card-sign">
					<div class="card-title-sign mt-3 text-right">
						<h2 class="title text-uppercase font-weight-bold m-0"><i class="fas fa-user mr-1"></i> Sign In</h2>
					</div>
					
					<div class="card-body">
						<div align="center">
							<b><h3> Selamat Datang</h3></b>
							<label>Masukan Username dan Password</label>
						</div> <br>
						<form action="index.html" method="post">
							<div class="form-group mb-3">
								<div class="input-group">
									<span class="input-group-append">
										<span class="input-group-text">
											<i class="fas fa-user"></i>
										</span>
									</span>
									<input name="username" type="text" class="form-control form-control-md" placeholder="Username" />
									
								</div>
							</div>

							<div class="form-group mb-3">
								<div class="input-group">
									<span class="input-group-append">
										<span class="input-group-text">
											<i class="fas fa-lock"></i>
										</span>
									</span>
									<input name="pwd" type="password" class="form-control form-control-md" placeholder="Password" />
									
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12">
									<button type="submit" class="btn btn-primary btn-block mt-2">Sign In</button>
								</div>
							</div>
						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-3 mb-3">&copy; Copyright 2019. Padma Indonesia.	</p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="<?php echo base_url()?>assets/admin/vendor/jquery/jquery.js"></script>		
		<script src="<?php echo base_url()?>assets/admin/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>		
		<script src="<?php echo base_url()?>assets/admin/vendor/jquery-cookie/jquery.cookie.js"></script>		
		<script src="<?php echo base_url()?>assets/admin/master/style-switcher/style.switcher.js"></script>		
		<script src="<?php echo base_url()?>assets/admin/vendor/popper/umd/popper.min.js"></script>		
		<script src="<?php echo base_url()?>assets/admin/vendor/bootstrap/js/bootstrap.js"></script>		
		<script src="<?php echo base_url()?>assets/admin/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>		
		<script src="<?php echo base_url()?>assets/admin/vendor/common/common.js"></script>		
		<script src="<?php echo base_url()?>assets/admin/vendor/nanoscroller/nanoscroller.js"></script>		
		<script src="<?php echo base_url()?>assets/admin/vendor/magnific-popup/jquery.magnific-popup.js"></script>		
		<script src="<?php echo base_url()?>assets/admin/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url()?>assets/admin/js/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?php echo base_url()?>assets/admin/js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url()?>assets/admin/js/theme.init.js"></script>
		<!-- Analytics to Track Preview Website -->		
		<script>		  
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||
				function(){		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');		  
				ga('create', 'UA-42715764-8', 'auto');		  ga('send', 'pageview');		
		</script>
	</body>
</html>