
<!--top start here -->
<div class="top">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                <ul class="list-inline pull-left icon">
                    <li>
                        <a href="{{ route('contact') }}">
                            <i class="icon_phone"></i> Call us : {{$info->phone}}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">
                            <i class="fa fa-envelope"></i> Email : {{$info->email}}
                        </a>
                    </li>
                </ul>
                <ul class="list-inline pull-right  icons">
                    <li class="dropdown cart">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon_cart"></i> Cart</a>
                        <ul class="dropdown-menu">
                            <li>
                                <table class="table">
                                    <tbody>
                                        @foreach(Cart::content() as $product)
                                    <tr>
                                        <td class="text-center">
                                            <a href="{{ route('shop_detail',$product->id) }}">
                                            <img src="{{$product->model->image}}" class="img-responsive" alt="img" title="img" /></a>
                                        </td>
                                        <td class="text-left">
                                            <a href="{{ route('shop_detail',$product->id) }}">{{$product->name}}</a>
                                            <p> Rs.{{$product->price}}</p>
                                        </td>
                                        <td class="text-center">
                                            <form action="{{ route('cart.remove',$product->rowId) }}" method="post">
                                           {{csrf_field()}}
                                             <button type="submit" title="Remove" class="btn btn-danger btn-xs"><i class="icon_close"></i></button>                                       
                                        </form> 
                                        </td>
                                    </tr>                                    
                                   @endforeach
                                    <tr>
                                        <td class="text-left" colspan="3">
                                            <h4><i class="icofont icofont-ui-delete"></i> <a href="{{ route('cart.destroy') }}">Clear your cart</a> <span class="text-right">Sub Total - Rs.{{Cart::total()}}</span></h4>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="buttons">
                                    <button class="btn-primary" type="button" onclick="location.href='{{route('cart.index')}}'"><i class="icon_cart"></i> View Cart</button>
                                    @if(count(Cart::content())>0)
                                    <button class="btn-primary" type="button" onclick="location.href='{{ route('checkout.index') }}'"><i class="icon_box-checked"></i> Checkout</button>
                                    @endif
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown login">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon_profile"></i> My Account</a>
                        <ul class="dropdown-menu">
                            <!-- <li>
                                <button type="button" class="fac">Facebook</button>
                                <button type="button" class="go">Google+</button>
                            </li> -->
                           @if(Auth::user())
                            <!-- <li>
                                <a href="#"><i class="icon_profile"></i>My Account</a>
                            </li> -->
                            <li>
                                <a href="{{ route('order.index') }}"><i class="icon_archive"></i>My Orders</a>
                            </li>
                            <li>
                                <a href="{{ route('wishlist.index') }}"><i class="icon_heart"></i>My Wishlists</a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"><i class="fa fa-power-off"></i>Logout</a>
                            </li>
                          @else
                            <li class="des text-center">If you are a new user</li>
                            
                            <li class="text-center">
                                <a href="{{ route('signup') }}">Register Now</a>
                            </li>
                            <li>
                                <button class="btn" type="button" onclick="location.href='{{ route('signin') }}'">Login</button>
                            </li>
                            @endif                  
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
                <div id="logo" >
                    <a href="{{route('index')}}">
                        <img class="img-responsive" src="{{$info->logo}}"  alt="logo" title="logo" />
                    </a>
                </div>
            </div>
            <div class="col-md-10 col-sm-10 col-lg-10 col-xs-12">
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
                                    <a href="{{route('index')}}">Home</a>

                                </li>
                                <li class="dropdown topheading">
                                    <a href="{{ route('shop') }}">Shop</a>
                                </li>
                                <li>
                                    <a href="{{route('about')}}">About us</a>
                                </li>
                                <li>
                                    <a href="{{route('contact')}}">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- menu end here -->
            </div>
            <div class="col-md-2 col-sm-2 col-lg-2 col-xs-12">
                <form class="navbar-form" action="{{ route('search') }}">                    
                      <input type="text" name="query" class="form-control" placeholder="Search">                    
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </form>
               
            </div>
        </div>
    </div>
</header>
<!-- header end here -->
