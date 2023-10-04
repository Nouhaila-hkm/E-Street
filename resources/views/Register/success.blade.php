@extends('layout')

 @section('additionalCss')
    <link rel="stylesheet" href="{{ url('fonts/material-icon/css/material-design-iconic-font.min.css')}}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ url('css2/login.css')}}">
@endsection

@section('content')
    <!-- Sing in  Form -->
    <section class="sign-in">
        <div class="container-login">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="{{ url('images2/signin-image.jpg')}}" alt="sing up image"></figure>
                    <a href="{{ route('loginPage')}}" class="signup-image-link">Se connecter</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Votre compte a été créé avec succès</h2>
                    
                    <div></div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection
