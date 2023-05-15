@extends('layout.master')
@section('title', 'Tracking Location')
@section('menuTrack', 'active')

@section('content')
<section >
    <div class="container">
        <div class="row">
            <div class="col-3">
                <form class="d-flex" role="search" id="searchForm">
                    @csrf
                    <input id="searchInput" class="form-control me-2" type="search" placeholder="Search" name="username">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            <div class="col-3">
                <form action="updateMarkerPosition" method="POST">
                    @csrf
                    <input type="text" name="username" id="username" placeholder="Username">
                    <input type="text" name="latitude" id="latitude" placeholder="Latitude">
                    <input type="text" name="longitude" id="longitude" placeholder="Longitude">
                    <input type="submit" value="Update Posisi" id="submit">
                </form>
        </div>
        </div>
    <div class="container mt-3">
        <div id="map"></div>
    </div>


    <script>
        // Menampilkan maps
        var map = L.map('map').setView([-7.9933793, 112.6079458], 15);

        // // Menambahkan tile layer
        googleStreets = L.tileLayer('http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}',{
            maxZoom: 20,
            subdomains:['mt0','mt1','mt2','mt3']
        }).addTo(map);

        // Mengaktifkan fitur geolocation
        map.locate({setView: true, maxZoom:18});

        // Menampilkan marker untuk menunjukkan lokasi user saat ini
        var marker = L.marker([0,0]).addTo(map);
        marker.bindPopup("<b>Update Posisi Anda Sekarang</b><br>Anda berada di sini.").openPopup();

        // Membuat polyline untuk menunjukkan rute perjalanan pengguna
        var polyline = L.polyline([], {color: 'red'}).addTo(map);
        polyline.remove();

        // Fungsi untuk update marker user
        function updateMarker(latlng){
            marker.setLatLng(latlng);
            console.log("Latitude:", latlng.lat, "Longitude:", latlng.lng); // menampilkan data lokasi di console log
        }

        // Fungsi untuk menambahkan titik pada polyline
        function addLatLng(latlng) {
            polyline.addLatLng(latlng);
        }

        // Fungsi untuk memperbarui inputan latitude dan longitude
        function updateToDb(latlng) {
            document.getElementById("username").value = "orltrh"; // modifikasi
            document.getElementById("latitude").value = latlng.lat;
            document.getElementById("longitude").value = latlng.lng;
        }

        // Menampilkan marker dari database
        @foreach($trackings as $tracking)
        if ("{{ $tracking->username }}" == "orltrh"){ // modifikasi
                L.marker([{{ $tracking->latitude }}, {{ $tracking->longitude }}])
                    .addTo(map)
                    .bindPopup(
                        "<b>{{ $tracking->username }}</b><br>{{ $tracking->email }}<br><button class='btn btn-outline-primary' onclick='return keSini(" + {{ $tracking->latitude }} + ", " + {{ $tracking->longitude }} + ")'>Ke Sini</button>")
                    .openPopup();
                map.panTo(new L.LatLng({{ $tracking->latitude }}, {{ $tracking->longitude }}));
            }
        @endforeach

        // Fungsi untuk mendapatkan posisi pengguna dan memperbarui marker dan polyline
        function updatePosition() {
            map.locate({setView: false, maxZoom:18}); // menonaktifkan setView agar tidak mengganggu tampilan
        }

        // Memperbarui posisi pengguna setiap 5 detik
        setInterval(updatePosition, 5000);

        // Tambahkan event listener untuk form pencarian
        document.getElementById('searchForm').addEventListener('submit', function(e) {
            e.preventDefault(); // Mencegah submit form secara default
            var username = document.getElementById('searchInput').value;

            // Lakukan AJAX request ke route pencarian
            $.ajax({
                url: "{{ route('search.track') }}",
                type: "GET",
                data: {
                    username: username
                },
                success: function(response) {
                    // Tampilkan marker baru berdasarkan data response
                    for (var i = 0; i < response.length; i++) {
                        var user = response[i];
                        var marker = L.marker([user.latitude, user.longitude])
                            .addTo(map);
                        marker
                            .bindPopup("<b>" + user.username + "</b>" + "<br>" + user.email + "<br>" + "<button class='btn btn-outline-primary' onclick='return keSini(" + user.latitude + ", " + user.longitude + ")'>Ke Sini</button>")
                            .openPopup();
                            map.panTo(new L.LatLng(user.latitude, user.longitude));
;
                    }
                    // Zoom and center marker


                },
                error: function(error) {
                    console.log(error);
                }
            });
        });

        // Route Machine Leaflet
        var control = L.Routing.control({
            waypoints: [
                L.latLng(-7.9933793, 112.6079458),
                L.latLng(-7.9933793, 112.6079458)
            ],
            geocoder: L.Control.Geocoder.nominatim(),
            routeWhileDragging: true,
            reverseWaypoints: true,
            showAlternatives: true,
            altLineOptions: {
                styles: [
                    {color: 'black', opacity: 0.15, weight: 9},
                    {color: 'white', opacity: 0.8, weight: 6},
                    {color: 'blue', opacity: 0.5, weight: 2}
                ]
            }
        }).addTo(map);

        // fungsi untuk keSini
        function keSini(lat, lng){
            control.spliceWaypoints(control.getWaypoints().length - 1, 1, L.latLng(lat, lng));
            return false;
        };

        // Menambahkan event listener untuk memperbarui posisi pengguna, marker, dan polyline ketika posisi berubah
        map.on('locationfound', function(e){
            var latlng = e.latlng;
            updateMarker(latlng);
            addLatLng(latlng);
            updateToDb(latlng);
        });

    </script>

</section>
@endsection

