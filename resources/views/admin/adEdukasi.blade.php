@extends('layout.app')
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
    <div class="container vh-150">
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

            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                <img src="assets/img/team/abidzar.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p4 class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p4>
                    <a href="" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                <img src="assets/img/team/abidzar.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p4 class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p4>
                    <a href="" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
            </div>

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
        </div>
        </div>
  </section> -->

  


    <div class="container">
        <h2>Carousel</h2>

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($carouselItems as $key => $item)
                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                        <a href="{{ route('admin.edu', $item->kategori) }}">
                            <img src="{{ asset('images/' . $item->gambar) }}" class="d-block w-100" alt="{{ $item->judul }}">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>{{ $item->kategori }}</h5>
                                <p>{{ $item->judul }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <h2>Categories</h2>

        <ul class="list-group">
            @foreach ($categories as $category)
                <li class="list-group-item"><a href="{{ route('admin.edu', $category) }}">{{ $category }}</a></li>
            @endforeach
        </ul>
    </div>
@endsection





