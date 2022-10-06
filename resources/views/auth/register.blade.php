@extends('layouts.default')


@section('title')
    {{ config('app.name') }} | Register
@endsection


@section('main')
    <style>
        .login-wrapper .hero.is-login {
            background-size: 100% 100%;
        }

        .register {
            height: 46px;
            font-size: .95rem;
            background: #3d70b2;
            border-color: #3d70b2;
            border-radius: 9999px;
            color: #fff;
            padding-left: 1.5em;
            padding-right: 1.5em;
            display: flex;
            width: 100%;
            line-height: 0;
            font-weight: 500;
            padding: 18px 22px;
            transition: all .3s;
            border-width: 1px;
            cursor: pointer;
            justify-content: center;
            text-align: center;
            white-space: nowrap;
            -webkit-appearance: none;
            align-items: center;
            border: 1px solid transparent;
            position: relative;
            vertical-align: top;
        }

        .is-invalid {
            border: 1px solid red;
        }
    </style>

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

    <div class="column is-6" style="background-color: #ffffff;">
        <!--Container-->
        <div class="login-container is-centered">
            <div class="columns is-vcentered">
                <div class="column">

                    <h2 class="form-title has-text-centered">Welcome Zhivago</h2>
                    <h3 class="form-subtitle has-text-centered">Let's create your account.</h3>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!--Form-->
                        <div class="login-form">
                            <div class="form-panel">
                                <div class="columns is-multiline">
                                    {{-- <div class="column is-12">
                                        <div class="field">
                                            <label>Name</label>
                                            <div class="control">
                                                <input type="text" class="input {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Enter your first name">
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="column is-12">
                                        <div class="field">
                                            <label>Username</label>
                                            <div class="control">
                                                <input type="text"
                                                    class="input {{ $errors->has('username') ? 'is-invalid' : '' }}"
                                                    type="text" name="username" :value="old('username')" required
                                                    autofocus autocomplete="username" placeholder="choose a user name">
                                                @if ($errors->has('username'))
                                                    <small style="color:red"> Username already exist. Please choose another.
                                                    </small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>


                                    {{-- <div class="column is-6"> --}}
                                    {{--    <div class="field">
                                            <label>Last Name</label>
                                            <div class="control">
                                                <input type="text" class="input" placeholder="Enter your last name">
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="column is-12">
                                        <div class="field">
                                            <label>Email</label>
                                            <div class="control">
                                                <input type="email"
                                                    class="input {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                                    name="email" :value="old('email')" required autofocus
                                                    autocomplete="email" placeholder="Enter your email address">
                                                @if ($errors->has('email'))
                                                    <small style="color:red"> Email already exist. Please choose another.
                                                    </small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="column is-12">
                                        <div class="field">
                                            <label>Date of Birth</label>
                                            <div class="control">
                                                <input type="date" name="DOB" class="input" :value="old('DOB')">
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="column is-12">
                                        <div class="field">
                                            <label>Password</label>
                                            <div class="control">
                                                <input type="password"
                                                    class="input {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                                    type="password" name="password" required autocomplete="new-password"
                                                    placeholder="Enter your password">
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="column is-12">
                                        <div class="field">
                                            <label> Confirm Password</label>
                                            <div class="control">
                                                <input  type="password" name="password_confirmation" required autocomplete="new-password" class="input" placeholder="Repeat password">
                                            </div>
                                        </div>
                                    </div> --}}


                                    {{-- <div class="mb-3">
                                        <select
                                            class="{{ $errors->has('cardType') ? 'is-invalid' : '' }} col-12 form-control drop-down-menu"
                                            name="accountType" required value='{{ old('cardType') }}'
                                            :value="old('email')">
                                            <option value>Choose account type</option>
                                            <option value="talent"> Talent </option>
                                            <option value="affiliate"> Affiliate </option>
                                            <option value="vendor"> Vendor </option>
                                            <option value="customer"> customer </option>
                                        </select>
                                        @error('cardType')
                                            <small class="text-red text-center"> {{ $message }} </small>
                                        @enderror
                                    </div> --}}


                                    <div class="mb-3 column is-12">
                                        <div class="account-type {{ $errors->has('accountType') ? 'is-invalid' : '' }}">
                                            <p style="font-weight: 500;">Choose Account Type</p>
                                            <input type="checkbox" id="talent" name="accountType[]" value="talent">
                                            <label for="talent"> Talent </label>
                                            <input type="checkbox" id="affiliate" name="accountType[]" value="affiliate">
                                            <label for="affiliate"> Affiliate </label>
                                            <input type="checkbox" id="vendor" name="accountType[]" value="vendor">
                                            <label for="vendor"> Vendor </label>
                                            <input type="checkbox" id="customer" name="accountType[]" value="customer">
                                            <label for="customer"> Customer </label>
                                        </div>
                                        @if ($errors->has('accountType'))
                                            <small style="color:red"> You must choose one of account type to register.
                                            </small>
                                        @endif
                                    </div>
                                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                        <div class="mb-3">
                                            <div class="custom-control custom-checkbox">
                                                <x-jet-checkbox id="terms" name="terms" />
                                                <label class="custom-control-label" for="terms">
                                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                        'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '">' . __('Terms of Service') . '</a>',
                                                        'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '">' . __('Privacy Policy') . '</a>',
                                                    ]) !!}
                                                </label>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="buttons mt-4">
                                <button type="submit" class="register"> Create
                                    Account</button>
                            </div>

                            <div class="account-link has-text-centered">
                                <a href="{{ route('login') }}">Have an account? Sign In</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
