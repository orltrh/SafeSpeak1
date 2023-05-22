@extends('layout.loginregister')
@section('title', 'Sign Up')

@section('head')

{{-- Icon --}}
<link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css') }}">

{{-- Template Bootstrap --}}
<link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
<script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
<style>
    .password-field {
    display: flex;
    align-items: center;
    flex-direction: c;
    }
</style>

@section('body')
<body onload="getLocation()">
@section('content')
<div class="main">
    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Daftar Akun</h2>
                    <form method="POST" action="{{ route('registerPost') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="username" id="username" value="{{ old('username') }}" placeholder="Username"/>
                            <div>
                                @error('username')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="number"><i class="zmdi zmdi-whatsapp"></i></label>
                            <input type="number" name="number" id="number" value="{{ old('number') }}" placeholder="Contoh: 6282145567651"/>
                            @error('number')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Alamat Email"/>
                            @error('email')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="password-field">
                                    <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                    <input type="password" name="password" id="pass" placeholder="Kata Sandi"/>
                                    <i class="fas fa-eye" id="toggle-password"></i>
                            </div>
                            @error('password')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="password-field">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_password" id="re_password"  placeholder="Ulangi Kata Sandi Anda"/>
                                <i class="fas fa-eye" id="toggle-password-re"></i>
                            </div>
                            @error('re_password')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>

                        <div>
                            <input type="hidden" class="form-control" name="latitude" id="latitude" placeholder="Masukkan Latitude">
                            <input type="hidden" class="form-control" name="longitude" id="longitude" placeholder="Masukkan Longitude">
                        </div>

                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>Saya setuju dengan semua pernyataan di <a type="button" class="term-service" data-bs-toggle="modal" data-bs-target="#staticBackdrop">persyaratan pelayanan</a></label>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Persyaratan Layanan</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Terakhir diperbarui: 23 Mei 2023 <br> Selamat datang di SafeSpeaks. Harap baca dengan seksama persyaratan layanan ini sebelum menggunakan situs web kami. <br><br> Dengan mengakses dan menggunakan SafeSpeaks, Anda menyetujui dan terikat oleh persyaratan yang tercantum di bawah ini. Jika Anda tidak setuju dengan persyaratan ini, mohon untuk tidak melanjutkan penggunaan situs web kami.<br><br>
                                        1. Kebijakan Penggunaan <br>
                                        Anda setuju untuk menggunakan SafeSpeaks sesuai dengan semua hukum yang berlaku dan peraturan yang relevan. Anda bertanggung jawab sepenuhnya atas aktivitas yang dilakukan melalui akun Anda, serta konten yang Anda unggah atau bagikan melalui platform kami. Anda tidak diperkenankan untuk: <br><br>
                                        a. Mengunggah, membagikan, atau menyebarkan konten yang melanggar hukum, termasuk konten yang melanggar hak cipta, merek dagang, atau hak kekayaan intelektual lainnya. <br>
                                        b. Membuat atau menyebarkan virus komputer, worm, atau kode berbahaya lainnya yang dapat merusak, mengganggu, atau merusak sistem kami atau pengguna lain. <br>
                                        c. Mencoba mengakses informasi pribadi pengguna lain, menggunakan metode yang melanggar privasi atau melanggar peraturan yang berlaku. <br><br>
                                        2. Privasi dan Pengumpulan Data <br>
                                        Kami menghargai privasi Anda dan berkomitmen untuk melindungi data pribadi Anda. Dalam penggunaan SafeSpeaks, kami akan mengumpulkan, menggunakan, dan melindungi informasi pribadi Anda sesuai dengan Kebijakan Privasi kami yang berlaku. Dengan menggunakan situs web kami, Anda menyetujui pengumpulan, penggunaan, dan penyimpanan data pribadi Anda termasuk data lokasi Anda sebagaimana dijelaskan dalam Kebijakan Privasi kami. <br>
                                        3. Keamanan Akun <br>
                                        Anda bertanggung jawab untuk menjaga kerahasiaan informasi akun Anda, termasuk kata sandi Anda. Anda setuju untuk memberi tahu kami segera jika Anda mengetahui atau mencurigai adanya penggunaan yang tidak sah atau akses tidak sah ke akun Anda. Kami tidak bertanggung jawab atas kerugian atau kerusakan yang disebabkan oleh penggunaan yang tidak sah terhadap akun Anda. <br><br>
                                        4. Penolakan Tanggung Jawab <br>
                                        SafeSpeaks menyediakan platform untuk penggunaan yang nyaman dan aman, namun kami tidak memberikan jaminan atas kelengkapan, keakuratan, atau ketersediaan informasi yang disediakan di situs web kami. Kami tidak bertanggung jawab atas kerugian atau kerusakan yang timbul dari penggunaan atau ketidakmampuan menggunakan SafeSpeaks. <br><br>
                                        5. Perubahan dan Pembaruan <br>
                                        SafeSpeaks berhak untuk memperbarui, mengubah, atau menghapus persyaratan layanan ini kapan saja tanpa pemberitahuan sebelumnya. Setiap perubahan akan segera berlaku setelah diposting di situs web kami. Penggunaan terus-menerus dari SafeSpeaks setelah perubahan tersebut merupakan penerimaan Anda terhadap perubahan tersebut. <br><br>
                                        6. Penyelesaian Sengketa dan Hukum yang Berlaku <br>
                                        Persyaratan layanan ini tunduk pada hukum yang berlaku di negara kami. Jika terjadi sengketa antara Anda dan SafeSpeaks, kami akan berupaya menyelesaikan sengketa tersebut melalui negosiasi dan mediasi yang baik dan jujur. <br><br>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Saya Mengerti</button>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Registrasi" disabled/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="{{ url('assets/images/signup-image.jpg') }}" style="border-radius: 10px;" alt="sing up image"></figure>
                    <a href="login" class="signup-image-link">Sudah punya akun?</a>
                </div>
            </div>
        </div>
    </section>
</div>
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
    document.addEventListener('DOMContentLoaded', function() {
      var checkbox = document.getElementById('agree-term');
      var submitButton = document.getElementById('signup');
      checkbox.addEventListener('change', function() {
        submitButton.disabled = !checkbox.checked;
      });
    });

    document.addEventListener('DOMContentLoaded', function() {
    var passwordInput = document.getElementById('pass');
    var toggleButton = document.getElementById('toggle-password');

    toggleButton.addEventListener('click', function() {
        if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleButton.classList.remove('fa-eye');
        toggleButton.classList.add('fa-eye-slash');
        } else {
        passwordInput.type = 'password';
        toggleButton.classList.remove('fa-eye-slash');
        toggleButton.classList.add('fa-eye');
        }
    });
    });

    document.addEventListener('DOMContentLoaded', function() {
    var repasswordInput = document.getElementById('re_password');
    var toggleButton = document.getElementById('toggle-password-re');

    toggleButton.addEventListener('click', function() {
        if (repasswordInput.type === 'password') {
        repasswordInput.type = 'text';
        toggleButton.classList.remove('fa-eye');
        toggleButton.classList.add('fa-eye-slash');
        } else {
        repasswordInput.type = 'password';
        toggleButton.classList.remove('fa-eye-slash');
        toggleButton.classList.add('fa-eye');
        }
    });
    });
</script>
@endsection
