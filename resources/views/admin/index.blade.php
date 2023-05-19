@extends('layout.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                @foreach ($admins as $admin)
                    <div class="card mb-3">
                        <img src="{{ asset('images/' . $admin->gambar) }}" class="card-img-top" alt="Admin Image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $admin->judul }}</h5>
                            <p class="card-text">{{ $admin->konten }}</p>
                            <a href="{{ route('admins.show', $admin->id) }}" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                @endforeach
                {{ $admins->links() }}
            </div>
        </div>
    </div>
@endsection
