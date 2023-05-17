@extends('layout.updateUsers')
@section('title', 'Profile')
@section('menuProfie', 'active')

<style>
  .button {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 6px 12px;
  gap: 4px;
  height: 32px;
  width: 81px;
  border: none;
  background: #1b1b1cd0;
  border-radius: 20px;
  cursor: pointer;
}

.lable {
  line-height: 22px;
  font-size: 17px;
  color: #467dff;
  font-family: sans-serif;
  letter-spacing: 1px;
}

.button:hover {
  background: #1b1b1cea;
}

.button:hover .svg-icon {
  animation: rotate 1.3s linear infinite;
}

@keyframes rotate {
  0% {
    transform: rotate(0deg);
  }

  25% {
    transform: rotate(10deg);
  }

  50% {
    transform: rotate(0deg);
  }

  75% {
    transform: rotate(-10deg);
  }

  100% {
    transform: rotate(0deg);
  }
}
</style>

@section('content')
<section >
    <div class="container vh-90" style="padding-top: 170px;">
        <h1>Profile User</h1>
       <div class="card">
        <div class="row">
          <div class="col col-md-4 d-flex" style="justify-content: center; align-items:center;">
            <div class="text-center">
              @if($user->image)
                  <img class="rounded-circle" src="{{ asset('storage/' . $user->image) }}" style="width: 200px; height: 200px; object-fit: cover;" alt="...">
              @else
                  <img class="rounded-circle" src="/assets/img/clients/defaultFoto.jpg" style="width: 200px; height: 200px; object-fit: cover;" alt="..." alt="...">
              @endif
              <form action="{{ route('fotoPost') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3 pt-3">
                      <label for="image" class="form-label"></label>
                      <input class="form-control form-control-sm @error('image') is-invalid @enderror" id="image" type="file" name="image">
                      @error('image')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                  </div>
                  <div class="form-group form-button">
                  </div>
                  <button type="submit" class="btn btn-outline-primary">Upload</button>
              </form>
              <form action="{{ route('fotoDelete') }}" method="POST">
                @csrf
                @method('DELETE')
               
                <button type="submit" class="btn btn-outline-danger">Delete</button>
        
            </form>
          </div>
            
          </div>
          <div class="col col-8">
            <div class="col-md-8">
              <div class="card-body" style=" padding-top:75px; hei  ">
                <h6>Username</h6>
                <p class="text-muted">{{ $username }}</p>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col">
                    <h6>Email</h6>
                    <p class="text-muted">{{ $email }}</p>
                  </div>
                <hr class="mt-0 mb-4">
                <div>
                  <div class="col-6 mb-3">
                    <h6>Phone</h6>
                    <p class="text-muted">{{ $number }}</p>
                  </div>
                </div>
                </div>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">

                    
                  </div>
                  <div class="col-6 mb-3">
                   
                    
                  </div>
                </div>
                <div class="d-flex justify-content-start">
                  <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
       </div>
    </div>
</section>
