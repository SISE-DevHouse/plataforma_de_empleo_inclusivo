<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V10</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="templatelogin/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="templatelogin/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="templatelogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="templatelogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="templatelogin/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="templatelogin/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="templatelogin/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="templatelogin/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="templatelogin/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="templatelogin/css/util.css">
    <link rel="stylesheet" type="text/css" href="templatelogin/css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-50 p-b-90">

                <form class="login100-form validate-form flex-sb flex-w" method="POST" action="{{ route('login') }}">
                    @csrf
                    <span class="login100-form-title p-b-51">
                        {{ __('Login') }}
                    </span>



                    <div class="wrap-input100 validate-input m-b-16" data-validate="Username is required">
                        <input id="email" type="email" class="form-control input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('E-Mail Address') }}" autofocus>

                        @error('email')
                        <span class="focus-input100 invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
                        <input id="password" class="form-control input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="{{ __('Password') }} " required autocomplete="current-password">

                        @error('password')
                        <span class="focus-input100 invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    <div class="flex-sb-m w-full p-t-3 p-b-24">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                {{ __('Remember Me') }}
                            </label>
                        </div>

                        <div>
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="txt1 btn btn-link">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>
                    </div>

                    <div class="container-login100-form-btn m-t-17">
                        <button type="submit" class="login100-form-btn">
                            {{ __('Login') }}
                        </button>
                    </div>


                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="templatelogin/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="templatelogin/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="templatelogin/vendor/bootstrap/js/popper.js"></script>
    <script src="templatelogin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="templatelogin/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="templatelogin/vendor/daterangepicker/moment.min.js"></script>
    <script src="templatelogin/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="templatelogin/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="templatelogin/js/main.js"></script>

</body>

</html>