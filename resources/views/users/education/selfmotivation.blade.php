@extends('layout.master')
@section('title', 'Self Motivation')


@section('content')
@parent
<section style="height:100vh; padding-top: 100px">
    <div class="container">
        <div class="card">
            <div class="card-header">
                Self Motivation
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>{{ $selfmotivation ?? 'Tidak ada data yang tersedia untuk ditampilkan.' }}</p>
                  </blockquote>
            </div>
          </div>
      
    </div>
</section>
@endsection


