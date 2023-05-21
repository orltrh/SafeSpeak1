@extends('layout.loginregister')
@section('title', 'Sign In')

@section('head')
    {{-- Icon --}}
    <link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css') }}">

    {{-- CSS --}}
    <style>
        .password-field {
        display: flex;
        align-items: center;
        flex-direction: c;
        }
    </style>

@section('content')
<div class="main">
    <!-- Sign in Form -->
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="{{ url('assets/images/signin-image.jpg') }}" style="border-radius: 15px;" alt="sign up image"></figure>
                    <a href="register" class="signup-image-link">Tidak memiliki akun?</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Masuk</h2>
                    <form method="POST" action="{{ route('loginPost') }}">
                        @csrf

                        <div class="form-group">
                            <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" placeholder="Username"/>
                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="password-field">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Kata Sandi"/>
                                <i class="fas fa-eye" id="toggle-password"></i>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div>
                            @error('error')
                                <div class="alert alert-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>

                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="Masuk"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
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
</script>
@endsection
