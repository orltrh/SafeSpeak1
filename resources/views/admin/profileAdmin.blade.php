@extends('layout.admin')
@section('title', 'Profile')
@section('menuadProfile', 'active')

@section('content')
<section style="height: 100vh">
    <div class="container vh-90" style="padding-top: 30px;">
        <h1>Profile User</h1>
       <div class="card" style="width:">
        <div class="row">
          <div class="col col-md-4 d-flex" style="justify-content: center; align-items:center;">
            <div class="text-center pt-4">
              @if($user->image)
              <div class="pb-3">
                  <img class="rounded-circle img-fluid" src="{{ asset('storage/' . $user->image) }}" style="width: 200px; height: 200px; object-fit:initial;" alt="...">
              </div>
              @else
              <div class="pt-3">
                  <img class="rounded-circle" src="{{ url('/assets/img/clients/defaultFoto.jpg') }}" style="width: 200px; height: 200px; object-fit: cover;" alt="...">
              </div>
                  <div class="pt-2">
                    <div>Silakan masukkan gambar dengan ukuran 1:1</div>
                  </div>
              @endif
              <form action="{{ route('adfotoPost') }}" method="POST" enctype="multipart/form-data" >
                  @csrf
                  <div class="mb-5">
                      <label for="image" class="form-label"></label>
                      <input class="form-control form-control-sm @error('image') is-invalid @enderror" id="image" type="file" name="image">
                      @error('image')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group form-button">
                      </div>
                      <button type="submit" class="btn btn-outline-primary">Upload</button>
                    </form>
                    </div>
                    <div class="col-md-6">
                      <form action="{{ route('adfotoDelete') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </form>
                    </div>
                  </div>


          </div>

          </div>

            <div class="col-md-8">
              <div class="card-body" style=" padding-top:75px;">
                <h6>Username</h6>
                <p class="text-muted">{{ $username }}</p>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                    <h6>Email</h6>
                    <p class="text-muted">{{ $email }}</p>
                  </div>
                <hr class="mt-0 mb-4">
                  <div class="col-6 mb-3">
                    <h6>Phone</h6>
                    <p class="text-muted">{{ $number }}</p>
                  </div>
                  <hr class="mt-0 mb-4">
                </div>
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                  </div>
                </div>
              </div>
            </div>

        </div>
       </div>
    </div>
</section>
