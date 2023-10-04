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
                    <a href="{{ route('inscriptionPage')}}" class="signup-image-link">Creer un compte</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Connexion</h2>
                    <form method="POST" action="{{ route('access.login') }}" class="register-form" id="login-form">
                    @csrf    
                        <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="login" id="email" placeholder="Email"/>
                        </div>
                        <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="mdp" id="your_pass" placeholder="Password"/>
                        </div>
                        
                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="Se connecter"/>
                        </div>
                    </form>
                    <div class="social-login">
                        <span class="social-label">Or login with</span>
                        <ul class="socials">
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
