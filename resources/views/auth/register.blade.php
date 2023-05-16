@extends('layout.loginregister')
@section('title', 'Sign Up')

@section('content')
<div class="main">
    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    <form method="POST" action="{{ route('registerPost') }}" class="register-form" id="register-form">
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
                            <label for="number"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="number" name="number" id="number" value="{{ old('number') }}" placeholder="Number Phone"/>
                            @error('number')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Email Address"/>
                            @error('email')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="pass" placeholder="Password"/>
                            @error('password')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input type="password" name="re_password" id="re_password"  placeholder="Repeat your password"/>
                            @error('re_password')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror   
                        </div>

                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>

                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="assets/images/signup-image.jpg" alt="sing up image"></figure>
                    <a href="login" class="signup-image-link">Already have an account?</a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
