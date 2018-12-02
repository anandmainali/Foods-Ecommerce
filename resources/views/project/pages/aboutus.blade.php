@extends('project.pages.master')
@section('body')
    <!-- bread-crumb start here -->
    <div class="bread-crumb">
        <img src="{{URL::to('project/images/top-banner.jpg')}}" class="img-responsive" alt="banner-top" title="banner-top">
        <div class="container">
            <div class="matter">
                <h2><span>Organic</span> About us</h2>
                <ul class="list-inline">
                    <li>
                        <a href="index-2.html">HOME</a>
                    </li>
                    <li>
                        <a href="aboutus.html">About us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- bread-crumb end here -->

    <!-- organic start here -->
    <div class="organic">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 commontop text-center">
                    <h4>
                        <i class="icon_star_alt"></i>
                        <i class="icon_star_alt"></i>
                        <i class="icon_star_alt"></i>
                        Welcome to organic store
                        <i class="icon_star_alt"></i>
                        <i class="icon_star_alt"></i>
                        <i class="icon_star_alt"></i>
                    </h4>
                    <p></p>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
                    <p class="des">We hear and see organic all around us these days. Some of us abide by a 100% purely organic lifestyle, while others may not believe that it is absolutely necessary. Eating organic is very important for many reasons, from keeping our bodies healthy to protection for the animals and our planet.</p>
                    <p class="des2"><i class="icon_quotations first"></i>The more natural or eco-based products you can introduce into your beauty regimen, the more beneficial it is for your skin. It's similar to introducing organic food into your daily diet.<i class="icon_quotations last"></i></p>
                    <p class="des">So, why go organic? Did you know that organic foods often have more beneficial nutrients, such as antioxidants, than their conventionally-grown counterparts? Individuals with allergies to foods, chemicals, or preservatives often find their symptoms lessen or even diminish when they eat only organic foods.</p>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
                    <img src="{{URL::to('project/images/about/lemon-banner.png')}}" class="img-responsive" alt="banner" title="banner" />
                </div>
            </div>
        </div>
    </div>
    <!-- organic end here -->

    <!-- abouttesti start here -->
    <div class="abouttesti">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 commontop text-center">
                    <h4>
                        <i class="icon_star_alt"></i>
                        <i class="icon_star_alt"></i>
                        <i class="icon_star_alt"></i>
                        Testimonial
                        <i class="icon_star_alt"></i>
                        <i class="icon_star_alt"></i>
                        <i class="icon_star_alt"></i>
                    </h4>
                </div>
                <div class="owl-carousel abtestimonail">
                    @foreach($testimonials as $testimonial)
                    <div class="item">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                            <div class="box">
                                <img src="{{$testimonial->photo}}" class="img-responsive img-circle" style="height: 100px;"  alt="img" title="img">
                                <p><i class="icon_quotations first"></i> {!! $testimonial->about !!} <i class="icon_quotations last"></i></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                   
                </div>
            </div>
        </div>
    </div>
    <!-- abouttesti end here -->

    <!-- chooseus start here -->
    <div class="chooseus">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 commontop text-center">
                    <h4>
                        <i class="icon_star_alt"></i>
                        <i class="icon_star_alt"></i>
                        <i class="icon_star_alt"></i>
                        why choose us
                        <i class="icon_star_alt"></i>
                        <i class="icon_star_alt"></i>
                        <i class="icon_star_alt"></i>
                    </h4>
                    <p></p>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                    <div class="box">
                        <ul class="list-unstyled">
                            <li>
                                <img src="{{URL::to('project/images/about/icon1.png')}}" class="img-responsive" alt="img" title="img">
                                <h3>Quality</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea repudiandae consequatur facilis at illum tempore pariatur magnam necessitatibus sequi nobis provident sapiente nihil aliquam dolorum sit, reprehenderit illo! Dignissimos, labore.</p>
                            </li>
                            <li>
                                <img src="{{URL::to('project/images/about/icon2.png')}}" class="img-responsive" alt="img" title="img">
                                <h3>Healthy</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea repudiandae consequatur facilis at illum tempore pariatur magnam necessitatibus sequi nobis provident sapiente nihil aliquam dolorum sit, reprehenderit illo! Dignissimos, labore.</p>
                            </li>
                            <li>
                                <img src="{{URL::to('project/images/about/icon3.png')}}" class="img-responsive" alt="img" title="img">
                                <h3>Fresh</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea repudiandae consequatur facilis at illum tempore pariatur magnam necessitatibus sequi nobis provident sapiente nihil aliquam dolorum sit, reprehenderit illo! Dignissimos, labore.</p>
                            </li>
                        </ul>
                        <img src="{{URL::to('project/images/about/medium-banner.png')}}" class="img-responsive vegbanner" alt="img" title="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- chooseus end here -->


    <!-- team start here -->
    @if(count($members)>0)
    <div class="team back">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 commontop text-center">
                    <h4>
                        <i class="icon_star_alt"></i>
                        <i class="icon_star_alt"></i>
                        <i class="icon_star_alt"></i>
                        our team members
                        <i class="icon_star_alt"></i>
                        <i class="icon_star_alt"></i>
                        <i class="icon_star_alt"></i>
                    </h4>
                    <p></p>
                </div>

                @foreach($members as $member)
                <div class="col-sm-3 col-md-3 col-lg-3 col-xs-12">
                    <div class="box">
                        <img src="{{$member->photo}}" class="img-responsive img-circle" style="height: 200px;" alt="img" title="img">
                        <h3>{{$member->name}}</h3>
                        <p>{{$member->post}}</p>
                        
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
    <!-- team end here -->

    <!-- carousel10 start here -->
    <div id="carousel10" class="owl-carousel aboutcarousel">
        <div class="item">
            <div class="box">
                <img class="img-responsive" src="{{URL::to('project/images/header3/logo-img1.png')}}" alt="logo" title="logo">
            </div>
        </div>
        <div class="item">
            <div class="box">
                <img class="img-responsive" src="{{URL::to('project/images/header3/logo-img2.png')}}" alt="logo" title="logo">
            </div>
        </div>
        <div class="item">
            <div class="box">
                <img class="img-responsive" src="{{URL::to('project/images/header3/logo-img3.png')}}" alt="logo" title="logo">
            </div>
        </div>
        <div class="item">
            <div class="box">
                <img class="img-responsive" src="{{URL::to('project/images/header3/logo-img4.png')}}" alt="logo" title="logo">
            </div>
        </div>
        <div class="item">
            <div class="box">
                <img class="img-responsive" src="{{URL::to('project/images/header3/logo-img5.png')}}" alt="logo" title="logo">
            </div>
        </div>
        <div class="item">
            <div class="box">
                <img class="img-responsive" src="{{URL::to('project/images/header3/logo-img1.png')}}" alt="logo" title="logo">
            </div>
        </div>
        <div class="item">
            <div class="box">
                <img class="img-responsive" src="{{URL::to('project/images/header3/logo-img2.png')}}" alt="logo" title="logo">
            </div>
        </div>
        <div class="item">
            <div class="box">
                <img class="img-responsive" src="{{URL::to('project/images/header3/logo-img3.png')}}" alt="logo" title="logo">
            </div>
        </div>
    </div>
    <!-- carousel10 end here -->


@endsection
