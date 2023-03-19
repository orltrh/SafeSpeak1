@extends('layout.master')
@section('title', 'Home')
@section('menuIndex', 'active')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero">

    <div class="container">
        <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
            <div>
            <h1>SafeSpeak</h1>
            <h2> Media Edukasi dan Bantuan bagi Korban Pelecehan Seksual dan Bullying</h2>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
            <img src="assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
        </div>
    </div>

</section><!-- End Hero -->

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">

    <div class="row">
        <div class="col-lg-6" data-aos="zoom-in">
        <img src="assets/img/about.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
        <div class="content pt-4 pt-lg-0">
            <h3>Ketahui Lebih Lanjut Tentang SafeSpeak</h3>
            <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
            </p>
            <ul>
            <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperd</li>
            </ul>
            <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate tera noden carma palorp mades tera.
            </p>
        </div>
        </div>
    </div>

    </div>
</section><!-- End About Section -->

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
            <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
            <h4>Abidzar Ulil Abshar</h4>
            <span>Mahasiswa Teknik Informatika Angkatan 22</span>
            <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
            </div>
        </div>
        </div>

        <div class="col-lg-4 col-md-6">
        <div class="member" data-aos="zoom-in" data-aos-delay="100">
            <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
            <h4>Dika Aurelya Aleandra Taroreh</h4>
            <span>Mahasiswa Teknik Informatika Angkatan 22</span>
            <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
            </div>
        </div>
        </div>

        <div class="col-lg-4 col-md-6">
        <div class="member" data-aos="zoom-in" data-aos-delay="200">
            <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
            <h4>Azarya Aditya Krisna Moeljono</h4>
            <span>Mahasiswa Teknik Informatika Angkatan 22</span>
            <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
            </div>
        </div>
        </div>

    </div>

    </div>
</section><!-- End Team Section -->
@endsection
