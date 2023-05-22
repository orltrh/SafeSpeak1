@extends('layout.admin')
@section('title', 'Self Awareness')

<style>
  .card {
    width: 190px;
    height: 274px;
    background: white;
    padding: .4em;
    border-radius: 6px;
  }

  .card-image {
    background-color: rgb(236, 236, 236);
    border-radius: 6px 6px 0 0;
  }

  .card-image:hover {
    transform: scale(0.98);
  }

  .category {
    text-transform: uppercase;
    font-size: 0.7em;
    font-weight: 600;
    color: rgb(63, 121, 230);
    padding: 10px 7px 0;
  }

  .category:hover {
    cursor: pointer;
  }

  .heading {
    font-weight: 600;
    color: rgb(88, 87, 87);
    padding: 7px;
  }

  .heading:hover {
    cursor: pointer;
  }

  .author {
    color: gray;
    font-weight: 400;
    font-size: 11px;
    padding-top: 20px;
  }

  .name {
    font-weight: 600;
  }

  .name:hover {
    cursor: pointer;
  }

  @media (max-width: 767.98px) {
    .row-cols-3 {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: start;
      -ms-flex-pack: start;
      justify-content: flex-start;
      -webkit-box-align: start;
      -ms-flex-align: start;
      align-items: flex-start;
    }

    .card {
      width: 100%;
      height: auto;
      margin-bottom: 20px;
    }
  }

  @media (min-width: 768px) and (max-width: 991.98px) {
    .row-cols-3 {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: start;
      -ms-flex-pack: start;
      justify-content: flex-start;
      -webkit-box-align: start;
      -ms-flex-align: start;
      align-items: flex-start;
    }

    .card {
      width: 100%;
      height: auto;
      margin-bottom: 20px;
    }
  }

  @media (min-width: 992px) and (max-width: 1199.98px) {
    .row-cols-3 {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: start;
      -ms-flex-pack: start;
      justify-content: flex-start;
      -webkit-box-align: start;
      -ms-flex-align: start;
      align-items: flex-start;
    }

    .card {
      width: 100%;
      height: auto;
      margin-bottom: 20px;
    }
  }

</style>
@section('content')
@parent
<section style="height:100vh; overflow-y: auto;">
  <div class="container">
    <div class="row row-cols-3" style="padding-left: 50px;">
      @foreach ($data as $item)
      <div class="" style="padding-top: 200px;">
        <div class="card" style="width: 300px; height: 400px;">
          <div class="card-image"></div>
          <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top rounded" alt="..." style="width: 285px; height: 200px;">
          <div class="category">Illustration</div>
          <div class="heading">
            {{ $item->judul }}
            <div>
              <a href="{{ route('admins.adMateri', ['data' => $item->judul]) }}" class="btn btn-outline-primary">{{ $item->materi }}</a>
            </div>

            <div class="pt-3">
              <div style="display: inline-block; margin-right: 10px;">
                <a href="{{ route('admins.updateMateri', ['data' => $item->judul]) }}" class="btn btn-outline-success">Update</a>
              </div>
              <div style="display: inline-block;">
                <form method="POSt" action="{{ route('admins.deleteMateri', ['data' => $item->judul]) }}">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-outline-danger">Delete</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection
