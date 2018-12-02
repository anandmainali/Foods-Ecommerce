<!DOCTYPE html>
<html>

<!-- Mirrored from seffy.radixtouch.in/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Dec 2017 13:58:08 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="" />
    <title>Admin Panel Login</title>

    <!-- google font -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />

    <!-- icons -->
    <link href="{{asset('bootstrap/css/font-awesome.min.css')}}?>" rel="stylesheet">


    <!-- bootstrap -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}?>" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- style -->
    <link href="{{asset('bootstrap/css/login.css')}}?>" rel="stylesheet">


    <!-- favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" />
</head>
<body>
<div class="form-title">
    <h1>Login Form</h1>
</div>

<!-- Login Form-->
<div class="login-form text-center">
    <div class="toggle"><a href="{{route('index')}}"><i class="fa fa-times white-color"></i></a>
    </div>
    <div class="form formLogin">
       
        <h2>Login to your account</h2>
        <form class="form-signin" method="post" action="{{route('login')}}">
            {{csrf_field()}}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">                            
                                <input id="email" type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif                           
                        </div>

             <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">                         
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif                            
                        </div>                    
            <div class="form-group">  
                <div class="remember text-left">
                    <div class="checkbox checkbox-primary">
                        <input id="checkbox2" name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                        <label for="checkbox2">
                            Remember me
                        </label>
                    </div>
                </div>


                            
                        </div>
            <div class="form-group">
                            
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>           

        </form>
    </div>


</div>
<!-- start js include path -->
<script src="{{asset('bootstrap/js/jquery.min.js')}}?>"></script>
<script src="{{asset('bootstrap/js/login.js')}}?>"></script>
<script src="{{asset('bootstrap/js/pages.js')}}?>"></script>
<script src="{{ asset('js/app.js') }}"></script>
<!-- end js include path -->
</body>

<!-- Mirrored from seffy.radixtouch.in/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Dec 2017 13:58:09 GMT -->
</html>
