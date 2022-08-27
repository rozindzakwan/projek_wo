<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('bootLogin/images/icons/favicon.ico ') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('bootLogin/vendor/bootstrap/css/bootstrap.min.css ') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('bootLogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css ') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('bootLogin/fonts/iconic/css/material-design-iconic-font.min.css ') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('bootLogin/vendor/animate/animate.css ') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('bootLogin/vendor/css-hamburgers/hamburgers.min.css ') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('bootLogin/vendor/animsition/css/animsition.min.css ') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('bootLogin/vendor/select2/select2.min.css ') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('bootLogin/vendor/daterangepicker/daterangepicker.css ') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('bootLogin/css/util.css ') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootLogin/css/main.css ') }}">
    <!--===============================================================================================-->
</head>

<body>
    <div class="limiter">
        <div class="container-login100" style="background-color: darkgray;">
            <div class="wrap-login100">
                <div class="text-center">
                    <span>
                        <img src="{{ asset('foto/logo.jpg') }}" alt="" srcset="" width="200px"
                            height="200px">
                    </span>
                </div>
                <form class="login100-form validate-form" action="{{ route('register.store') }}" method="POST">
                    @csrf
                    <div class="wrap-input100 validate-input" data-validate="Masukkan nama anda">
                        <input class="input100" type="text" name="name">
                        <span class="focus-input100" data-placeholder="Nama Lengkap"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Masukkan Username">
                        <input class="input100" type="text" name="username">
                        <span class="focus-input100" data-placeholder="Username"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Masukkan password">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="password" name="password">
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" type="submit">
                                Daftar
                            </button>
                        </div>
                    </div>
                </form>

                <div class="text-center p-t-115">
                    <span class="txt1">
                        Sudah mempunyai akun ? login disini
                    </span>
                    <br>
                </div>
                <div class="text-center">
                    <a class="txt2" href="{{ route('login.index') }}">
                        Login
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="{{ asset('bootLogin/vendor/jquery/jquery-3.2.1.min.js ') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('bootLogin/vendor/animsition/js/animsition.min.js ') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('bootLogin/vendor/bootstrap/js/popper.js ') }}"></script>
    <script src="{{ asset('bootLogin/vendor/bootstrap/js/bootstrap.min.js ') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('bootLogin/vendor/select2/select2.min.js ') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('bootLogin/vendor/daterangepicker/moment.min.js ') }}"></script>
    <script src="{{ asset('bootLogin/vendor/daterangepicker/daterangepicker.js ') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('bootLogin/vendor/countdowntime/countdowntime.js ') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('bootLogin/js/main.js ') }}"></script>

</body>

</html>
