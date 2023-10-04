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
                        
                        
                        <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
             
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input id="name" placeholder="Votre nom" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required  />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input id="email" placeholder="Votre email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required placeholder="Votre mot de passe" autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input id="password_confirmation" placeholder="Confirmer votre mot de passe" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation"  required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('J\'ai déjà un compte') }}
                </a>

                <x-button class="ml-4 form-submit">
                    {{ __('Valider') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

                    </div>
                    <div class="signup-image">
                        <figure><img src="{{ url('images2/signup-image.jpg')}}" alt="sing up image"></figure>
                    </div>
                </div>
            </div>
        </section>
@endsection
