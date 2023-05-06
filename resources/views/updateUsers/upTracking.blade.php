@extends('layout.updateUsers')
@section('title', 'Tracking Location')
@section('menuTrack', 'active')

@section('content')
<section style="height:87.5vh; padding-top: 200px">
    <div class="container">
        <div id="map"></div>
    </div>


    <script>
        // Menampilkan maps
        var map = L.map('map').setView([-7.9933793, 112.6079458], 15);

        // Menambahkan tile layer
        googleStreets = L.tileLayer('http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}',{
            maxZoom: 20,
            subdomains:['mt0','mt1','mt2','mt3']
        }).addTo(map);


        // Mengambil titik
        getLocation();
        setInterval(() => {
            getLocation();
        }, 2000);
        function getLocation(){
            if(navigator.geolocation){
                navigator.geolocation.getCurrentPosition(showPosition);
            } else{
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        // Menampilkan posisi
        function showPosition(position){
            console.log('Route Sekarang',position.coords.latitude,position.coords.longitude)
        }
    </script>

</section>
@endsection
