@extends('project.pages.master')
@section('body')
    <!-- bread-crumb start here -->
    <div class="bread-crumb">
        <img src="{{URL::to('project/images/top-banner.jpg')}}" class="img-responsive" alt="banner-top" title="banner-top">
        <div class="container">
            <div class="matter">
                <h2><span>Organic</span> Shop</h2>
                <ul class="list-inline">
                    <li>
                        <a href="{{ route('index') }}">HOME</a>
                    </li>
                    <li>
                        <a href="{{ route('shop') }}">Shop</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- bread-crumb end here -->

    <!-- shop detail start here -->
    <div class="shopdetail">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                    <div class="row">
                        <!--thumb image code start-->
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">
                            <a class="thumbnail" href=""><img src="{{$product->image}}" title="img" alt="img" /></a>
                          
                        </div>
                        <!--thumb image code end-->

                        <!--Product detail code start-->
                        <div class="col-sm-8 col-md-8 col-lg-8 col-xs-12">
                            <h5>Organic <span>{{$product->name}}</span></h5>
                            
                            <p class="shortdes">
                                {!! $product->description !!}
                            </p>
                          
                            <hr>
                            <div class="price">
                                Rs.{{$product->newprice}}@if($product->unit)/{{$product->unit}}@endif
                            </div>
                            <hr>
                          
                            <div class="buttons">
                                @if(auth()->check())                                        
                                            <form action="{{route('wishlist.store')}}" method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" name="product_id" value="{{$product->id}}" />
                                            <input type="hidden" name="user_id" value="{{auth()->user()->id}}" />         
                                            <button type="submit" class="btn-default"><i class="icon_heart"></i></button>   
                                        </form>
                                @endif
                                <form action="{{route('cart.store')}}" method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" name="id" value="{{$product->id}}" />
                                            <input type="hidden" name="name" value="{{$product->name}}" />
                                            <input type="hidden" name="image" value="{{$product->image}}" />
                                            <input type="hidden" name="newprice" value="{{$product->newprice}}" />
                                            <input type="hidden" name="qty" value="1" />
                                            <button type="submit" class="btn-default"><i class="icon_cart"></i></button>    
                                        </form> 
                                
                                
                            </div>
                        </div>
                    </div>
                   
                    </div>
                    @include('project.include.recommendation')
            </div>
        </div>
    </div>
    <!-- shop end here -->



    @endsection
