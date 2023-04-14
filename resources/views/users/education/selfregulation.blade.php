@extends('layout.master')
@section('title', 'Self Regulation')

@section('content')
@parent
<section style="height:100vh; padding-top: 100px">
    <div class="container">
        <div class="card">
            <div class="card-header">
                Self Regulation
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>{{ $selfregulation ?? 'Tidak ada data yang tersedia untuk ditampilkan.' }}</p>
                </blockquote>
            </div>
          </div>
      
    </div>
</section>
@endsection


