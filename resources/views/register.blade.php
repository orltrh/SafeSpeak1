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
                    <form action="{{ route('registers.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name"></label>
                            <input type="text" 
                            name="username" id="username" value="{{ old('username') }}" placeholder="Username" required/>
                           @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email"></label>
                            <input type="email"
                            class="class-control @error('email') is-invalid @enderror"
                            name="email" id="email"  value="{{ old('email') }}" placeholder="Email" required/>
                             @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="number"></label>
                            <input type="number" class="class-control @error('number') is-invalid @enderror"
                            name="number" id="username"  value="{{ old('number') }}" placeholder="Number" required/>
                            @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="password"></label>
                            <input type="password" class="class-control"
                            name="password" id="password"  placeholder="Password" required/>
                           @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="re-password"></label>
                            <input type="password" class="class-control"
                            name="re-password" id="re-password"  placeholder="Confirm Password" required/>
                           @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
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
                    <a href="login" class="signup-image-link">I am already member</a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
