@extends('layout.master')
@section('title', 'Forum')
@section('menuForum', 'active')

@section('content')
@parent
<section style="height:76.5vh; padding-top: 100px">
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
              Forum chat 1
            </div>
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            <div class="card-footer text-muted">
              2 days ago
            </div>
          </div>
    </div>
    <div class="container mt-5">
        <div class="card text-center">
            <div class="card-header">
              Forum chat 2
            </div>
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            <div class="card-footer text-muted">
              2 days ago
            </div>
          </div>
    </div>
</section>
@endsection

