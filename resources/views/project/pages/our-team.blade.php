@extends('project.pages.master')
@section('body')

    @include('project.include.bread-crumb')

    <!-- team start here -->
    <div class="team">
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
                    <p>Pellentesque sed posuere nisi. Nunc nec looreet mauris. Etiam valutpat ligula eu lacus varius scelerisque. Morbi fringilla euismod semper.</p>
                </div>








                <div class="col-sm-3 col-md-3 col-lg-3 col-xs-12">
                    <div class="box">
                        <img src="{{URL::to('project/images/about/team11.png')}}" class="img-responsive" alt="img" title="img">
                        <h3>John Doe</h3>
                        <p>Developer</p>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="social_facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/" target="_blank">
                                    <i class="social_twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/" target="_blank">
                                    <i class="social_googleplus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class="social_instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://in.linkedin.com/" target="_blank">
                                    <i class="social_linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3 col-xs-12">
                    <div class="box">
                        <img src="{{URL::to('project/images/about/team12.png')}}" class="img-responsive" alt="img" title="img">
                        <h3>John Doe</h3>
                        <p>Developer</p>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="social_facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/" target="_blank">
                                    <i class="social_twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/" target="_blank">
                                    <i class="social_googleplus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class="social_instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://in.linkedin.com/" target="_blank">
                                    <i class="social_linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team end here -->

    @endsection