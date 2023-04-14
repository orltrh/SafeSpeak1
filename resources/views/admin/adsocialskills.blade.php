@extends('layout.admin')
@section('title', 'socialskills')


@section('content')
@parent
<section style="height:100vh; padding-top: 100px">
    <div class="container">
        <div class="card">
            <div class="card-header">
                Social Skills
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>{{ $socialskills ?? 'Tidak ada data yang tersedia untuk ditampilkan.' }}</p>
                  </blockquote>
            </div>
          </div>
      
    </div>
</section>
@endsection


