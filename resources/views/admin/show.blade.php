@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <img src="{{ asset('images/' . $admin->gambar) }}" class="card-img-top" alt="Admin Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $admin->judul }}</h5>
                        <p class="card-text">{{ $admin->konten }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
