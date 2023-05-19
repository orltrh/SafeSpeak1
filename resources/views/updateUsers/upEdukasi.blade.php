@extends('layout.updateUsers')
@section('title', 'Edukasi')
@section('menuEdukasi', 'active')

@section('content')
<section>
  <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        @foreach ($admins as $index => $admin)
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}">
            <span><i class="fas fa-circle"></i></span> <!-- Menambahkan ikon pada span -->
          </li>
        @endforeach
      </ol>
      <div class="carousel-inner">
        @foreach ($admins as $index => $admin)
          <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
            <div class="row">
                <div class="col-md-6">
                  <img src="{{ asset('images/' . $admin->gambar) }}" class="card-img-top" alt="Admin Image">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                      <p class="card-title">{{ $admin->judul }}</p>
                      <p class="card-text">{{ $admin->konten }}</p>
                      <a href="{{ route('admins.show', $admin->id) }}" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        @endforeach
      </div>

      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
  <span class="visually-hidden">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
  <span class="visually-hidden">Next</span>
</a>

      </a>
    </div>
  </div>
</section>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Inisialisasi carousel
    var carousel = new bootstrap.Carousel(document.querySelector("#carouselExampleIndicators"), {
      interval: 5000, // Waktu interval slide (dalam milidetik). Ubah sesuai kebutuhan.
      wrap: true // Mengaktifkan looping carousel
    });
  });
</script>
@endsection

