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
                    <a href="{{ route('register')}}" class="signup-image-link">Creer un compte</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Connexion</h2>
                    <x-guest-layout>
                        <x-auth-card>
                            <x-slot name="logo">
                                <a href="/">
                                    
                                </a>
                            </x-slot>

                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <!-- Email Address -->
                                <div>
                                    <x-input id="email" placeholder="Votre email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                    

                                    <x-input id="password" class="block mt-1 w-full" placeholder="Votre mot de passe"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="current-password" />
                                </div>


                                <div class="flex items-center justify-end mt-4">
                                    <x-button class="ml-3 form-submit">
                                        {{ __('Log in') }}
                                    </x-button>
                                </div>
                            </form>
                        </x-auth-card>
                    </x-guest-layout>
                    
                </div>
            </div>
        </div>
    </section>
@endsection
