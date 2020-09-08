{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
 

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}



@extends('layouts.masterlogu')    

@section('content')     
        <!-- Start Login Register Area -->
        <div class="htc__login__register bg__white ptb--130" style="background: rgba(0, 0, 0, 0) url({{asset('user/images/bg/5.jpg')}}) no-repeat scroll center center / cover ;">
            <div class="container">
                <div class="row">
                    <div class="section__title section__title--2 text-center">
                        <img src="{{asset('logo-login.png')}}" alt="logo">
                    </div>
                    <div class="col-md-6 col-md-offset-3">
                        <ul class="login__register__menu" role="tablist">
                            <li role="presentation" class="login active"><a href="{{ route('login') }}" >Login</a></li>
                            <li role="presentation" class="register"><a href="{{ route('register') }}" >Register</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Start Login Register Content -->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="htc__login__register__wrap">
                            <!-- Start Single Content -->
                            <div id="login" role="tabpanel" class="single__tabs__panel tab-pane fade in active">
                                <form class="login" method="post" action="{{ route('login') }}">
                                    @csrf
                                    <input id="email" type="email"  name="email" value="{{ old('email') }}" placeholder="Email*">
                                    <input id="password" type="password" name="password" placeholder="Password*">
                                    {{-- <input type="password" placeholder="Password*"> --}}
                                    {{-- <div class="tabs__checkbox">
                                        <input type="checkbox">
                                        <span> Remember me</span>
                                        <span class="forget"><a href="#">Forget Pasword?</a></span>
                                    </div> --}}
                                    <div class="htc__login__btn mt--30">
                                        <button><a>Login</a></button>
                                    </div>
                                </form>
                            </div>
                            <!-- End Single Content -->
                            <!-- Start Single Content -->
                            <div id="register" role="tabpanel" class="single__tabs__panel tab-pane fade">
                                <form class="login" method="post" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input id="name" type="text"  name="name" value="{{ old('name') }}" placeholder="Nama Depan*">
                                    </div>
                                    <div class="form-group">
                                        <input id="lastname" type="text"  name="lastname" value="{{ old('lastname') }}" placeholder="Nama Belakang*">
                                    </div>
                                    <div class="form-group">
                                        <input id="email" type="email"  name="email" value="{{ old('email') }}" placeholder="Email*">
                                    </div>
                                    <div class="form-group">
                                        <input id="phone" type="text"  name="phone" value="{{ old('phone') }}" placeholder="Telp*">
                                    </div>
                                    <div class="form-group">
                                        <input id="address" type="text"  name="address" value="{{ old('address') }}" placeholder="Alamat*">
                                    </div>
                                    <div class="form-group">
                                        <input id="password" type="password"  name="password" placeholder="Password*">
                                    </div>
                                    <div class="form-group">
                                        <input id="password-confirm" type="password"  name="password_confirmation" placeholder="Konfirmasi Password*">
                                    </div>
                                    <div class="htc__login__btn">
                                        <button type="submit"><a>Register</a></button>
                                    </div>
                                </form>
                                {{-- <div class="htc__social__connect">
                                    <h2>Or Login With</h2>
                                    <ul class="htc__soaial__list">
                                        <li><a class="bg--twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                        <li><a class="bg--instagram" href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                        <li><a class="bg--facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a class="bg--googleplus" href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                                    </ul>
                                </div> --}}
                            </div>
                            <!-- End Single Content -->
                        </div>
                    </div>
                </div>
                <!-- End Login Register Content -->
            </div>
    @endsection
        