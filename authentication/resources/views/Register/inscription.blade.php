@extends('layout')

 @section('additionalCss')
    <link rel="stylesheet" href="{{ url('fonts/material-icon/css/material-design-iconic-font.min.css')}}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ url('css2/login.css')}}">
@endsection

@section('content')
    <!-- Sign up form -->
    <section class="signup">
            <div class="container-login">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Inscription</h2>
                        
                        
                        <form action="{{ route('register.createaccount') }}" method="POST" class="register-form" id="register-form">
                        @csrf    
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nom" id="name" placeholder="Votre Nom"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="prenom" id="prenom" placeholder="Votre Prenom"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-phone"></i></label>
                                <input type="text" name="tel" id="tel" placeholder="Telephone"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="login" id="email" placeholder="Votre Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="mdp" id="pass" placeholder="Mot de Passe"/>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Valider"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{ url('images2/signup-image.jpg')}}" alt="sing up image"></figure>
                        <a href="{{ route('loginPage')}}" class="signup-image-link">J'ai déjà un compte</a>
                    </div>
                </div>
            </div>
        </section>
@endsection
