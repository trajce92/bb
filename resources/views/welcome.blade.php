<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BuilderBuddies</title>
        <!-- Bootstrap css -->
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('bootstrap/css/bootstrap-reboot.min.css') }}" rel="stylesheet">
        <link href="{{ asset('bootstrap/css/bootstrap-grid.min.css') }}" rel="stylesheet">
        <!-- Custom css -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!-- Bootstrap js -->
        <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container-fluid" id="login-page">
            <div class="row">
                <div class="col-md-4 align-self-center" id="left-column">
                    <div id="logo-wrapper">
                        <img src="{{ asset('images/logo.png') }}" alt="Builder-Buddies-Logo">
                    </div>
                    <form method="POST" action="{{ route('login') }}" id="login-form">
                        @csrf
                        <div class="form-group">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">

                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                       
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        
                            <button type="submit">
                                Login
                            </button>

                            <br>

                            <a href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                            <a href="{{ route('register') }}">
                                Register
                            </a>
                        </div>
                    </form>
                </div>
                <div class="col-md-8" id="right-column">
                    a
                </div>
            </div>
        </div>
    </body>
</html>
