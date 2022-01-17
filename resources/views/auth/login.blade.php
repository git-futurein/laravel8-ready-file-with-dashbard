@extends('layouts.frontend_sign_layout')
@section('frontend_sign_content')
    

<body class="login">

    <form class="form-login" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="row">
            <div class="col-md-12 text-center mb-4">
                <img alt="logo" src="{{ asset('frontendAsset') }}/assets/img/logo-5.png" class="theme-logo">
            </div>

            <div class="col-md-12">
                <label for="inputEmail" class="">Login</label>                
                <input type="email" id="inputEmail" class="form-control mb-4  @error('email') is-invalid @enderror" placeholder="Login" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >  
                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror              
                <label for="inputPassword" class="">Password</label>                
                <input type="password" id="inputPassword" class="form-control mb-5 @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">  
                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror              
                <div class="checkbox d-flex justify-content-between mb-4 mt-3">
                    <div class="custom-control custom-checkbox mr-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" value="remember-me" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="customCheck1">Remember</label>
                    </div>
                    <div class="forgot-pass">
                        <a href="{{ route('password.request') }}">Forgot Password?</a>
                    </div>
                </div>                
                <button class="btn btn-lg btn-gradient-danger btn-block btn-rounded mb-4 mt-5" type="submit">Login</button>
                <a href="{{ route('register') }}" class="btn btn-lg btn-outline-dark btn-block btn-rounded mb-3">Register</a>
            </div>

            <div class="col-md-12 mb-0 text-center social-icons">
                <h5 class="mt-4 mb-4">or</h5>
                <button class="btn btn-outline-secondary rounded-circle btn-rounded mb-4 mr-2"><i class="flaticon-facebook-logo flaticon-circle-p"></i></button>
                <button class="btn btn-outline-secondary rounded-circle btn-rounded mb-4 mr-2"><i class="flaticon-google-plus-bold flaticon-circle-p"></i></button>
                <button class="btn btn-outline-secondary rounded-circle btn-rounded mb-4 mr-2"><i class="flaticon-twitter-logo flaticon-circle-p"></i></button>
            </div>
        </div>
    </form>
    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('frontendAsset') }}/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="{{ asset('frontendAsset') }}/bootstrap/js/popper.min.js"></script>
    <script src="{{ asset('frontendAsset') }}/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- END GLOBAL MANDATORY SCRIPTS -->
</body>
</html>
@endsection
