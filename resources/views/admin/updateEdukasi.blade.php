@extends('layout.master')
@section('title', 'Edukasi')
@section('menuEdukasi', 'active')

@section('content')
@parent
<section id="edukasi" style="height:76.5vh; padding-top: 50px">
    <div class="container">
        <div class="row" style="padding-top: 100px">
            <div class="col-sm-4 mb-3 mb-sm-0">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Kesadaran Diri</h5>
                    <p class="card-text">Self-Awareness</p>
                    <a href="#" class="btn btn-primary">Let's Go</a>
                </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Pengaturan Emosi</h5>
                    <p class="card-text">Self-Regulation</p>
                    <a href="#" class="btn btn-primary">Let's Go</a>
                </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Motivasi Diri</h5>
                    <p class="card-text">Self-Motivation</p>
                    <a href="#" class="btn btn-primary">Let's Go</a>
                </div>
                </div>
            </div>

        </div>
        <div class="row" style="padding-top: 100px">
            <div class="col-sm-4">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Empati</h5>
                    <p class="card-text">Empathy</p>
                    <a href="#" class="btn btn-primary">Let's Go</a>
                </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Keterampilan Sosial</h5>
                    <p class="card-text">Sosial Skills</p>
                    <a href="#" class="btn btn-primary">Let's Go</a>
                </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Penyesuaian Diri</h5>
                    <p class="card-text">Self-Adjustment</p>
                    <a href="#" class="btn btn-primary">Let's Go</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container mt-3 d-flex justify-content-end">
        <div class="row">
            <div class="col">
                <button href="#" class="btn btn-light" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Update Konten">
                    <i class="bi bi-patch-plus-fill"></i>
                </button>
            </div>
        </div>
    </div>
</section>
@endsection
