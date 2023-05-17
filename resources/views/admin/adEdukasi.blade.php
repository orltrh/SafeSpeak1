@extends('layout.admin')
@section('title', 'Edukasi')
@section('menuIndex', 'active')

@section('content')
<!-- <section id="edukasi" style="height:100vh; padding-top: 50px">
    <div class="container">
        <div class="row" style="padding-top: 100px">
            <div class="col-sm-4 mb-3 mb-sm-0 d-flex justify-content-center">
                <div class="book">
                    <div><a href="admin-adselfawareness" class="btn btn-primary">Let's Learn</a></div>
                    <div class="cover">
                        <p>Self-Awareness</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 d-flex justify-content-center">
                <div class="book">
                    <a href="admin-adselfregulation" class="btn btn-primary">Let's Learn</a>
                    <div class="cover">
                        <p>Self-Regulation</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 d-flex justify-content-center">
                <div class="book">
                    <a href="admin-adselfmotivation" class="btn btn-primary">Let's Learn</a>
                    <div class="cover">
                        <p>Self-Motivation</p>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row" style="padding-top: 100px">
            <div class="col-sm-4 d-flex justify-content-center">
                <div class="book">
                    <a href="admin-adempathy" class="btn btn-primary">Let's Learn</a>
                    <div class="cover">
                        <p>Empathy</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 d-flex justify-content-center">
                <div class="book">
                    <a href="admin-adsocialskills" class="btn btn-primary">Let's Learn</a>
                    <div class="cover">
                        <p>Social Skills</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 d-flex justify-content-center">
                <div class="book">
                    <a href="admin-adselfadjustment" class="btn btn-primary">Let's Learn</a>
                    <div class="cover">
                        <p>Self-Adjustment</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- <section>
    <div class="container vh-100">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                <img src="assets/img/team/abidzar.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p4 class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p4>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="card" style="width: 18rem;">
                <img src="assets/img/team/abidzar.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p4 class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p4>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
            </div>
        </div>
  </section> -->
<div class="main">
  <div class="container p-5 text-center">
      <div class="row">
          @foreach ($articles as $article)
          <div class="col-md-4">
              <div class="card" style="width: 18rem;">
                  <img src="{{ asset('images/' . $article->image) }}" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">{{ $article->title }}</h5>
                      <p class="card-text">{{ $article->content }}</p>
                      <a href="#" class="btn btn-primary">Read More</a>
                  </div>
              </div>
          </div>
          @endforeach
      </div>
  </div>
</div>

@endsection
