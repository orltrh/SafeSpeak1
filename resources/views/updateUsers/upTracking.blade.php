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

        // Mengaktifkan fitur geolocation
        map.locate({setView: true, maxZoom:18});

        // Menampilkan marker untuk menunjukkan lokasi user saat ini
        var marker = L.marker([0,0]).addTo(map);
        marker.bindPopup("<b>Posisi Anda</b><br>Anda berada di sini.").openPopup();

        // Fungsi untuk update marker user
        function onLocationFound(e){
            var latlng = e.latlng;
            marker.setLatLng(latlng);
        }

        // Update posisi user otomatis
        map.on('locationfound', onLocationFound);

        // menambahkan polyline untuk menunjukkan rute perjalanan pengguna sebelumnya
        var polyline = L.polyline([], {color: 'red'}).addTo(map);

        // Membuat fungsi untuk menambahkan titik pada polyline
        function addLatLng(e) {
        var latlng = e.latlng;
        polyline.addLatLng(latlng);
        }

        // Menambahkan event listener untuk menambahkan titik pada polyline ketika posisi berubah
        map.on('locationfound', addLatLng);

    </script>

</section>
@endsection
