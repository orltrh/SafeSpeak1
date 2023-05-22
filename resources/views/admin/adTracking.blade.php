@extends('layout.admin')
@section('title', 'Tracking Location')
@section('menuadTrack', 'active')

@section('head')
    {{-- Template Routing Machine Leaflet --}}
    <link rel="stylesheet" href="{{ url('assets/js/leaflet-routing-machine/dist/leaflet-routing-machine.css') }}" />

    {{-- Template Leaflet Maps --}}
    <link rel="stylesheet" href="{{ url('https://unpkg.com/leaflet@1.9.3/dist/leaflet.css') }}"
    integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
    crossorigin=""/>

    {{-- Template CSS Leaflet Maps --}}
    <style>
        #map { height: 600px; }

        #map-container {
            height: 610px;
            width: 100%;
            position: static;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(13, 80, 174, 0.2); /* Menambahkan bayangan */
            background-clip: border-box;
            border-radius: 10px;
        }
    </style>

    {{-- Template Boostrap --}}
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">

    {{-- Template Leaflet CSS JS --}}
    <script src="{{ url('https://unpkg.com/leaflet@1.9.3/dist/leaflet.js') }}"
    integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
    crossorigin=""></script>

    {{-- Template Routing Machine Leaflet CSS JS --}}
    <script src="{{ url('assets/js/leaflet-routing-machine/dist/leaflet-routing-machine.js') }}"></script>

    {{-- Template Geocoder --}}
    <script src="{{ url('assets/js/leaflet-routing-machine/examples/Control.Geocoder.js') }}"></script>

    {{-- Template Jquery --}}
    <script src="{{ url('https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js') }}"></script>

@section('content')
<section >
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <form class="d-flex" role="search" id="searchForm">
                    @csrf
                    <input id="searchInput" class="form-control me-2" type="search" placeholder="Cari Username" name="username">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            <div class="col-lg-3 col-md-3">
                <form action="updateMarkerPosition" method="POST">
                    @csrf
                    <input type="hidden" name="username" id="username" placeholder="Username">
                    <input type="hidden" name="latitude" id="latitude" placeholder="Latitude">
                    <input type="hidden" name="longitude" id="longitude" placeholder="Longitude">
                    <input class="btn btn-outline-info" type="submit" value="Perbarui Posisi" id="submit">
                </form>
            </div>
        </div>
        <div>
            <!-- Trigger modal -->
            <label for="panduanTracking" class="label-agree-term"><span><span></span></span>Sebelum Menggunakan Tracking Position Lihat <a type="button" class="term-service" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Panduan Tracking Posititon</a></label>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Panduan Menggunakan Tracking Position</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        1. Sebelum Menggunakan, pastikan Anda sudah memperbarui posisi Anda dengan cara klik tombol "Perbarui Posisi".<br>
                        2. Untuk melihat keseluruhan peta, klik dan seret peta.<br>
                        3. Untuk mencari lokasi pengguna lain, masukkan username pengguna yang ingin dicari pada kolom pencarian.<br>
                        4. Untuk melihat rute perjalanan, klik tombol "Pergi Ke Sini" pada popup marker pengguna yang ingin dituju.<br>
                        5. Untuk menghubungi pengguna, klik tombol "Hubungi Saya" pada popup marker pengguna yang ingin dihubungi.<br>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Saya Mengerti</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container mt-3" id="map-container">
        <div id="map"></div>
    </div>


    <script>
        // Menampilkan maps
        var map = L.map('map').setView([-7.9933885, 112.6079343], 15);
        // Tambahkan var untuk Auth username user
        var nameUser = "{{ Auth::user()->username }}";


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
            document.getElementById("username").value = nameUser; // modifikasi ketika login
            // document.getElementById("username").value = "orltrh"; // modifikasi
            document.getElementById("latitude").value = latlng.lat;
            document.getElementById("longitude").value = latlng.lng;
        }

        // menampilkan marker dari database ketika sudah login

        // menampilkan marker dari database
        @foreach($trackings as $tracking)
        if ("{{ $tracking->username }}" == nameUser){ // modifikasi ketika login
        // if ("{{ $tracking->username }}" == "orltrh"){ // modifikasi
                L.marker([{{ $tracking->latitude }}, {{ $tracking->longitude }}])
                    .addTo(map)
                    .bindPopup(
                        "<b>{{ $tracking->username }}</b><br><br><button class='btn btn-outline-primary' onclick='return keSini(" + {{ $tracking->latitude }} + ", " + {{ $tracking->longitude }} + ")'>Pergi Ke Sini</button><br><br><button data-phone=" + {{ $tracking->number }} + " onclick='redirectWA(this)' class='btn btn-outline-success'>Hubungi Saya</button>")
                    .openPopup();
                map.panTo(new L.LatLng({{ $tracking->latitude }}, {{ $tracking->longitude }}));
            }
        @endforeach

        // Fungsi untuk mendapatkan posisi pengguna dan memperbarui marker dan polyline
        function updatePosition() {
            map.locate({setView: false, maxZoom:18}); // menonaktifkan setView agar tidak mengganggu tampilan
        }

        // Fungsi untuk redirect ke WA
        function redirectWA(e) {
            var phone = e.getAttribute("data-phone");
            var url = "https://api.whatsapp.com/send?phone=" + phone;
            window.open(url,'_blank');
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
                            .bindPopup("<b>" + user.username + "</b>" + "<br>" + "<br>" + "<button class='btn btn-outline-primary' onclick='return keSini(" + user.latitude + ", " + user.longitude + ")'>Pergi Ke Sini</button><br><br><button data-phone=" +  user.number + " onclick='redirectWA(this)' class='btn btn-outline-success'>Hubungi Saya</button>")
                            .openPopup();
                            map.panTo(new L.LatLng(user.latitude, user.longitude));
;
                    }
                    // Zoom and center marker
                    // map.setView([response[0].latitude, response[0].longitude], 15);


                },
                error: function(error) {
                    console.log(error);
                }
            });
        });

        // Route Machine Leaflet
        @foreach ($trackings as $tracking)
        if ("{{ $tracking->username }}" == nameUser){ // modifikasi ketika login
        // if ("{{ $tracking->username }}" == "orltrh"){ // modifikasi
            var control = L.Routing.control({
                waypoints: [
                    L.latLng([{{ $tracking->latitude }}, {{ $tracking->longitude }}]), // Diganti oleh posisi user sekarang
                    L.latLng([{{ $tracking->latitude }}, {{ $tracking->longitude }}]) // DIganti oleh posisi user sekarang
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
        }
        @endforeach

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

