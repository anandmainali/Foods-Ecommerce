<!-- footer start here -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3 col-xs-12">
                <img src="{{$info->logo}}" class="img-responsive" title="logo" alt="logo">
                <p>{!!$info->about!!}</p>
                <ul class="list-unstyled contact">
                    <li>
                        <a href="{{route('contact')}}">
                            <i class="fa fa-map-marker"></i> {{$info->address}}.
                        </a>
                    </li>
                    <li>
                        <a href="{{route('contact')}}">
                            <i class="icon_phone"></i> Phone - +{{$info->phone}}
                        </a>
                    </li>
                    <li>
                        <a href="{{route('contact')}}">
                            <i class="fa fa-envelope"></i> Email - {{$info->email}}
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
                            @foreach($categories as $category)
                            <li>
                                <a href="{{route('shop',['category'=>$category->slug])}}">{{$category->name}}</a>
                            </li>
                            @endforeach                            
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">
                        <h5>my account</h5>
                        <hr>
                        <ul class="list-unstyled">
                           <!--  <li>
                               <a href="">My Account</a>
                           </li> -->
                            <li>
                                <a href="#">Discount</a>
                            </li>
                            <li>
                                <a href="#">Person information</a>
                            </li>
                            <li>
                                <a href="{{ route('order.index') }}">Order History</a>
                            </li>
                            <li>
                                <a href="{{ route('wishlist.index') }}">Wishlist</a>
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
                    <p>© Copyright 2017, <span>{{$info->name}}</span>  All Rights Reserved.</p>
                </div>

            </div>
        </div>
    </div>
</footer>
<!-- footer end here -->
