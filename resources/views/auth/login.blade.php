<html>
<head>
    <title>Login - E-learning</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('login1/css/bootstrap.min.css ') }}">
    <style>
        .form-signin
        {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        .form-signin .form-signin-heading, .form-signin .checkbox
        {
            margin-bottom: 10px;
        }
        .form-signin .checkbox
        {
            font-weight: normal;
        }
        .form-signin .form-control
        {
            position: relative;
            font-size: 16px;
            height: auto;
            padding: 10px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .form-signin .form-control:focus
        {
            z-index: 2;
        }
        .form-signin input[type="text"]
        {
            margin-bottom: -1px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }
        .form-signin input[type="password"]
        {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        .account-wall
        {
            padding: 18px 0px 20px 0px;
            background-color: #f7f7f7;
            -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        }
        .login-title
        {
            color: #000000;
            font-size: 18px;
            font-weight: 400;
            display: block;
        }
        .profile-img
        {
            width: 96px;
            height: 96px;
            margin: 0 auto 10px;
            display: block;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
        }
        .need-help
        {
            margin-top: 10px;
        }
        .new-account
        {
            display: block;
            margin-top: 10px;
        }.text-danger{
         font-color: #d9534f;   
        }

    </style>
    <link rel="icon" type="icon" href="{{ asset('icon/index.png')}}">
</head>
<body background="{{ asset('login1/images/background.jpg ') }}" >
<div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4 panel-primary">
            <div class="panel-heading"><h1 class="text-center login-title">Masuk Administrator</h1></div>
            <div class="account-wall">
                <img class="profile-img" src="{{ asset('login1/images/295128.png') }}"
                    alt="">    
                <form class="form-signin" method="POST" action="{{ route('login') }}">
                    @csrf

                <div class="form-group">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Masukan E-mail Anda" required autofocus>

                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                    
                </div>
                <div class="form-group">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Masukan Password Anda" required>

                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                    <strong class="text-danger">{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>

                <button class="btn btn-lg btn-primary btn-block" name="login" id="btn-login" type="submit">
                    Masuk</button>

                <a href="/" class="pull-right need-help">Home</a><span class="clearfix"></span>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ asset('login1/js/jquery-3.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('login1/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('login1/js/jquery.validate.min.js') }}"></script>
</body>
</html>