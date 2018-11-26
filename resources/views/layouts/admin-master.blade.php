
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard</title>
    
    <!-- google font -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />  
    <!-- icons -->
    <link href="{{asset('bootstrap/js/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/min/dropzone.min.css" rel="stylesheet">
    
    <!--bootstrap -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/css/bootstrap3/bootstrap-switch.min.css" rel="stylesheet">
    
    
    <!-- data tables -->
    <link href="{{asset('bootstrap/js/datatables/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css"/>
    

    <!-- Theme Styles -->
    <link href="{{asset('bootstrap/css/theme_style.css')}}" id="rt_style_components" rel="stylesheet">
    <link href="{{asset('bootstrap/css/plugins.min.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap/css/theme-color.css')}}" rel="stylesheet">
    <link href="{{ asset('bootstrap/js/summernote/summernote.css') }}" rel="stylesheet">
    
    <!-- Editor -->
     <!-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
         <script>tinymce.init({ selector:'textarea' });</script> -->
         <script src="//cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>
         <style>
         .sidemenu {
            overflow-y: scroll;
            height: 600px;
        }
    </style>

    <!-- favicon -->
    <link rel="shortcut icon" href="" /> 
</head>
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-blue">
   

    <div class="page-wrapper">
        <!-- start header -->
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
             <!-- logo start -->
             <div class="page-logo">
                <a href="">
                    <span class="logo-icon fa fa-shopping-cart fa-rotate-45"></span>
                    <span class="logo-default" >Admin</span> </a>
                </div>
                <!-- logo end -->
                <ul class="nav navbar-nav navbar-left in">
                    <li><a href="javascript:void(0)" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
                    
                </ul>
                <!-- start mobile menu -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
                <!-- end mobile menu -->
                <!-- start header menu -->
                <div class="top-menu">

                    <ul class="nav navbar-nav pull-right">
                        
                        
                        
                        <!-- start manage user dropdown -->
                        <li class="dropdown dropdown-user">
                            
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                @if(Auth::check())
                                    @if(Auth::user()->image)
                                        <img src="{{Auth::user()->image}}" alt="" class="img-circle" />
                                    @else
                                        <img src="/UserImage/default.png" alt="" class="img-circle" />
                                    @endif
                                <span class="username username-hide-on-mobile">{{Auth::user()->uname}}</span>
                                <i class="fa fa-angle-down"></i>
                                @endif
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="{{route('index')}}">
                                        <i class="fa fa-globe"></i> Visit Home </a>
                                    </li>
                                    <li>
                                        <a href="{{route('profile')}}">
                                            <i class="icon-user"></i> Profile </a>
                                        </li>
                                        <li>
                                            <a href="{{route('setting')}}">
                                                <i class="icon-settings"></i> Settings
                                            </a>
                                        </li>
                                        
                                        <li class="divider"> </li>
                                        
                                        <li>
                                            <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            <i class="fa fa-power-off"></i> Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    
                                </ul>
                            </li>
                            <!-- end manage user dropdown -->
                            
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end header -->
            
            <!-- start page container -->
            <div class="page-container">
                <!-- start sidebar menu -->
                
                <div class="sidebar-container">
                    <div class="sidemenu-container navbar-collapse collapse fixed-menu">
                        <div id="remove-scroll">
                            <ul class="sidemenu  page-header-fixed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                                <li class="sidebar-toggler-wrapper hide">
                                    <div class="sidebar-toggler">
                                        <span></span>
                                    </div>
                                </li>
                                <li class="sidebar-user-panel">
                                    <div class="user-panel">
                                        <div class="pull-left image">
                                            @if(Auth::user()->image)
                                        <img src="{{Auth::user()->image}}" alt="" class="img-circle" />
                                    @else
                                        <img src="/UserImage/default.png" alt="" class="img-circle" />
                                    @endif                                            
                                        </div>
                                        <div class="pull-left info">
                                            <p> {{Auth::user()->uname}}</p>
                                            <p>{{ucfirst(Auth::user()->utype)}}</p>
                                            
                                        </div>
                                    </div>
                                </li>
                                
                                <li class="nav-item">
                                    <a href="{{route('admin')}}" class="nav-link "> <i class="fa fa-tachometer"></i> <span class="title">Dashboard</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ url('/admin/order') }}" class="nav-link "> <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="title">Orders</span>
                                    </a>
                                </li>
                                
                                <li class="nav-item">
                                    <a href="{{ route('product.index') }}" class="nav-link "> <i class="fa fa-shopping-basket" aria-hidden="true"></i> <span class="title">Products</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('category.index') }}" class="nav-link "> <i class="fa fa-list-alt" aria-hidden="true"></i> <span class="title">Categories</span>
                                    </a>
                                </li>

                                <!-- <li class="nav-item">
                                    <a href="{{ route('subcategory.index') }}" class="nav-link "> <i class="fa fa-tags" aria-hidden="true"></i> <span class="title">Sub-Categories</span>
                                    </a>
                                </li> -->
                                
                                <li class="nav-item">
                                    <a href="{{route('slider.index')}}" class="nav-link "> <i class="fa fa-file-photo-o" aria-hidden="true"></i> <span class="title">Slider</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{route('member.index')}}" class="nav-link "> <i class="fa fa-users"></i>
                                        <span class="title">Team Members</span> 
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{route('customer.index')}}" class="nav-link "> <i class="fa fa-user"></i> <span class="title">Testimonials</span>
                                    </a>
                                </li>


                                <li class="nav-item">
                                    <a href="{{route('comment.index')}}" class="nav-link "> <i class="fa fa-comment"></i> <span class="title">Comments</span>
                                    </a>
                                </li>

                                @if(Auth::user()->utype === 'admin')
                                <li class="nav-item">
                                    <a href="{{route('user.index')}}" class="nav-link ">  <i class="fa fa-user"></i>
                                        <span class="title">Users</span>
                                    </a>
                                </li>
                                @endif
                                
                                <li class="nav-item">
                                    <a href="{{route('admin.info')}}" class="nav-link "> <i class="fa fa-info-circle"></i> <span class="title">Site Info.</span>
                                    </a>
                                </li>

                            </ul>
                            

                        </div>
                    </div>
                </div>
                <!-- end sidebar menu --> 
                <div class="page-content-wrapper">
                    <div class="page-content">
                        <div class="page-bar">
                            <div class="page-title-breadcrumb">
                                <div class=" pull-left">
                                    <div class="page-title">@yield('breadcrumb')</div>
                                    @if(session()->has('success'))
                                    <div class="alert alert-success"><i class="fa fa-info-circle" aria-hidden="true"></i> {{session()->get('success')}}</div>
                                    @endif
                                     @foreach($errors->all() as $error)
                                <div class="alert alert-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> {{$error}}</div>
                                @endforeach
                                </div>
                                <ol class="breadcrumb page-breadcrumb pull-right">
                                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ route('admin') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    </li>
                                    
                                    <li class="active">@yield('breadcrumb')</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-topline-aqua">
                                    <div class="card-head">
                                        <header></header>
                                        <div class="tools">
                                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                        </div>
                                    </div>

                                    @yield('content')

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page container -->

            <!-- start footer -->
            <div class="page-footer">
                <div class="page-footer-inner"> <h4>Developed By The Team of BIT.</h4>
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- end footer -->
        </div>
        <script src="{{asset('bootstrap/js/jquery.min.js')}}"></script>
        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('bootstrap/js/counterup/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('bootstrap/js/counterup/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('bootstrap/js/app.js')}}"></script>
        <script src="{{asset('bootstrap/js/layout.js')}}"></script>
        <script src="{{asset('bootstrap/js/theme-color.js')}}"></script>
        <script src="{{asset('bootstrap/js/login.js')}}"></script>
        <script src="{{asset('bootstrap/js/pages.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/js/bootstrap-switch.min.js"></script>
        <!-- Dropzone  -->   
        <script src="{{asset('bootstrap/js/dropzone.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/min/dropzone.min.js"></script>
        <script src="{{ asset('bootstrap/js/summernote/summernote.js') }} " type="text/javascript"></script>
        <!--  DataTables -->
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function() {
                $('#about').summernote();          

            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#info').summernote();          

            });
        </script>
        <script>
            $(document).ready( function () {
                $('#example4').DataTable();
            } );
        </script>
        <script>
            $("[name='featured']").bootstrapSwitch();
            $("[name='shipping_status']").bootstrapSwitch();
        </script>

    </body>

    </html>
    
    
    
