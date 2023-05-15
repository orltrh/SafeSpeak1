@extends('layout.master')
@section('title', 'Tracking Location')
@section('menuTrack', 'active')

{{-- onload = jangan dihapus untuk menampilkan latitude dan longitude secara otomatis --}}
@section('body')
<body onload="getLocation()">

@section('content')
<section style="height:87.5vh; padding-top: 200px">
    <div class="container">
        <h1>Tracking Location</h1>
        <hr>
        <form action="{{ url('create-track') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror"
                name="username" id="username" value="{{ old('username') }}" placeholder="Masukkan Username">
                @error('username')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror"
                name="email" id="email" value="{{ old('email') }}" placeholder="Masukkan Alamat Email">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <input type="text" class="form-control" name="latitude" id="latitude" placeholder="Masukkan Latitude">
                <input type="text" class="form-control" name="longitude" id="longitude" placeholder="Masukkan Longitude">
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
</section>
<script type="text/javascript">
    function getLocation(){
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(showPosition, showError);
        }else{
            alert("Browser anda tidak mendukung geolocation");
        }
    }
    function showPosition(position){
        document.getElementById('latitude').value = position.coords.latitude;
        document.getElementById('longitude').value = position.coords.longitude;
    }
    function showError(error){
        switch(error.code){
            case error.PERMISSION_DENIED:
                alert("User tidak mengizinkan akses lokasi");
                break;
            case error.POSITION_UNAVAILABLE:
                alert("Lokasi tidak tersedia");
                break;
            case error.TIMEOUT:
                alert("Waktu permintaan habis");
                break;
            case error.UNKNOWN_ERROR:
                alert("Terjadi kesalahan");
                break;
        }
    }
</script>
@endsection
