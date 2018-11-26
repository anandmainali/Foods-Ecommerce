@extends('project.pages.master')
@section('body')

    @include('project.include.bread-crumb')
    <!-- contactus start here -->
    <div class="contactus">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 commontop text-center">
                    <h4>
                        <i class="icon_star_alt"></i>
                        <i class="icon_star_alt"></i>
                        <i class="icon_star_alt"></i>
                        Contact us
                        <i class="icon_star_alt"></i>
                        <i class="icon_star_alt"></i>
                        <i class="icon_star_alt"></i>
                    </h4>
                    <p>Pellentesque sed posuere nisi. Nunc nec looreet mauris.</p>
                </div>
                <div class="col-sm-offset-2 col-md-8 col-sm-8  col-xs-12">
                    <form method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="name" value="" id="input-name" class="form-control" placeholder="Name *"/>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="email" value="" id="input-email" class="form-control" placeholder="Email *"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="text" name="subject" value="" id="input-subject" class="form-control" placeholder="Subject *"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12 col-md-12 col-xs-12">
                                <i class="icofont icofont-pencil-alt-5"></i>
                                <textarea name="enquiry" id="input-enquiry" class="form-control" placeholder="Your Comment"></textarea>
                            </div>
                        </div>
                        <div class="buttons text-right">
                            <input class="btn btn-primary" type="submit" value="Send Message" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- contactus end here -->

    <!-- address start here -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="address">
                    <ul class="list-inline">
                        <li>
                            <i class="icon_map_alt"></i>
                            {{$info->address}}
                        </li>
                        <li>
                            <i class="fa fa-envelope-o"></i>
                           {{$info->email}}
                        </li>
                        <li>
                            <i class="icon_mobile"></i>
                            {{$info->phone}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- address end here -->

    <!-- map start here -->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d219104.85983086875!2d75.71658808151895!3d30.90026973769041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a837462345a7d%3A0x681102348ec60610!2sLudhiana%2C+Punjab!5e0!3m2!1sen!2sin!4v1482266274532"></iframe>
    </div>
    <!-- map end here -->

    @endsection
