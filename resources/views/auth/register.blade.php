@extends('layouts.default')


@section('title')
 {{ config('app.name') }} | Register
@endsection


@section('main')


        <div class="container">
            <!--Container-->
            <div class="login-container is-centered">
                <div class="columns is-vcentered">
                    <div class="column">

                        <h2 class="form-title has-text-centered">Hey there!</h2>
                        <h3 class="form-subtitle has-text-centered">Let's create your account.</h3>
                     <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!--Form-->
                        <div class="login-form">
                            <div class="form-panel">
                                <div class="columns is-multiline">
                                    <div class="column is-12">
                                        <div class="field">
                                            <label>Name</label>
                                            <div class="control">
                                                <input type="text" class="input {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Enter your first name">
                                            </div>
                                        </div>
                                    </div>

                                     <div class="column is-12">
                                        <div class="field">
                                            <label>Username</label>
                                            <div class="control">
                                                <input type="text" class="input {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" placeholder="choose a user name">
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
                                                <input type="email" class="input {{ $errors->has('name') ? 'is-invalid' : '' }}"  name="email" :value="old('email')" required autofocus autocomplete="email"  placeholder="Enter your email address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column is-12">
                                        <div class="field">
                                            <label>Date of Birth</label>
                                            <div class="control">
                                                <input type="date" name="DOB" class="input" :value="old('DOB')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column is-12">
                                        <div class="field">
                                            <label>Password</label>
                                            <div class="control">
                                                <input type="password" class="input {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" name="password" required autocomplete="new-password" placeholder="Enter your password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column is-12">
                                        <div class="field">
                                            <label> Confirm Password</label>
                                            <div class="control">
                                                <input  type="password" name="password_confirmation" required autocomplete="new-password" class="input" placeholder="Repeat password">
                                            </div>
                                        </div>
                                    </div>


                                     <div class="mb-3">
                                            <select class="{{ $errors->has('cardType') ? 'is-invalid' : '' }} col-12 form-control drop-down-menu" name="accountType" required value='{{ old('cardType') }}' :value="old('email')">
                                            <option value>Choose account type</option>
                                            <option value="talent"> Talent </option>
                                            <option value="affiliate"> Affiliate </option>
                                            <option value="vendor"> Vendor </option>
                                            <option value="customer">  customer </option>
                                            </select>
                                            @error('cardType')
                                             <small class="text-red text-center"> {{$message}} </small>
                                             @enderror
                                    </div>


                                  {{--   <div class="account-type">
                                        <p>Choose Account Type</p>
                                    <input type="checkbox" id="talent" name="talent" value="talent">
                                    <label for="talent"> Talent </label>
                                    <input type="checkbox" id="affiliate" name="affiliate" value="affiliate">
                                    <label for="affiliate"> Affiliate </label>
                                    <input type="checkbox" id="vendor" name="vendor" value="vendor">
                                    <label for="vendor"> Vendor </label>
                                    <input type="checkbox" id="customer" name="customer" value="customer">
                                    <label for="customer"> Customer </label>
                                </div> --}}
                                  @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                    <div class="mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <x-jet-checkbox id="terms" name="terms" />
                                            <label class="custom-control-label" for="terms">
                                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'">'.__('Terms of Service').'</a>',
                                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'">'.__('Privacy Policy').'</a>',
                                                    ]) !!}
                                            </label>
                                        </div>
                                    </div>
                                @endif
                                </div>
                            </div>

                            <div class="buttons mt-2">
                                <button type="submit" class="is-solid primary-button is-fullwidth raised"> Create Account</button>
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