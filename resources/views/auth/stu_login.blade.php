<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--===============================================================================================-->
    <link rel="icon" href="{{ asset('images/logo/favicon.png') }}" type="image/x-icon" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('login/css/main.css') }}">
    <!--===============================================================================================-->
</head>
<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
            <h3 class="info_header">{{ config('app.name') }}</h3>



            <div class="col-sm-12">
                <div class="col-sm-6 pull-left">
                    <div class="text-center" >
                        <img src="{{ asset('login/images/logo/gb_logo.png') }}" alt="IMG">
                        <div class="">
                            <h5 style="margin-top:15px;text-align:center;" class="">Computer Science & Engineering</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 pull-right">
                    <div class="info_button">
                        <form id="student" class="login100-form validate-form" method="POST" action="{{ route('student.login.submit') }}">
                            {{ csrf_field() }}
                            @if ($errors->has('active'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('active') }}</strong>
                                </span>
                            @endif
                            <span class="login100-form-title">
                                Student Login
                            </span>

                            @if ($errors->has('email') || $errors->has('password'))
                                <div class="width:100%">
                                    <span class="help-block" style="text-align:center;color:red">
                                        These credentials do not match our records.
                                    </span>
                                </div>
                            @endif

                            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                <input id="email" type="email" class="input100" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>

                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </span>
                            </div>

                            <div class="wrap-input100 validate-input" data-validate = "Password is required">
                                <input id="password" type="password" class="input100" placeholder="Password" name="password" required>


                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                </span>
                            </div>

                            <div class="container-login100-form-btn">
                                <button type="submit" class="login100-form-btn">
                                    Login
                                </button>
                            </div>




                        </form>
                    </div>

                </div>
            </div>



            <div class="col-sm-12 text-center">
                <p class="copyright">© Copyright {{ date('Y') }}. Dept of CSE, Gono Bishwabidyalay</p>
            </div>


        </div>

    </div>
</div>




<!--===============================================================================================-->
<script src="{{ asset('login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('login/vendor/bootstrap/js/popper.js') }}"></script>
<script src="{{ asset('login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('login/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('login/vendor/tilt/tilt.jquery.min.js') }}"></script>
<script >
$('.js-tilt').tilt({
    scale: 1.1
})
</script>
<!--===============================================================================================-->
<script src="{{ asset('login/js/main.js') }}"></script>


</body>
</html>
