@extends('project.pages.master')
@section('body')

    @include('project.include.bread-crumb')
    
    <!-- shop container start here -->
    <div class="shop">
        <div class="container">
            <div class="row">
                <div class="sort col-sm-12 col-md-12 col-lg-12 col-xs-12">
                    
                    <p>Show result {{count($products)}}</p>
                </div>
                
                <div class="col-sm-10 offset-1" >
                    <div class="row">
                        @foreach($products as $product)
                        <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="{{ route('shop_detail',$product->id) }}"><img src="{{$product->image}}" alt="image" title="image" class="img-responsive" /></a>
                                    <div class="onhover onhover9"> 
                                        <div class="list-unstyled">                                     
                                                @if(auth()->check())                                        
                                                <form action="{{route('wishlist.store')}}" method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" name="product_id" value="{{$product->id}}" />
                                            <input type="hidden" name="user_id" value="{{auth()->user()->id}}" />         
                                            <button type="submit"><i class="icon_heart"></i></button>   
                                        </form>
                                        @endif
                                            <form action="{{route('cart.store')}}" method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" name="id" value="{{$product->id}}" />
                                            <input type="hidden" name="name" value="{{$product->name}}" />
                                            <input type="hidden" name="image" value="{{$product->image}}" />
                                            <input type="hidden" name="newprice" value="{{$product->newprice}}" />
                                            <input type="hidden" name="qty" value="1" />
                                            <button type="submit"><i class="icon_cart"></i></button>    
                                        </form>                                         
                                        </div>
                                     </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="{{ route('shop_detail',$product->id) }}">Organic <span>{{$product->name}}</span></a></h4>
                                    <p class="price">Rs.{{$product->newprice}}</p>
                                   
                                    
                                    <div class="button-group">                                       
                                        @if(auth()->check())                                        
                                                <form action="{{route('wishlist.store')}}" method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" name="product_id" value="{{$product->id}}" />
                                            <input type="hidden" name="user_id" value="{{auth()->user()->id}}" />         
                                            <button type="submit"><i class="icon_heart"></i></button>   
                                        </form>
                                        @endif
                                        <form action="{{route('cart.store')}}" method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" name="id" value="{{$product->id}}" />
                                            <input type="hidden" name="name" value="{{$product->name}}" />
                                            <input type="hidden" name="image" value="{{$product->image}}" />
                                            <input type="hidden" name="newprice" value="{{$product->newprice}}" />
                                            <input type="hidden" name="qty" value="1" />
                                            <button type="submit"><i class="icon_cart"></i></button>    
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    <!--pagination code start here-->
                    <!-- <ul class="list-inline pagination">
                        <li>
                            <span>Pages</span>
                        </li>
                        <li class="active">
                            <a href="#">1</a>
                        </li>
                        <li>
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">4</a>
                        </li>
                        <li>
                            <a href="#">5</a>
                        </li>
                        <li class="pull-right">
                            <a href="#" aria-label="Previous"><i class="arrow_left"></i></a>
                            <a href="#" aria-label="Next"><i class="arrow_right"></i></a>
                        </li>
                    </ul> -->
                    <!--pagination code end here-->
                </div>
                <div class="pull-right">
                        {{$products->links()}}
                        </div>
            </div>
            </div>
        </div>
    </div>



    </div>

    <!-- shop container end here -->


    @endsection
