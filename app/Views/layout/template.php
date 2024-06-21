<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pelaporan - Multi Daya Mitra</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url(); ?>/assets/img/favicon.png" rel="icon">
  <link href="<?= base_url(); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url(); ?>/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Selecao - v2.3.1
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="<?= base_url(); ?>/">PT. MULTI DAYA MITRA</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
<!--          <li><a href="<?= base_url(); ?>/">Home</a></li>-->
          <li><a href="<?= base_url(); ?>/aktivitas">Aktivitas</a></li>
          <li><a href="<?= base_url(); ?>/aset">Pinjam Aset</a></li>
          <li><a href="daftarinvestasi.html">Pengajuan Investasi</a></li>
          <li class="drop-down"><a href="">Profil</a>
            <ul>
              <li><a href="#">Profil</a></li>
              <li><a href="<?= base_url(); ?>/logout">Logout</a></li>
<!--              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>-->
            </ul>
          </li>
          <li><a href="https://api.whatsapp.com/send/?phone=6208113461666&text=Saya%20ingin...%21&app_absent=0">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
    <!-- Begin page content -->
    <main id="main">
        <?= $this->renderSection('content') ?>
    </main>

    <footer id="footer">
    <div class="container">
      <h3>PT. Multi Daya Mitra</h3>
      <p>Deal with Electrical, Instrumentation, Fire Alarm, and Automation.</p>
      <div class="social-links">
        <a href="https://www.facebook.com/multidayamitra/" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="http://instagram.com/multidayamitra/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/company/66721820/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Multi Daya Mitra Group</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
        Designed by <a style="color: white" href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

    <!-- Vendor JS Files -->
  <script src="<?= base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?= base_url(); ?>/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url(); ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url(); ?>/assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?= base_url(); ?>/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?= base_url(); ?>/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url(); ?>/assets/js/main.js"></script>

</body>

</html>