@extends('layout.updateUsers')
@section('title', 'Home')
@section('menuIndex', 'active')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero">

    <div class="container">
        <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
            <div>
            <h1>SafeSpeaks</h1>
            <h2> Media Edukasi dan Bantuan bagi Korban Pelecehan Seksual dan Bullying</h2>
            <a href="#about" class="btn-get-started scrollto">Mulai</a>
            </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" >
            <img src="{{ url('assets/picture/ei.png') }}" class="img-fluid" style="border-radius: 50px" alt="">
        </div>
        </div>
    </div>

</section><!-- End Hero -->

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">

    <div class="row">
        <div class="col-lg-6" data-aos="zoom-in">
        <img src="{{ url('assets/picture/sslogo.jpg') }}" style="height: 450px; border-radius: 15px;" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
        <div class="content pt-4 pt-lg-0">
            <h3>Tentang Kami</h3>
            <div style="font-size: 20px" class="fst-italic">
            SafeSpeaks merupakan media edukasi dan bantuan bagi korban pelecehan seksual dan bullying dengan menerapkan emotional intelligence dan tracking position
            </div>
            <br>
            <div style="font-size: 20px">
                SafeSpeaks dilengkapi oleh beberapa fitur seperti:
            </div>
            <ul>
            <li><i class="bi bi-check-circle"></i> Tracking Position</li>
            <li><i class="bi bi-check-circle"></i> Edukasi</li>
            <li><i class="bi bi-check-circle"></i> Panduan</li>
            <li><i class="bi bi-check-circle"></i> Forum</li>

            </ul>
            <div style="font-size: 20px">
                Temukan panduan lengkap mengenai website SafeSpeaks dengan sekali sentuhan pada <a href="{{ route('panduan') }}">link ini</a>
            </div>
        </div>
        </div>
    </div>

    </div>
</section><!-- End About Section -->


<!-- ======= Cta Section ======= -->
<section id="cta" class="cta mt-5">
    <div class="container">

        <div class="row" data-aos="zoom-in">
        <div class="col-lg-9 text-center text-lg-start">
            <h3>SafeSpeaks</h3>
            <p>
                SafeSpeaks, tempat tersembunyi bagi jiwa yang terluka. Kami hadir sebagai pelindung bagi mereka yang menjadi korban bullying dan pelecehan seksual. Seperti pelangi setelah hujan, kami ingin mempersembahkan cahaya dan kehangatan bagi mereka yang merasa terjebak dalam kegelapan. Bersama SafeSpeaks, mari kita bangkit, saling mendukung, dan membentuk dunia di mana suara mereka dihormati dan diperdengarkan. Kita tidak pernah sendiri, karena di sini, kita adalah satu komunitas yang kuat.
            </p>
        </div>
        <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="{{ route('register') }}">Registrasi Sekarang</a>
        </div>
        </div>

    </div>
</section><!-- End Cta Section -->

<!-- ======= Team Section ======= -->
<section id="team" class="team mt-5">
    <div class="container">

    <div class="section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Penyusun Website SafeSpeaks</p>
    </div>

    <div class="row">

        <div class="col-lg-4 col-md-12">
        <div class="member" data-aos="zoom-in">
            <div class="pic"><img src="{{ url('assets/img/team/azarya.jpg') }}" class="img-fluid" alt=""></div>
            <div class="member-info">
            <h4>Azarya Aditya Krisna Moeljono</h4>
            <span>Mahasiswa Teknik Informatika Angkatan 22</span>
            <div class="social">
                <a href="{{ url('https://www.instagram.com/azarya.aditya/?hl=id') }}"><i class="bi bi-instagram"></i></a>
                <a href="{{ url('https://github.com/azryadtykrsnmljno') }}"><i class="bi bi-github"></i></a>
            </div>
            </div>
        </div>
        </div>

        <div class="col-lg-4 col-md-12">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
                <div class="pic"><img src="{{ url('assets/img/team/aurel.jpg') }}" style="width: 600px;" class="img-fluid" alt=""></div>
                <div class="member-info">
                <h4>Dika Aurelya Aleandra Taroreh</h4>
                <span>Mahasiswa Teknik Informatika Angkatan 22</span>
                <div class="social">
                    <a href="{{ url('https://www.instagram.com/orltrh/') }}"><i class="bi bi-instagram"></i></a>
                    <a href="{{ url('https://github.com/orltrh') }}"><i class="bi bi-github"></i></a>
                </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-12">
        <div class="member" data-aos="zoom-in" data-aos-delay="200">
            <div class="pic"><img src="{{ url('assets/img/team/abidzar.png') }}" class="img-fluid" alt=""></div>
            <div class="member-info">
            <h4>Abidzar Ulil Abshar</h4>
            <span>Mahasiswa Teknik Informatika Angkatan 22</span>
            <div class="social">
                <a href="{{ url('https://instagram.com/abidzar27_?igshid=OTk0YzhjMDVlZA==') }}"><i class="bi bi-instagram"></i></a>
                <a href="{{ url('https://github.com/UlilAbshar99') }}"><i class="bi bi-github"></i></a>
            </div>
            </div>
        </div>
        </div>

    </div>

    </div>
</section><!-- End Team Section -->
@endsection
