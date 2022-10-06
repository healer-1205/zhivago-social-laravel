@extends('layouts.default')

@section('title')
    {{ config('app.name') }} | login
@endsection
{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="card-body">

            <x-jet-validation-errors class="mb-3 rounded-0" />

            @if (session('status'))
                <div class="alert alert-success mb-3 rounded-0" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <x-jet-label value="{{ __('Email') }}" />

                    <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email"
                                 name="email" :value="old('email')" required />
                    <x-jet-input-error for="email"></x-jet-input-error>
                </div>

                <div class="mb-3">
                    <x-jet-label value="{{ __('Password') }}" />

                    <x-jet-input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password"
                                 name="password" required autocomplete="current-password" />
                    <x-jet-input-error for="password"></x-jet-input-error>
                </div>

                <div class="mb-3">
                    <div class="custom-control custom-checkbox">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <label class="custom-control-label" for="remember_me">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>

                <div class="mb-0">
                    <div class="d-flex justify-content-end align-items-baseline">
                        @if (Route::has('password.request'))
                            <a class="text-muted me-3" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-jet-button>
                            {{ __('Log in') }}
                        </x-jet-button>
                    </div>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout> --}}

@section('main')
    <style>
        .login-wrapper .hero.is-login {
            background-size: 100% 100%;
        }

        .login-wrapper .form-wrapper .avatar img {
            width: 70%;
        }

        .login-wrapper .form-wrapper .login-form .field:not(:last-child) {
            margin-bottom: 2rem;
        }

        .is-invalid {
            border: 1px solid red;
        }

        .login-wrapper .form-wrapper .login-form .field .control {
            margin-bottom: 30px;
        }
    </style>
    <!--Left Side (Desktop Only)-->
    <div class="column is-6 is-hidden-mobile hero-banner">
        <div class="hero is-fullheight is-login">
            <div class="hero-body">
                {{-- <div class="container">
                    <div class="left-caption">
                        <h2>Join an Exciting Social Experience.</h2>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>


    @if (session('status'))
        <div class="alert alert-success mb-3 rounded-0" role="alert">
            {{ session('status') }}
        </div>
    @endif


    <!--Right Side-->
    <div class="column is-6" style="background-color: #ffffff;">
        <div class="hero form-hero is-fullheight">
            <!--Logo-->
            {{-- <div class="logo-wrap">
                <div class="wrap-inner">
                    <img src="assets/img/logo/Zhivago-white.svg" alt="">
                </div>
            </div> --}}
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <!--Login Form-->
                <div class="hero-body">
                    <div class="form-wrapper">
                        <!--Avatar-->
                        <div class="avatar">
                            {{-- <div class="badge">
                                <i data-feather="check"></i>
                            </div> --}}
                            <img src="assets/img/logo/zhivago-logo.png" data-demo-src="assets/img/logo/Zhivago-white.svg"
                                alt="avatar">
                        </div>
                        <!--Form-->
                        <div class="login-form">
                            <div class="field">
                                <div class="control">
                                    <input
                                        class="input username-input {{ Session::get('username_invalid') ? 'is-invalid' : '' }}"
                                        type="text" name="username" :value="old('username')" required
                                        placeholder="username" />
                                    @if (Session::has('username_invalid'))
                                        <small style="color:red"> {{ Session::get('username_invalid') }}</small>
                                    @endif
                                    <div class="input-icon">
                                        <i data-feather="user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input
                                        class="input password-input {{ Session::get('password_invalid') ? ' is-invalid' : '' }}"
                                        type="password" name="password" required autocomplete="current-password" />
                                    @if (Session::has('password_invalid'))
                                        <small style="color:red"> {{ Session::get('password_invalid') }}</small>
                                    @endif
                                    <div class="input-icon">
                                        <i data-feather="lock"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="custom-control custom-checkbox">
                                    <x-jet-checkbox id="remember_me" name="remember" />
                                    <label class="custom-control-label" for="remember_me">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <button type="submit"
                                        class="button is-solid primary-button raised is-rounded is-fullwidth"> Login
                                    </button>
                                    <!--<button class="button is-solid primary-button raised is-rounded is-fullwidth">Login</button>-->
                                </div>
                                <div class="has-text-centered">
                                    <a href="{{ route('register') }}">Don't have an account? Create Account </a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="section forgot-password">
                            <div class="has-text-centered">
                                <a href="{{ route('password.request') }}">Forgot password?</a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
