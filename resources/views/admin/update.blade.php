@extends('layout.admin')
@section('title', 'Update Data')
@section('menuIndex', 'active')

@section('content')
<section>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Update Data</div>
          <div class="card-body">
            <form action="{{ route('admins.update', $admin->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" value="{{ $admin->kategori }}" required>
              </div>
              <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ $admin->judul }}" required>
              </div>
              <div class="form-group">
                <label for="konten">Konten</label>
                <textarea class="form-control" id="konten" name="konten" rows="5" required>{{ $admin->konten }}</textarea>
              </div>
              <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar">
              </div>
              <div class="form-group">
                <img src="{{ asset('images/' . $admin->gambar) }}" alt="Admin Image" style="width: 200px; height: auto;">
              </div>
              <button type="submit" class="btn btn-primary">Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
