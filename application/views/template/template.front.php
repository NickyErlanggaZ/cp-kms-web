<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Komunitas Motor Supra</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('public/assets/frontend/img/favicon.png') ?>" rel="icon">
  <link href="<?= base_url('public/assets/frontend/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('public/assets/frontend/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('public/assets/frontend/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('public/assets/frontend/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('public/assets/frontend/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('public/assets/frontend/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('public/assets/frontend/css/style.css') ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Baker - v4.9.1
  * Template URL: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">KMS</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto <?php if(current_url() == base_url('/')) {echo 'active';}?>" href="<?= base_url('/') ?>">Home</a></li>
          <li><a class="nav-link scrollto <?php if(current_url() == base_url('/artikel')) {echo 'active';}?>" href="<?= base_url('/artikel') ?>">Artikel</a></li>
          <li><a class="nav-link scrollto <?php if(current_url() == base_url('/event')) {echo 'active';}?>" href="<?= base_url('/event') ?>">Event</a></li>
          <li><a class="nav-link scrollto <?php if(current_url() == base_url('/galeri')) {echo 'active';}?> " href="<?= base_url('/galeri') ?>">Gallery Foto</a></li>
          <li><a class="nav-link scrollto <?php if(current_url() == base_url('/klien')) {echo 'active';}?>" href="<?= base_url('/klien') ?>">Klien Kami</a></li>
          <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Sign In</a></li>
              <li><a href="#">Sign Up</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <?php if ($isheroshow) { ?>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
      <div class="container position-relative">
        <h1>Komunitas Motor Supra Indonesia</h1>
        <h2>Bersama Supra, Mari Jelajahi Dunia</h2>
        <a href="#about" class="btn-get-started scrollto">Join Komunitas</a>
      </div>
    </section><!-- End Hero -->
  <?php } ?>
  <main id="main">
    {CONTENT}
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Komunitas Motor Supra Indonesia</h3>
            <p>
              Jl. Kembang Kertas IV No.22 <br>
              Lowokwaru, Malang<br>
              Indonesia <br><br>
              <strong>Phone:</strong> +62 812 4555 9000<br>
              <strong>Email:</strong> info@kmsupra.id<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Menu</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Artikel</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Event</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Gallery Foto</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Klien Kami</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Lainnya</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Donasi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Produk</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Event</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Komunitas Motor Supra Indonesia</h4>
            <p>Gabung dan Ikuti Komunitas kami dengan klik button dibawah</p>
            <button class="btn btn-outline-dark">Join Komunitas</button>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Nicky Erlangga Setiawan</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('public/assets/frontend/vendor/purecounter/purecounter_vanilla.js'); ?>"></script>
  <script src="<?= base_url('public/assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?= base_url('public/assets/frontend/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
  <script src="<?= base_url('public/assets/frontend/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
  <script src="<?= base_url('public/assets/frontend/vendor/swiper/swiper-bundle.min.js'); ?>"></script>
  <script src="<?= base_url('public/assets/frontend/vendor/php-email-form/validate.js'); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('public/assets/frontend/js/main.js'); ?>"></script>

</body>

</html>