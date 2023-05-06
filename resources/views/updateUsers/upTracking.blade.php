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
        googleStreets = L.tileLayer('http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}',{
            maxZoom: 20,
            subdomains:['mt0','mt1','mt2','mt3']
        }).addTo(map);

        // Menampilkan marker
        var marker = L.marker([-7.9933793, 112.6079458]).addTo(map);
        marker.bindPopup("<b>Posisi Anda</b><br>Anda berada di sini.").openPopup();
    </script>

</section>
@endsection
