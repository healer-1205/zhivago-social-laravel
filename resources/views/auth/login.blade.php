<!DOCTYPE html>
<html lang="en">

<head>
    <script src="{{ asset('assets/js/jquery3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap-4.1.3-dist/js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-4.1.3-dist/css/bootstrap.min.css') }}" id="bootstrap-css">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <!------ Include the above in your HEAD tag ---------->
    <style>
        .body {
            background: url("../../../assets/img/hot-girl-wallpaper.jpg") no-repeat;
            background-size: cover;
        }

        .container {
            max-width: 100%;
            min-height: 100vh;
        }

        .is-invalid {
            border: 1px solid red;
        }
    </style>
</head>

<body class="body">
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
            </div>
            <div class="col-md-8 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Register</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Login</h3>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row register-form">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input
                                            class="form-control {{ Session::get('email_invalid') ? 'is-invalid' : '' }}"
                                            type="email" name="email" :value="old('email')" required
                                            placeholder="melina@example.com" />
                                        @if (Session::has('email_invalid'))
                                            <small style="color:red"> {{ Session::get('email_invalid') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input
                                            class="form-control {{ Session::get('password_invalid') ? ' is-invalid' : '' }}"
                                            type="password" name="password" required autocomplete="current-password" />
                                        @if (Session::has('password_invalid'))
                                            <small style="color:red"> {{ Session::get('password_invalid') }}</small>
                                        @endif
                                    </div>
                                    <input type="submit" class="btnRegister" value="Login" />
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading">Register</h3>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text"
                                            class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                            type="text" name="name" :value="old('name')" required autofocus
                                            autocomplete="name" placeholder="Enter your Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email"
                                            class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                            name="email" :value="old('email')" required autofocus
                                            autocomplete="email" placeholder="Enter your email address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password"
                                            class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                            type="password" name="password" required autocomplete="new-password"
                                            placeholder="Enter your password">
                                    </div>
                                    <div class="form-group">
                                        <select class="{{ $errors->has('cardType') ? 'is-invalid' : '' }} form-control"
                                            name="accountType" required value='{{ old('cardType') }}'
                                            :value="old('email')">
                                            <option value class="hidden" selected disabled>Choose account type</option>
                                            <option value="talent"> Talent </option>
                                            <option value="affiliate"> Affiliate </option>
                                            <option value="vendor"> Vendor </option>
                                            <option value="customer"> customer </option>
                                        </select>
                                        @error('cardType')
                                            <small class="text-red text-center"> {{ $message }} </small>
                                        @enderror
                                    </div>
                                    <input type="submit" class="btnRegister" value="Register" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
