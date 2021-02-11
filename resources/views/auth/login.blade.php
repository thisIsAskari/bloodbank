@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="img-holder">
            <div class="bg"></div>
            <div class="info-holder">
                <h3>Get more things done with Loggin platform.</h3>
                <p>Access to the most powerfull tool in the entire design and web industry.</p>
                <img src="{{asset('frontend/img/logo.png')}}" alt="">
            </div>
        </div>
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <div class="website-logo-inside">
                        <a href="#">
                            <div class="logo">
                                <img class="logo-size" src="{{asset('frontend/img/logo.png')}}" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="page-links">
                        <a href="{{route('login')}}" class="active">Login</a><a href="{{route('register')}}">Register</a>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="E-mail Address" autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <div class="form-button">
                            <button type="submit" class="ibtn">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
