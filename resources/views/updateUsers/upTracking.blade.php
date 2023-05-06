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

        // Membuat polyline untuk menunjukkan rute perjalanan pengguna
        var polyline = L.polyline([], {color: 'red'}).addTo(map);

        // Fungsi untuk update marker user
        function updateMarker(latlng){
            marker.setLatLng(latlng);
            console.log("Latitude:", latlng.lat, "Longitude:", latlng.lng); // menampilkan data lokasi di console log
        }

        // // Fungsi untuk menambahkan titik pada polyline
        // function addLatLng(latlng) {
        //     polyline.addLatLng(latlng);
        // }

        // Fungsi untuk mendapatkan posisi pengguna dan memperbarui marker dan polyline
        function updatePosition() {
            map.locate({setView: false, maxZoom:18}); // menonaktifkan setView agar tidak mengganggu tampilan
        }

        // Memperbarui posisi pengguna setiap 3 detik
        setInterval(updatePosition, 3000);

        // Menambahkan event listener untuk memperbarui posisi pengguna, marker, dan polyline ketika posisi berubah
        map.on('locationfound', function(e){
            var latlng = e.latlng;
            updateMarker(latlng);
            addLatLng(latlng);
        });
    </script>

</section>
@endsection
