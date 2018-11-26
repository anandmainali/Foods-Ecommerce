{{--@extends('project.pages.master')
@section('body')

    @include('project.include.slider')
    @include('project.include.products')


    @endsection--}}

@include('project.include.head')
@include('project.include.header')
@include('project.include.slider')
@include('project.include.products')
@include('project.include.season')
@include('project.include.deals')
@include('project.include.vegetable')
@include('project.include.testimonials')
@include('project.include.shipping')


@include('project.include.footer')
@include('project.include.foot')

{{--


        <!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ocsolutions.co.in/html/organic_food/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 May 2018 16:31:24 GMT -->
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Home</title>
<!-- Bootstrap stylesheet -->
<link href="{{URL::to('project/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
<!-- crousel css -->
<link href="{{URL::to('project/js/owl-carousel/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
<!--bootstrap select-->
<link href="{{URL::to('project/js/dist/css/bootstrap-select.css')}}" rel="stylesheet" type="text/css" />
<!-- font -->
<link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,400,500,600,700,800,900" rel="stylesheet">
<!-- font-awesome -->
<link href="{{URL::to('project/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{URL::to('project/css/ele-style.css')}}" rel="stylesheet" type="text/css"/>
<!-- stylesheet -->
<link href="{{URL::to('project/css/style.css')}}" rel="stylesheet" type="text/css"/>
</head>
<body>
<!--top start here -->
<div class="top">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                <ul class="list-inline pull-left icon">
                    <li>
                        <a href="contactus.html">
                            <i class="icon_phone"></i> Call us : +123 456 7890
                        </a>
                    </li>
                    <li>
                        <a href="contactus.html">
                            <i class="fa fa-envelope"></i> Email : organicfoodsfruits@gmail.com
                        </a>
                    </li>
                </ul>
                <ul class="list-inline pull-right  icons">
                    <li class="dropdown currency">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon_cog"></i> Setting</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a href="#"><i class="fa fa-usd"></i> Currency</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">&#8364; Euro</a>
                                    </li>
                                    <li>
                                        <a href="#">&#163; Pound Sterling</a>
                                    </li>
                                    <li>
                                        <a href="#">$ US Dollar</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#"><i class="icon_globe-2"></i> Language</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">English</a>
                                    </li>
                                    <li>
                                        <a href="#">Hindi</a>
                                    </li>
                                    <li>
                                        <a href="#">Punjabi</a>
                                    </li>
                                    <li>
                                        <a href="#">Urdu</a>
                                    </li>
                                    <li>
                                        <a href="#">Tamil</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown cart">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon_cart"></i> Cart</a>
                        <ul class="dropdown-menu">
                            <li>
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td class="text-center">
                                            <img src="images/header1/deal-img6.png" class="img-responsive" alt="img" title="img" />
                                        </td>
                                        <td class="text-left">
                                            <a href="#">Your Product Title</a>
                                            <p>1 x $ 15.00</p>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" title="Remove" class="btn btn-danger btn-xs"><i class="icon_close"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <img src="images/header1/deal-img3.png" class="img-responsive" alt="img" title="img" />
                                        </td>
                                        <td class="text-left">
                                            <a href="#">Your Product Title</a>
                                            <p>1 x $ 15.00</p>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" title="Remove" class="btn btn-danger btn-xs"><i class="icon_close"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <img src="images/header1/deal-img1.png" class="img-responsive" alt="img" title="img" />
                                        </td>
                                        <td class="text-left">
                                            <a href="#">Your Product Title</a>
                                            <p>1 x $ 15.00</p>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" title="Remove" class="btn btn-danger btn-xs"><i class="icon_close"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left" colspan="3">
                                            <h4><i class="icofont icofont-ui-delete"></i> Clear your cart <span class="text-right">Sub Total - $ 45.00</span></h4>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="buttons">
                                    <button class="btn-primary" type="button" onclick="location.href='shoppingcart.html'"><i class="icon_cart"></i> View Cart</button>
                                    <button class="btn-primary" type="button" onclick="location.href='checkout.html'"><i class="icon_box-checked"></i> Checkout</button>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown login">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon_profile"></i> My Account</a>
                        <ul class="dropdown-menu">
                            <li>
                                <button type="button" class="fac">Facebook</button>
                                <button type="button" class="go">Google+</button>
                            </li>
                            <li>
                                <a href="#"><i class="icon_profile"></i>My Account</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_archive"></i>My Orders</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_heart"></i>Wishlist</a>
                            </li>
                            <li class="des text-center">If you are a new user</li>
                            <li class="text-center">
                                <a href="#">Register Now</a>
                            </li>
                            <li>
                                <button class="btn" type="button" onclick="location.href='login_register.html'">Login</button>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--top end here -->

<!-- header start here-->
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                <div id="logo">
                    <a href="index-2.html">
                        <img class="img-responsive" src="images/header1/logo.png" alt="logo" title="logo" />
                    </a>
                </div>
            </div>
            <div class="col-md-11 col-sm-11 col-lg-11 col-xs-12">
                <!-- menu start here -->
                <div id="menu">
                    <nav class="navbar">
                        <div class="navbar-header">
                            <span class="menutext visible-xs">Menu</span>
                            <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="btn btn-navbar navbar-toggle" type="button"><i class="fa fa-bars"></i></button>
                        </div>
                        <div class="collapse navbar-collapse navbar-ex1-collapse padd0">
                            <ul class="nav navbar-nav text-right">
                                <li class="dropdown topheader">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                                    <div class="dropdown-menu">
                                        <h2><span>Offer Deals : </span> Get flat 25% on Vegetables | Get 16% off organic healthy  foods | Get 28% off in organic meat.</h2>
                                        <div class="col-sm-3">
                                            <h4>Vegetables</h4>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="shop.html"><i class="fa fa-circle"></i> Lorem ipsum</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"><i class="fa fa-circle"></i> Sed eget</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"><i class="fa fa-circle"></i> Curabitur <span class="new">New</span></a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"><i class="fa fa-circle"></i> Nulla ut</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"><i class="fa fa-circle"></i> Duis leo <span class="hot">Hot</span></a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"><i class="fa fa-circle"></i> Integer diam</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h4>Fruits</h4>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="shop.html"><i class="fa fa-circle"></i> Lorem ipsum <span class="new">New</span></a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"><i class="fa fa-circle"></i> Sed eget</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"><i class="fa fa-circle"></i> Curabitur</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"><i class="fa fa-circle"></i> Nulla ut <span class="hot">Hot</span></a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"><i class="fa fa-circle"></i> Duis leo</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"><i class="fa fa-circle"></i> Integer diam</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h4>Meats</h4>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="shop.html"><i class="fa fa-circle"></i> Lorem ipsum</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"><i class="fa fa-circle"></i> Sed eget <span class="new">New</span></a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"><i class="fa fa-circle"></i> Curabitur</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"><i class="fa fa-circle"></i> Nulla ut</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"><i class="fa fa-circle"></i> Duis leo</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html"><i class="fa fa-circle"></i> Integer diam <span class="hot">Hot</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <img src="images/header1/free-shipping.png" class="img-responsive" alt="img" title="img" />
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="aboutus.html">About us</a>
                                </li>
                                <li class="dropdown topheading">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop</a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-inner">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="shop.html">Shop</a>
                                                </li>
                                                <li>
                                                    <a href="shopdetail.html">Shop Detail</a>
                                                </li>
                                                <li>
                                                    <a href="shoppingcart.html">Shopping cart</a>
                                                </li>
                                                <li>
                                                    <a href="checkout.html">Checkout</a>
                                                </li>
                                                <li>
                                                    <a href="confirmation.html">Confirmation</a>
                                                </li>
                                                <li>
                                                    <a href="login_register.html">Login & Register</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown topheading">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages </a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-inner">
                                            <ul class="list-unstyled">
                                                <li class="dropdown-submenu">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Headers</a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="index-2.html">Header 1</a>
                                                        </li>
                                                        <li>
                                                            <a href="header2.html">Header 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="header3.html">Header 3</a>
                                                        </li>
                                                        <li>
                                                            <a href="header4.html">Header 4</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="search.html">Search</a>
                                                </li>
                                                <li>
                                                    <a href="testimonial.html">Testimonials</a>
                                                </li>
                                                <li>
                                                    <a href="ourteam.html">Our Team</a>
                                                </li>
                                                <li>
                                                    <a href="comingsoon.html">Coming soon</a>
                                                </li>
                                                <li>
                                                    <a href="error-404.html">Error-404</a>
                                                </li>
                                                <li>
                                                    <a href="faq.html">Faq</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="gallery.html">Gallery</a>
                                </li>
                                <li class="dropdown topheading">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-inner">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="blog.html">Blog</a>
                                                </li>
                                                <li>
                                                    <a href="blog-detail.html">Blog Detail</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="contactus.html">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- menu end here -->
            </div>
            <div class="col-md-1 col-sm-1 col-lg-1 col-xs-12">
                <div id="srch" class="input-group">
                    <input type="text" name="search" value="search" placeholder="search" class="form-control input-lg" />
                    <span class="input-group-btn">
					<button type="button" class="btn btn-default btn-lg"><i class="icon_search"></i></button>
					</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end here -->

<!-- slider start here -->
<div class="slide">
    <div class="slideshow owl-carousel">
        <div class="item">
            <img src="{{URL::to('project/images/header1/slider.png')}}" alt="banner" title="banner" class="img-responsive"/>
        </div>
        <div class="item">
            <img src="{{URL::to('project/images/header1/slider.png')}}" alt="banner" title="banner" class="img-responsive"/>
        </div>
        <div class="item">
            <img src="{{URL::to('project/images/header1/slider.png')}}" alt="banner" title="banner" class="img-responsive"/>
        </div>
    </div>
</div>
<!-- slider end here -->

<!-- product start here -->
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 commontop text-center">
            <p>Fresh Foods</p>
            <h4>
                <i class="icon_star_alt"></i>
                <i class="icon_star_alt"></i>
                <i class="icon_star_alt"></i>
                Our products
                <i class="icon_star_alt"></i>
                <i class="icon_star_alt"></i>
                <i class="icon_star_alt"></i>
            </h4>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
            <ul class="nav nav-tabs list-inline">
                <li class="active">
                    <a href="#all" data-toggle="tab" aria-expanded="true">Organic <span>All</span></a>
                </li>
                <li class="">
                    <a href="#vegetables" data-toggle="tab" aria-expanded="false">Organic <span>Vegetables</span></a>
                </li>
                <li class="">
                    <a href="#fruits" data-toggle="tab" aria-expanded="false">Organic <span>Fruits</span></a>
                </li>
                <li class="">
                    <a href="#meats" data-toggle="tab" aria-expanded="false">Organic <span>Meats</span></a>
                </li>
                <li class="">
                    <a href="#foods" data-toggle="tab" aria-expanded="false">Organic <span>Dried Foods</span></a>
                </li>
                <li class="">
                    <a href="#juice" data-toggle="tab" aria-expanded="false">Organic <span>Juice</span></a>
                </li>
            </ul>
            <div  class="tab-content">
                <div class="tab-pane active" id="all">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/1.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover1">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons1" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/2.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover2">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons2" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/3.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover3">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons3" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/4.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover4">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons4" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/5.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover5">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons5" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/6.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover6">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons6" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/7.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover7">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons7" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/8.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover8">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons8" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="vegetables">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/2.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover9">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons9" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/1.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover10">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons10" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/5.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover11">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons11" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/3.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover12">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons12" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/4.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover13">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons13" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/8.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover14">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons14" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/6.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover15">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons15" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/7.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover16">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons16" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="fruits">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/1.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover17">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons17" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/2.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover18">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons18" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/3.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover19">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons19" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/4.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover20">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons20" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/5.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover21">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons21" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/6.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover22">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons22" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/7.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover23">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons23" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/8.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover24">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons24" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="meats">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/2.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover25">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons25" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/1.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover26">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons26" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/5.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover27">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons27" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/3.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover28">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons28" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/4.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover29">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons29" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/8.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover30">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons30" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/6.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover31">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons31" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/7.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover32">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons32" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="foods">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/1.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover33">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons33" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/2.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover34">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons34" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/3.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover35">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons35" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/4.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover36">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons36" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/5.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover37">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons37" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/6.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover38">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons38" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/7.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover39">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons39" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/8.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover40">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons40" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="juice">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/2.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover41">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons41" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/1.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover42">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons42" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/5.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover43">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons43" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/3.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover44">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons44" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/4.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover45">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons45" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/8.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover46">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons46" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/6.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover47">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons47" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="shop.html">
                                        <img src="images/product/7.png" alt="image" title="image" class="img-responsive" />
                                    </a>
                                    <div class="onhover onhover48">
                                        <ul class="list-unstyled">
                                            <li>
                                                <button type="button"><i class="icon_cart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_heart"></i></button>
                                            </li>
                                            <li>
                                                <button type="button"><i class="icon_piechart"></i></button>
                                            </li>
                                        </ul>
                                        <button class="icons48" type="button"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="shop.html">Organic <span>Onion</span></a></h4>
                                    <p class="price">$30.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product end here -->

<!-- season start here -->
<div class="season">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 commontop text-center">
                <p>Fresh Foods</p>
                <h4>
                    <i class="icon_star_alt"></i>
                    <i class="icon_star_alt"></i>
                    <i class="icon_star_alt"></i>
                    what in season
                    <i class="icon_star_alt"></i>
                    <i class="icon_star_alt"></i>
                    <i class="icon_star_alt"></i>
                </h4>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
                <div class="box1">
                    <div class="image">
                        <img src="images/header1/summer-season.png" alt="image" title="image" class="img-responsive" />
                        <div class="onhover">
                            <p>Summer</p>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                <div class="box2">
                    <div class="image">
                        <img src="images/header1/autumn-season.png" alt="image" title="image" class="img-responsive" />
                        <div class="inhover">
                            <h5>fresh fruits</h5>
                            <p>The worlds healthiest foods</p>
                        </div>
                        <div class="onhover">
                            <p>Autumn</p>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
                <div class="box3">
                    <div class="image">
                        <img src="images/header1/winter-season.png" alt="image" title="image" class="img-responsive" />
                        <div class="onhover">
                            <p>Winter</p>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- season end here -->

<!-- deals start here -->
<div class="deals">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 commontop text-center">
                <p>Fresh Foods</p>
                <h4>
                    <i class="icon_star_alt"></i>
                    <i class="icon_star_alt"></i>
                    <i class="icon_star_alt"></i>
                    Deals of the day
                    <i class="icon_star_alt"></i>
                    <i class="icon_star_alt"></i>
                    <i class="icon_star_alt"></i>
                </h4>
            </div>
            <div class="col-md-5 col-lg-5 col-sm-5 col-xs-12">
                <div class="left">
                    <h3>Organic Foods <span>50%</span> off</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac imperdiet massa. Suspendisse ut sem facilises, porta erat sed, maximus odio.</p>
                    <img src="images/header1/mixed.png" alt="image" title="image" class="img-responsive" />
                    <ul class="list-inline">
                        <li>01<br><span>Days</span></li>
                        <li>20<br><span>Hours</span></li>
                        <li>34<br><span>Mins</span></li>
                        <li>48<br><span>Secs</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-7 col-lg-7 col-sm-7 col-xs-12">
                <div class="row">
                    <div class="deal owl-carousel">
                        <div class="item">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="shop.html">
                                            <img src="images/header1/deal-img1.png" alt="image" title="image" class="img-responsive" />
                                        </a>
                                        <div class="onhover">
                                            <p>-50%</p>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h4>Product title here</h4>
                                        <p>Vegetables</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="fa fa-expand"></i></button>
                                        </div>
                                        <button class="btn-primary" type="button"><i class="icon_cart"></i> <span>Add to cart</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="shop.html">
                                            <img src="images/header1/deal-img2.png" alt="image" title="image" class="img-responsive" />
                                        </a>
                                        <div class="onhover">
                                            <p>-50%</p>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h4>Product title here</h4>
                                        <p>Vegetables</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="fa fa-expand"></i></button>
                                        </div>
                                        <button class="btn-primary" type="button"><i class="icon_cart"></i> <span>Add to cart</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="shop.html">
                                            <img src="images/header1/deal-img3.png" alt="image" title="image" class="img-responsive" />
                                        </a>
                                        <div class="onhover">
                                            <p>-50%</p>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h4>Product title here</h4>
                                        <p>Vegetables</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="fa fa-expand"></i></button>
                                        </div>
                                        <button class="btn-primary" type="button"><i class="icon_cart"></i> <span>Add to cart</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="shop.html">
                                            <img src="images/header1/deal-img4.png" alt="image" title="image" class="img-responsive" />
                                        </a>
                                        <div class="onhover">
                                            <p>-50%</p>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h4>Product title here</h4>
                                        <p>Vegetables</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="fa fa-expand"></i></button>
                                        </div>
                                        <button class="btn-primary" type="button"><i class="icon_cart"></i> <span>Add to cart</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="shop.html">
                                            <img src="images/header1/deal-img5.png" alt="image" title="image" class="img-responsive" />
                                        </a>
                                        <div class="onhover">
                                            <p>-50%</p>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h4>Product title here</h4>
                                        <p>Vegetables</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="fa fa-expand"></i></button>
                                        </div>
                                        <button class="btn-primary" type="button"><i class="icon_cart"></i> <span>Add to cart</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="shop.html">
                                            <img src="images/header1/deal-img6.png" alt="image" title="image" class="img-responsive" />
                                        </a>
                                        <div class="onhover">
                                            <p>-50%</p>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h4>Product title here</h4>
                                        <p>Vegetables</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="fa fa-expand"></i></button>
                                        </div>
                                        <button class="btn-primary" type="button"><i class="icon_cart"></i> <span>Add to cart</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="shop.html">
                                            <img src="images/header1/deal-img1.png" alt="image" title="image" class="img-responsive" />
                                        </a>
                                        <div class="onhover">
                                            <p>-50%</p>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h4>Product title here</h4>
                                        <p>Vegetables</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="fa fa-expand"></i></button>
                                        </div>
                                        <button class="btn-primary" type="button"><i class="icon_cart"></i> <span>Add to cart</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="shop.html">
                                            <img src="images/header1/deal-img2.png" alt="image" title="image" class="img-responsive" />
                                        </a>
                                        <div class="onhover">
                                            <p>-50%</p>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h4>Product title here</h4>
                                        <p>Vegetables</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="fa fa-expand"></i></button>
                                        </div>
                                        <button class="btn-primary" type="button"><i class="icon_cart"></i> <span>Add to cart</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="shop.html">
                                            <img src="images/header1/deal-img3.png" alt="image" title="image" class="img-responsive" />
                                        </a>
                                        <div class="onhover">
                                            <p>-50%</p>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h4>Product title here</h4>
                                        <p>Vegetables</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="fa fa-expand"></i></button>
                                        </div>
                                        <button class="btn-primary" type="button"><i class="icon_cart"></i> <span>Add to cart</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="shop.html">
                                            <img src="images/header1/deal-img4.png" alt="image" title="image" class="img-responsive" />
                                        </a>
                                        <div class="onhover">
                                            <p>-50%</p>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h4>Product title here</h4>
                                        <p>Vegetables</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="fa fa-expand"></i></button>
                                        </div>
                                        <button class="btn-primary" type="button"><i class="icon_cart"></i> <span>Add to cart</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="shop.html">
                                            <img src="images/header1/deal-img5.png" alt="image" title="image" class="img-responsive" />
                                        </a>
                                        <div class="onhover">
                                            <p>-50%</p>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h4>Product title here</h4>
                                        <p>Vegetables</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="fa fa-expand"></i></button>
                                        </div>
                                        <button class="btn-primary" type="button"><i class="icon_cart"></i> <span>Add to cart</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="shop.html">
                                            <img src="images/header1/deal-img6.png" alt="image" title="image" class="img-responsive" />
                                        </a>
                                        <div class="onhover">
                                            <p>-50%</p>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h4>Product title here</h4>
                                        <p>Vegetables</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="fa fa-expand"></i></button>
                                        </div>
                                        <button class="btn-primary" type="button"><i class="icon_cart"></i> <span>Add to cart</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- deals end here -->

<!-- vegetable start here -->
<div class="vegetable">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                <div class="commontop text-left">
                    <h4>
                        Fresh Vegetables
                        <i class="icon_star_alt"></i>
                        <i class="icon_star_alt"></i>
                        <i class="icon_star_alt"></i>
                    </h4>
                </div>
                <div class="row">
                    <div class="vegetables owl-carousel">
                        <div class="item">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="shop.html">
                                            <img src="images/header1/fresh_veg1.png" alt="image" title="image" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <h4>Title Here</h4>
                                        <p>Vegetables</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="fa fa-expand"></i></button>
                                            <button type="button"><i class="icon_cart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="shop.html">
                                            <img src="images/header1/fresh_veg2.png" alt="image" title="image" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <h4>Title Here</h4>
                                        <p>Vegetables</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="fa fa-expand"></i></button>
                                            <button type="button"><i class="icon_cart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="shop.html">
                                            <img src="images/header1/fresh_veg3.png" alt="image" title="image" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <h4>Title Here</h4>
                                        <p>Vegetables</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="fa fa-expand"></i></button>
                                            <button type="button"><i class="icon_cart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="shop.html">
                                            <img src="images/header1/fresh_veg4.png" alt="image" title="image" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <h4>Title Here</h4>
                                        <p>Vegetables</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="fa fa-expand"></i></button>
                                            <button type="button"><i class="icon_cart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="shop.html">
                                            <img src="images/header1/fresh_veg5.png" alt="image" title="image" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <h4>Title Here</h4>
                                        <p>Vegetables</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="fa fa-expand"></i></button>
                                            <button type="button"><i class="icon_cart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="shop.html">
                                            <img src="images/header1/fresh_veg6.png" alt="image" title="image" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <h4>Title Here</h4>
                                        <p>Vegetables</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="fa fa-expand"></i></button>
                                            <button type="button"><i class="icon_cart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="shop.html">
                                            <img src="images/header1/fresh_veg1.png" alt="image" title="image" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <h4>Title Here</h4>
                                        <p>Vegetables</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="fa fa-expand"></i></button>
                                            <button type="button"><i class="icon_cart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="shop.html">
                                            <img src="images/header1/fresh_veg2.png" alt="image" title="image" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <h4>Title Here</h4>
                                        <p>Vegetables</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="fa fa-expand"></i></button>
                                            <button type="button"><i class="icon_cart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="shop.html">
                                            <img src="images/header1/fresh_veg3.png" alt="image" title="image" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <h4>Title Here</h4>
                                        <p>Vegetables</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="fa fa-expand"></i></button>
                                            <button type="button"><i class="icon_cart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="shop.html">
                                            <img src="images/header1/fresh_veg4.png" alt="image" title="image" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <h4>Title Here</h4>
                                        <p>Vegetables</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="fa fa-expand"></i></button>
                                            <button type="button"><i class="icon_cart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="shop.html">
                                            <img src="images/header1/fresh_veg5.png" alt="image" title="image" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <h4>Title Here</h4>
                                        <p>Vegetables</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="fa fa-expand"></i></button>
                                            <button type="button"><i class="icon_cart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="shop.html">
                                            <img src="images/header1/fresh_veg6.png" alt="image" title="image" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <h4>Title Here</h4>
                                        <p>Vegetables</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="fa fa-expand"></i></button>
                                            <button type="button"><i class="icon_cart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                <div class="commontop text-left">
                    <h4>
                        Fresh Fruits
                        <i class="icon_star_alt"></i>
                        <i class="icon_star_alt"></i>
                        <i class="icon_star_alt"></i>
                    </h4>
                </div>
                <div class="row">
                    <div class="fruits owl-carousel">
                        <div class="item">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="shop.html">
                                            <img src="images/header1/fresh_fruit1.png" alt="image" title="image" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <h4>Title Here</h4>
                                        <p>Fruits</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="fa fa-expand"></i></button>
                                            <button type="button"><i class="icon_cart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="shop.html">
                                            <img src="images/header1/fresh_fruit2.png" alt="image" title="image" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <h4>Title Here</h4>
                                        <p>Fruits</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="fa fa-expand"></i></button>
                                            <button type="button"><i class="icon_cart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="shop.html">
                                            <img src="images/header1/fresh_fruit3.png" alt="image" title="image" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <h4>Title Here</h4>
                                        <p>Fruits</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="fa fa-expand"></i></button>
                                            <button type="button"><i class="icon_cart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="shop.html">
                                            <img src="images/header1/fresh_fruit4.png" alt="image" title="image" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <h4>Title Here</h4>
                                        <p>Fruits</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="fa fa-expand"></i></button>
                                            <button type="button"><i class="icon_cart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="shop.html">
                                            <img src="images/header1/fresh_fruit5.png" alt="image" title="image" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <h4>Title Here</h4>
                                        <p>Fruits</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="fa fa-expand"></i></button>
                                            <button type="button"><i class="icon_cart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="shop.html">
                                            <img src="images/header1/fresh_fruit6.png" alt="image" title="image" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <h4>Title Here</h4>
                                        <p>Fruits</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="fa fa-expand"></i></button>
                                            <button type="button"><i class="icon_cart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="shop.html">
                                            <img src="images/header1/fresh_fruit1.png" alt="image" title="image" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <h4>Title Here</h4>
                                        <p>Fruits</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="fa fa-expand"></i></button>
                                            <button type="button"><i class="icon_cart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="shop.html">
                                            <img src="images/header1/fresh_fruit2.png" alt="image" title="image" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <h4>Title Here</h4>
                                        <p>Fruits</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="fa fa-expand"></i></button>
                                            <button type="button"><i class="icon_cart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="shop.html">
                                            <img src="images/header1/fresh_fruit3.png" alt="image" title="image" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <h4>Title Here</h4>
                                        <p>Fruits</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="fa fa-expand"></i></button>
                                            <button type="button"><i class="icon_cart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="shop.html">
                                            <img src="images/header1/fresh_fruit4.png" alt="image" title="image" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <h4>Title Here</h4>
                                        <p>Fruits</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="fa fa-expand"></i></button>
                                            <button type="button"><i class="icon_cart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="shop.html">
                                            <img src="images/header1/fresh_fruit5.png" alt="image" title="image" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <h4>Title Here</h4>
                                        <p>Fruits</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="fa fa-expand"></i></button>
                                            <button type="button"><i class="icon_cart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box">
                                    <div class="image">
                                        <a href="shop.html">
                                            <img src="images/header1/fresh_fruit6.png" alt="image" title="image" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <h4>Title Here</h4>
                                        <p>Fruits</p>
                                        <div class="button-group">
                                            <button type="button"><i class="icon_heart"></i></button>
                                            <button type="button"><i class="fa fa-expand"></i></button>
                                            <button type="button"><i class="icon_cart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- vegetable end here -->

<!-- testimonail start here -->
<div class="testi">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 commontop text-center">
                <p>People says</p>
                <h4>
                    <i class="icon_star_alt"></i>
                    <i class="icon_star_alt"></i>
                    <i class="icon_star_alt"></i>
                    testimonials
                    <i class="icon_star_alt"></i>
                    <i class="icon_star_alt"></i>
                    <i class="icon_star_alt"></i>
                </h4>
            </div>
            <div class="col-sm-12 col-xs-12 owl-carousel testimonail">
                <div class="item">
                    <div class="box text-center">
                        <ul class="list-inline">
                            <li>
                                <img src="images/header1/test1.png" class="img-responsive" alt="img" title="img" />
                            </li>
                            <li>
                                <img src="images/header1/test2.png" class="img-responsive" alt="img" title="img" />
                            </li>
                            <li>
                                <img src="images/header1/test3.png" class="img-responsive" alt="img" title="img" />
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel venenatis eros. Integer ultricies dapibus nulla, ac malesuada erat pulvinar eget. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam sit amet mauris blandit, commodo est ac, tincidunt nisl. Ut semper non eros ut porta.</p>
                        <h4><i class="icon_profile"></i> John Doe</h4>
                        <span>(Web Designer)</span>
                    </div>
                </div>
                <div class="item">
                    <div class="box text-center">
                        <ul class="list-inline">
                            <li>
                                <img src="images/header1/test1.png" class="img-responsive" alt="img" title="img" />
                            </li>
                            <li>
                                <img src="images/header1/test2.png" class="img-responsive" alt="img" title="img" />
                            </li>
                            <li>
                                <img src="images/header1/test3.png" class="img-responsive" alt="img" title="img" />
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel venenatis eros. Integer ultricies dapibus nulla, ac malesuada erat pulvinar eget. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam sit amet mauris blandit, commodo est ac, tincidunt nisl. Ut semper non eros ut porta.</p>
                        <h4><i class="icon_profile"></i> John Doe</h4>
                        <span>(Web Designer)</span>
                    </div>
                </div>
                <div class="item">
                    <div class="box text-center">
                        <ul class="list-inline">
                            <li>
                                <img src="images/header1/test1.png" class="img-responsive" alt="img" title="img" />
                            </li>
                            <li>
                                <img src="images/header1/test2.png" class="img-responsive" alt="img" title="img" />
                            </li>
                            <li>
                                <img src="images/header1/test3.png" class="img-responsive" alt="img" title="img" />
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel venenatis eros. Integer ultricies dapibus nulla, ac malesuada erat pulvinar eget. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam sit amet mauris blandit, commodo est ac, tincidunt nisl. Ut semper non eros ut porta.</p>
                        <h4><i class="icon_profile"></i> John Doe</h4>
                        <span>(Web Designer)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- testimonail end here -->

<!-- blog start here -->
<div class="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 commontop text-center">
                <p>Latest news</p>
                <h4>
                    <i class="icon_star_alt"></i>
                    <i class="icon_star_alt"></i>
                    <i class="icon_star_alt"></i>
                    our blog
                    <i class="icon_star_alt"></i>
                    <i class="icon_star_alt"></i>
                    <i class="icon_star_alt"></i>
                </h4>
            </div>
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                <div class="box">
                    <div class="image">
                        <a href="blog-detail.html"><img class="img-responsive" src="images/header1/blog1.png" alt="image" title="image"></a>
                        <div class="onhover">
                            <p>5<br>June</p>
                        </div>
                    </div>
                    <div class="caption">
                        <h4>Post Title Here</h4>
                        <h6>Default category<span class="pull-right">by - john doe</span></h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur finibus erat semper sapien laoreet, mattis cursus lacus imperdiet. Suspendisse sagittis mi eget cursus pulvinar...</p>
                        <div class="button-group">
                            <button type="button"><i class="icon_heart"></i></button>
                            <button type="button"><i class="icon_comment"></i></button>
                            <hr>
                            <a class="pull-right" href="blog-detail.html">Read More <i class="arrow_carrot-2right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                <div class="box">
                    <div class="image">
                        <a href="blog-detail.html"><img class="img-responsive" src="images/header1/blog2.png" alt="image" title="image"></a>
                        <div class="onhover">
                            <p>5<br>June</p>
                        </div>
                    </div>
                    <div class="caption">
                        <h4>Post Title Here</h4>
                        <h6>Default category<span class="pull-right">by - john doe</span></h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur finibus erat semper sapien laoreet, mattis cursus lacus imperdiet. Suspendisse sagittis mi eget cursus pulvinar...</p>
                        <div class="button-group">
                            <button type="button"><i class="icon_heart"></i></button>
                            <button type="button"><i class="icon_comment"></i></button>
                            <hr>
                            <a class="pull-right" href="blog-detail.html">Read More <i class="arrow_carrot-2right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                <div class="box">
                    <div class="image">
                        <a href="blog-detail.html"><img class="img-responsive" src="images/header1/blog3.png" alt="image" title="image"></a>
                        <div class="onhover">
                            <p>5<br>June</p>
                        </div>
                    </div>
                    <div class="caption">
                        <h4>Post Title Here</h4>
                        <h6>Default category<span class="pull-right">by - john doe</span></h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur finibus erat semper sapien laoreet, mattis cursus lacus imperdiet. Suspendisse sagittis mi eget cursus pulvinar...</p>
                        <div class="button-group">
                            <button type="button"><i class="icon_heart"></i></button>
                            <button type="button"><i class="icon_comment"></i></button>
                            <hr>
                            <a class="pull-right" href="blog-detail.html">Read More <i class="arrow_carrot-2right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog end here -->

<!-- shipping start here -->
<div class="shipping">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                <div class="box">
                    <img class="img-responsive" src="images/header1/icon1.png" alt="icon" title="icon">
                    <h4>We Support 24/7</h4>
                    <p>Nullam tempus luctus erat vitae volutpat. Donec rhoncus.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                <div class="box">
                    <img class="img-responsive" src="images/header1/icon2.png" alt="icon" title="icon">
                    <h4>Daily Updates</h4>
                    <p>Nullam tempus luctus erat vitae volutpat. Donec rhoncus.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                <div class="box">
                    <img class="img-responsive" src="images/header1/icon3.png" alt="icon" title="icon">
                    <h4>Free Shipping</h4>
                    <p>Nullam tempus luctus erat vitae volutpat. Donec rhoncus.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- shipping end here -->

<!-- footer start here -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3 col-xs-12">
                <img src="images/header1/footer_logo.png" class="img-responsive" title="logo" alt="logo">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam congue quis quam eget efficitur. Vestibulum venenatis tortor ipsum, at venenatis tellus aliquet eu. Orci varius natoque penatibus...</p>
                <ul class="list-unstyled contact">
                    <li>
                        <a href="contactus.html">
                            <i class="fa fa-map-marker"></i> No 60 Lorem Street 6/2 Ludhiana city, India.
                        </a>
                    </li>
                    <li>
                        <a href="contactus.html">
                            <i class="icon_phone"></i> Phone - +123 456 7890
                        </a>
                    </li>
                    <li>
                        <a href="contactus.html">
                            <i class="fa fa-envelope"></i> Email - organicfoodsfruits@gmail.com
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9 col-sm-9 col-lg-9 col-xs-12">
                <div id="newsletter">
                    <form class="form-horizontal" name="subscribe">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="news">newsletter</span>
                                <input  value="" name="subscribe_email" id="subscribe_email" placeholder="Email" type="text">
                                <button class="btn btn-news" type="submit" value="submit">Subscribe Now</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">
                        <h5>Categories</h5>
                        <hr>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">Vegetables</a>
                            </li>
                            <li>
                                <a href="#">Fruits</a>
                            </li>
                            <li>
                                <a href="#">Meats</a>
                            </li>
                            <li>
                                <a href="#">Organic Foods</a>
                            </li>
                            <li>
                                <a href="#">Others</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">
                        <h5>my account</h5>
                        <hr>
                        <ul class="list-unstyled">
                            <li>
                                <a href="login_register.html">My Account</a>
                            </li>
                            <li>
                                <a href="#">Discount</a>
                            </li>
                            <li>
                                <a href="#">Person information</a>
                            </li>
                            <li>
                                <a href="#">Order History</a>
                            </li>
                            <li>
                                <a href="#">Wishlist</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">
                        <h5>Stay Connected</h5>
                        <hr>
                        <ul class="list-unstyled social">
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="social_facebook"></i> Facebook
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/" target="_blank">
                                    <i class="social_twitter"></i> Twitter
                                </a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/" target="_blank">
                                    <i class="social_googleplus"></i> Google+
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/" target="_blank">
                                    <i class="social_youtube"></i> Youtube
                                </a>
                            </li>
                            <li>
                                <a href="https://in.linkedin.com/" target="_blank">
                                    <i class="social_linkedin"></i> Linked In
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="powered">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12">
                    <p>© Copyright 2017, <span>Organic foods & fruits.</span>  All Rights Reserved.</p>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 text-right">
                    <ul class="list-inline">
                        <li>
                            <img src="images/card1.png" class="img-responsive" alt="card" title="card" />
                        </li>
                        <li>
                            <img src="images/card2.png" class="img-responsive" alt="card" title="card" />
                        </li>
                        <li>
                            <img src="images/card3.png" class="img-responsive" alt="card" title="card" />
                        </li>
                        <li>
                            <img src="images/card4.png" class="img-responsive" alt="card" title="card" />
                        </li>
                        <li>
                            <img src="images/card5.png" class="img-responsive" alt="card" title="card" />
                        </li>
                        <li>
                            <img src="images/card6.png" class="img-responsive" alt="card" title="card" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end here -->

<!-- jquery -->
<script src="{{URL::to('project/js/jquery.2.1.1.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{URL::to('project/bootstrap/js/bootstrap.min.js')}}"></script>
<!--bootstrap select-->
<script src="{{URL::to('project/js/dist/js/bootstrap-select.js')}}"></script>
<!--internal js-->
<script src="{{URL::to('project/js/internal.js')}}"></script>
<!-- owlcarousel js -->
<script src="{{URL::to('project/js/owl-carousel/owl_carousel.min.js')}}"></script>
</body>

<!-- Mirrored from ocsolutions.co.in/html/organic_food/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 May 2018 16:34:39 GMT -->
</html>--}}
