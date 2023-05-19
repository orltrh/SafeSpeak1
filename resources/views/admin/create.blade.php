@extends('layout.admin')

@section('content')
    <h1>Create Artikel</h1>
    <section style="height:100vh; padding-top: 100px">
    <div class="container d-flex justify-content-center">
    <form action="{{ route('admins.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="kategori">Kategori</label>
            <input type="text" name="kategori" id="kategori" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="konten">Konten</label>
            <textarea name="konten" id="konten" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar" id="gambar" class="form-control-file" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
        </div>
    </div>
    </section>
@endsection
