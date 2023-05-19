@extends('layout.master')
@section('title', 'Home')
@section('menuHome', 'active')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero">

    <div class="container">
        {{-- WITH CAROUSEL --}}
        {{-- <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/picture/sslogo.png" style="height: 350px;" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/picture/sslogo.png" style="height: 350px;" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/picture/sslogo.png" style="height: 350px;" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div> --}}

        {{-- WITHOUT CAROUSEL --}}
        <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
            <div>
            <h1>SafeSpeak</h1>
            <h2> Media Edukasi dan Bantuan bagi Korban Pelecehan Seksual dan Bullying</h2>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" >
            <img src="assets/picture/ei.jpg" class="img-fluid" style="border-radius: 50px" alt="">
        </div>
        </div>
    </div>

</section><!-- End Hero -->



<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">

    <div class="row">
        <div class="col-lg-6" data-aos="zoom-in">
        <img src="assets/picture/sslogo.png" style="height: 350px;" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
        <div class="content pt-4 pt-lg-0">
            <h3>About Us</h3>
            <p class="fst-italic">
            SafeSpeak merupakan media edukasi dan bantuan bagi korban pelecehan seksual dan bullying dengan menerapkan emotional intelligence dan tracking position
            </p>
            <ul>
            <li><i class="bi bi-check-circle"></i> Tracking Position</li>
            <li><i class="bi bi-check-circle"></i> Edukasi</li>
            <li><i class="bi bi-check-circle"></i> Panduan</li>
            <li><i class="bi bi-check-circle"></i> Forum</li>

            </ul>
            <p>
            Kami hadir untuk menjadi media edukasi bagi para pelaku maupun korban pelecehan seksual serta membantu menjaga dan meningkatkan keamanan yang lebih baik bagi setiap orang
            </p>
        </div>
        </div>
    </div>

    </div>
</section><!-- End About Section -->

    <!-- ======= Cta Section ======= -->
    {{-- <section id="cta" class="cta">
        <div class="container">

          <div class="row" data-aos="zoom-in">
            <div class="col-lg-9 text-center text-lg-start">
              <h3>Call To Action</h3>
              <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
              <a class="cta-btn align-middle" href="#">Call To Action</a>
            </div>
          </div>

        </div>
      </section><!-- End Cta Section --> --}}

<!-- ======= Team Section ======= -->
<section id="team" class="team">
    <div class="container">

    <div class="section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Penyusun Website SafeSpeak</p>
    </div>

    <div class="row">

        <div class="col-lg-4 col-md-6">
        <div class="member" data-aos="zoom-in">
            <div class="pic"><img src="assets/img/team/azarya.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
            <h4>Azarya Aditya Krisna Moeljono</h4>
            <span>Mahasiswa Teknik Informatika Angkatan 22</span>
            <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-github"></i></a>
            </div>
            </div>
        </div>
        </div>

        <div class="col-lg-4 col-md-6">
        <div class="member" data-aos="zoom-in" data-aos-delay="100">
            <div class="pic"><img src="assets/img/team/aurel.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
            <h4>Dika Aurelya Aleandra Taroreh</h4>
            <span>Mahasiswa Teknik Informatika Angkatan 22</span>
            <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href="{{ url('https://www.instagram.com/orltrh/') }}"><i class="bi bi-instagram"></i></a>
                <a href="{{ url('https://github.com/orltrh') }}"><i class="bi bi-github"></i></a>
            </div>
            </div>
        </div>
        </div>

        <div class="col-lg-4 col-md-6">
        <div class="member" data-aos="zoom-in" data-aos-delay="200">
            <div class="pic"><img src="assets/img/team/abidzar.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
            <h4>Abidzar Ulil Abshar</h4>
            <span>Mahasiswa Teknik Informatika Angkatan 22</span>
            <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-github"></i></a>
            </div>
            </div>
        </div>
        </div>

    </div>

    </div>
</section><!-- End Team Section -->
@endsection
