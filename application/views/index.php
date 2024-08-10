<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>TAROIN AJA</title>
	<meta name="description" content="">
	<meta name="keywords" content="">

	<!-- Favicons -->
	<link href="<?php echo base_url(); ?>assets/img/favicon.png" rel="icon">
	<link href="<?php echo base_url(); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com" rel="preconnect">
	<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Main CSS File -->
	<link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet">

	<!-- =======================================================
  * Template Name: Bootslander
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

	<header id="header" class="header d-flex align-items-center fixed-top">
		<div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

			<a href="" class="logo d-flex align-items-center">
				<!-- Uncomment the line below if you also wish to use an image logo -->
				<!-- <img src="<?php echo base_url(); ?>assets/img/logo.png" alt=""> -->
				<h1 class="sitename">TAROIN AJA</h1>
			</a>

			<nav id="navmenu" class="navmenu">
				<ul>
					<li><a href="#hero">Home</a></li>
					<li><a href="#about">Daftar</a></li>
				</ul>
				<i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
			</nav>

		</div>
	</header>

	<main class="main">

		<!-- Hero Section -->
		<section id="hero" class="hero section dark-background">
			<img src="<?php echo base_url(); ?>assets/img/hero-bg-2.jpg" alt="" class="hero-bg">

			<div class="container">
				<div class="row gy-4 justify-content-between">
					<div class="col-lg-4 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
						<img src="<?php echo base_url(); ?>assets/img/hero-img.png" class="img-fluid animated" alt="">
					</div>

					<div class="col-lg-6  d-flex flex-column justify-content-center" data-aos="fade-in">
						<h1>Build Your Landing Page With <span>Bootslander</span></h1>
						<p>We are team of talented designers making websites with Bootstrap</p>
						<div class="d-flex">
							<a href="#about" class="btn-get-started">Klik Untuk Mendaftar</a>
						</div>
					</div>
					

				</div>
			</div>

			<svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
				<defs>
					<path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
				</defs>
				<g class="wave1">
					<use xlink:href="#wave-path" x="50" y="3"></use>
				</g>
				<g class="wave2">
					<use xlink:href="#wave-path" x="50" y="0"></use>
				</g>
				<g class="wave3">
					<use xlink:href="#wave-path" x="50" y="9"></use>
				</g>
			</svg>

		</section><!-- /Hero Section -->

		<!-- About Section -->
		<section id="about" class="contact section">
			<!-- Section Title -->
			<div class="container section-title" data-aos="fade-up">
				<h2>Pendaftaran</h2>
				<div><span>Daftarkan Diri</span> <span class="description-title">Anda</span></div>
			</div><!-- End Section Title -->

			<div class="container" data-aos="fade-up" data-aos-delay="100">
				<div class="row align-items-xl-center gy-5">
					<div class="col-lg-12">
						<form action="<?php echo site_url('pendaftaran/store'); ?>" method="post">
						<?php echo $this->session->flashdata('msg'); ?>
							<div class="row gy-4">

								<div class="col-md-6">
									<input type="text" name="nama_pasien" class="form-control" placeholder="Nama Anda" required="">
								</div>

								<div class="col-md-6">
									<select class="form-control" name="jk">
										<option>Jenis Kelamin</option>
										<option value="L">Laki-Laki</option>
										<option value="P">Perempuan</option>
									</select>
								</div>

								<div class="col-md-6">
									<input type="date" class="form-control" name="tgl_lahir" placeholder="Subject" required="">
								</div>

								<div class="col-md-12">
									<textarea class="form-control" name="alamat" rows="6" placeholder="Message" required=""></textarea>
								</div>

								<div class="col-md-12 text-center">
									<button class="btn btn-outline-info" type="submit">Send Message</button>
								</div>
								
							</div>
						</form>
					</div>
				</div>
			</div>

		</section><!-- /About Section -->

	</main>

	<footer id="footer" class="footer dark-background">
		<div class="container copyright text-center mt-4">
			<p>© <span>Copyright</span> <strong class="px-1 sitename">Bootslander</strong> <span>All Rights Reserved</span></p>
			<div class="credits">
				Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
			</div>
		</div>
	</footer>

	<!-- Scroll Top -->
	<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<!-- Preloader -->
	<div id="preloader"></div>

	<!-- Vendor JS Files -->
	<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/php-email-form/validate.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/aos/aos.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>

	<!-- Main JS File -->
	<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

</body>

</html>
