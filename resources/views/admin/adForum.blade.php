@extends('layout.admin')
@section('title', 'Forum')
@section('menuadForum', 'active')

@section('content')
@parent
<section style="height:100vh; overflow-y: auto; " id="hero">
  <div class="container ">
    <div class="row">
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">

          <div class="carousel-item active">
            <div class="row p-3">
              <div class="col-lg-6 col-md-12" style="">
                <img src="{{ url('assets/picture/3.jpg') }}" class="card-img-top rounded object-fit:inherit" alt="...">
              </div>
                <div class="card-body col-md-6 d-flex" style="background-color:antiquewhite; border-radius:10px !important;">
                  <div class="card-body">
                    <p class="fw-bolder"style="padding-top: 62px;">University Forum</p>
                    <p class="fw-medium" style="padding-top: 75px; padding-right:50px; padding-left:50px;">Bergabunglah dengan forum universitas kami yang peduli terhadap penanganan kasus pelecehan seksual dan bullying. Diskusikan isu-isu yang relevan, berbagi pengalaman, dan temukan solusi bersama untuk menciptakan lingkungan kampus yang aman dan inklusif.</p>
                    <div class="detail pt-3 pb-5">
                      <div class="pt-3"><a href="{{ url('https://t.me/+PDh0eb7hInVhMzE1') }}" class="btn btn-outline-danger">Gabung Sekarang</a></div>
                  </div>
                  </div>

                </div>

            </div>
          </div>

          <div class="carousel-item">
            <div class="row p-3">
              <div class="col-lg-6 col-md-12" style="">
                <img src="{{ url('assets/picture/2.jpg') }}" class="card-img-top rounded object-fit:inherit" alt="...">
              </div>
              <div class="card-body col-md-6 d-flex" style="background-color:rgb(90, 165, 223); border-radius:10px !important;">
                <div class="card-body" >
                  <p class="fw-bolder" style="padding-top: 62px;">Corporate Forum</p>
                  <p class="fw-medium" style="padding-top: 75px; padding-right:50px; padding-left:50px;">Bergabunglah dengan forum industri kami yang peduli terhadap penanganan kasus pelecehan seksual dan bullying. Diskusikan isu-isu yang relevan, berbagi pengalaman, dan temukan solusi bersama untuk menciptakan lingkungan kerja yang aman dan inklusif.</p>
                  <div class="detail pt-3 pb-5">
                  <div class="pt-3"><a href="{{ url('https://t.me/+Jy4OXRoin09kNTE1') }}" class="btn btn-outline-primary">Gabung Sekarang</a></div>
              </div>
                </div>
              </div>

            </div>
          </div>

          <div class="carousel-item">
            <div class="row p-3">
              <div class="col-lg-6 col-md-12" style="">
                <img src="{{ url('assets/picture/1.jpg') }}" class="card-img-top rounded object-fit:inherit" alt="...">
              </div>
              <div class="card-body col-md-6 d-flex" style="background-color:rgb(221, 116, 67); border-radius:10px !important;">
                <div class="card-body">
                <p class="fw-bolder" style="padding-top: 62px;">Public Forum</p>
                <p class="fw-medium" style="padding-top: 75px; padding-right:50px; padding-left:50px;">Bergabunglah dengan forum publik kami yang peduli terhadap penanganan kasus pelecehan seksual dan bullying. Diskusikan isu-isu yang relevan, berbagi pengalaman, dan temukan solusi bersama untuk menciptakan lingkungan yang aman dan inklusif.</p>
                <div class="detail pt-3 pb-5">
                  <div class="pt-3"><a href="{{ url('https://t.me/+7_KM4HoVVccxNWY1') }}" class="btn btn-outline-warning">Gabung Sekarang</a></div>
              </div>
                </div>
              </div>
            </div>
          </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>

<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="79922e2e-962d-4026-afde-df91e60ac883";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
</section>
<p class="text-end" style="padding-right:10px !important;">Ingin berkonsultasi? Klil tombol di bawah</p>
@endsection

