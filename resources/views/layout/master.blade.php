<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'SafeSpeaks')</title>
    <!-- Favicons -->
    <link href="{{ url('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ url('assets/img/apple-touch-icon.pn') }}g" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="{{ url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">

    {{-- Template Bootstrap --}}
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">

    {{-- Template Fontawesome --}}
    <script src="{{ url('https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js') }}"></script>
</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="index">SafeSpeaks</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
      <!-- .navbar -->
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto @yield('menuIndex')" href="{{ route('dashboard') }}">Home</a></li>
          <li><a class="nav-link scrollto @yield('menuTrack')" href="{{ route('uptrackingposition') }}">Tracking Position</a></li>
          <li><a class="nav-link scrollto @yield('menuEdukasi')" href="{{ route('edukasi') }}">Edukasi</a></li>
          <li><a class="nav-link scrollto @yield('menuPanduan')" href="{{ route('panduan') }}">Panduan</a></li>
          <li><a class="nav-link scrollto @yield('menuForum')" href="{{ route('forum') }}">Forum</a></li>
          @auth
          <li><a class="nav-link scrollto @yield('menuProfile')" href="{{ route('profile') }}"><i class="bi bi-person-circle"></i></a></li>
          @else
          <li><a class="getstarted scrollto" href="login">Login</a></li>
          @endauth
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header><!-- End Header -->

  {{-- Content --}}
  @section('content')
  <div class="main">
    <div class="container p-5 text-center" >
        @show
    </div>
  </div>


    <!-- ======= Footer ======= -->
    <footer id="footer">


        <div class="container">
            <div class="copyright">
            &copy; Copyright <strong><span>SafeSpeaks</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/ -->
            Designed by <a href="#">Kelompok 9 Pemograman Web</a>
            </div>
        </div>
        </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ url('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ url('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('assets/js/main.js') }}"></script>

    {{-- Template Bootstrap --}}
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    
</body>
</html>
