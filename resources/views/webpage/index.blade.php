<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DIMECAR</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{!! asset('dash/plugins/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet" />
  <link href="{!! asset('webpagedimecar/assets/img/favicon.png') !!}" rel="icon">
  <link href="{!! asset('webpagedimecar/assets/img/apple-touch-icon.png') !!}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <!-- Vendor CSS Files -->
  <link href="{!! asset('webpagedimecar/assets/vendor/animate.css/animate.min.css') !!}" rel="stylesheet">
  <link href="{!! asset('webpagedimecar/assets/vendor/aos/aos.css') !!}" rel="stylesheet">
  <link href="{!! asset('webpagedimecar/assets/vendor/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
  <link href="{!! asset('webpagedimecar/assets/vendor/bootstrap-icons/bootstrap-icons.css') !!}" rel="stylesheet">
  <link href="{!! asset('webpagedimecar/assets/vendor/boxicons/css/boxicons.min.css') !!}" rel="stylesheet">
  <link href="{!! asset('webpagedimecar/assets/vendor/glightbox/css/glightbox.min.css') !!}" rel="stylesheet">
  <link href="{!! asset('webpagedimecar/assets/vendor/swiper/swiper-bundle.min.css') !!}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{!! asset('webpagedimecar/assets/css/style.css') !!}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Restaurantly - v3.1.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>3105456455</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Lunes-Viernes: 9AM - 17PM</span></i>
      </div>


    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html"><img src="{!! asset('webpagedimecar/assets/img/logodime.png') !!}"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
          <li><a class="nav-link scrollto" href="#about">Quienes Somos</a></li>
          <li><a class="nav-link scrollto" href="#events">Catalogo</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Galeria</a></li>
          <li><a class="nav-link scrollto" href="#why-us">Contactos</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">RESERVAR AHORA</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->



    @yield('content')



  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>DIMECARS</h3>
              <p>
                <strong>Dirección:</strong> Av 2BN #28N-21 Cali, Colombia<br>
                <strong>Celular:</strong> +57 310 545 6455<br>
                <strong>Email:</strong> dimecarscali@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>LINKS</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Inicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Quienes Somos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Catalogo</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Galeria</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Contactos</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Otros Servicios</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Alquiler</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Aeropuerto</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Seguro</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Hospedaje</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Viajes</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Pendiente</h4>
            <p>Proximamente</p>
            

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>DIMECARS</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Designed by HACHE
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{!! asset('webpagedimecar/assets/vendor/aos/aos.js') !!}"></script>
  <script src="{!! asset('webpagedimecar/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
  <script src="{!! asset('webpagedimecar/assets/vendor/glightbox/js/glightbox.min.js') !!}"></script>
  <script src="{!! asset('webpagedimecar/assets/vendor/isotope-layout/isotope.pkgd.min.js') !!}"></script>
  <script src="{!! asset('webpagedimecar/assets/vendor/php-email-form/validate.js') !!}"></script>
  <script src="{!! asset('webpagedimecar/assets/vendor/swiper/swiper-bundle.min.js') !!}"></script>
  <script src="{!! asset('dash/plugins/jquery/jquery.min.js ') !!}"></script>
  <!-- Template Main JS File -->
  <script src="{!! asset('webpagedimecar/assets/js/main.js') !!}"></script>
  <script src="{!! asset('dash/js/sweetalert2.all.min.js') !!}"></script>

  <script src="{!! asset('dash/js/moment.min.js') !!}"></script>
  <script src="{!! asset('webpagedimecar/assets/js/style_hache.js') !!}"></script>

</body>

</html>