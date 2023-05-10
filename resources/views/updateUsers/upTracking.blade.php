@extends('layout.updateUsers')
@section('title', 'Tracking Location')
@section('menuTrack', 'active')

@section('content')
<section style="height:87.5vh; padding-top: 200px">
    {{-- <div class="container">
        <div class="col-3">
            <form class="d-flex" role="search">
                <input id="searchInput" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div> --}}
    <div class="container mt-3">
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

        // Route Machine Leaflet
        L.marker([-7.9933793, 112.6079458]).addTo(map);


        // Membuat polyline untuk menunjukkan rute perjalanan pengguna
        var polyline = L.polyline([], {color: 'red'}).addTo(map);


        // Fungsi untuk update marker user
        function updateMarker(latlng){
            marker.setLatLng(latlng);
            console.log("Latitude:", latlng.lat, "Longitude:", latlng.lng); // menampilkan data lokasi di console log
        }

        // Fungsi untuk menambahkan titik pada polyline
        function addLatLng(latlng) {
            polyline.addLatLng(latlng);
        }

        // Menampilkan marker dari database
        @foreach($trackings as $tracking)
            L.marker([{{ $tracking->latitude }}, {{ $tracking->longitude }}]).addTo(map).bindPopup("<b>{{ $tracking->username }}</b><br>{{ $tracking->email }}");
        @endforeach

        // Fungsi untuk mendapatkan posisi pengguna dan memperbarui marker dan polyline
        function updatePosition() {
            map.locate({setView: true, maxZoom:18}); // menonaktifkan setView agar tidak mengganggu tampilan
        }

        // Memperbarui posisi pengguna setiap 5 detik
        setInterval(updatePosition, 5000);

        // Menambahkan event listener untuk memperbarui posisi pengguna, marker, dan polyline ketika posisi berubah
        map.on('locationfound', function(e){
            var latlng = e.latlng;
            updateMarker(latlng);
            addLatLng(latlng);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            });

            $.ajax({
                url: "/uptrackingposition",
                method: "GET",
                data: {
                    latitude: latlng.lat,
                    longitude: latlng.lng,
                },
                success: function(response) {
                    console.log(response);
                },
                error: function(error) {
                    alert("error" + error);
                }
            });
        });

    </script>

</section>
@endsection

