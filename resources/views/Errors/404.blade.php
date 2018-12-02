<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <<title>404 Error</title>
    <!-- google font -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/login.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>
    <div class="form-title">
        <h1>Page Not Found</h1>
    </div>
    <!-- Login Form-->
    <div class="page-404-form text-center">
        <div class="toggle"><a href="{{route('index')}}"><i class="fa fa-times white-color"></i></a>
        </div>
        <div class="form">
            <h1>404</h1>
            <h3>Sorry but we couldn't find this page</h3>
            <p>This page you are looking for does not exist</p>

            <br><br>
        </div>
    </div>
</div><br><br><br><br><br><br><br><br><br><br>
<!-- start js include path -->
<script src="{{asset('bootstrap/js/jquery.min.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('bootstrap/js/pages.js')}}"></script>
<!-- end js include path -->
</body>


</html>
