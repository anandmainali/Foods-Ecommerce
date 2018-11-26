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


    <!-- shop container start here -->
    <div class="shop">
        <div class="container">
            <div class="row">
                <div class="sort col-sm-12 col-md-12 col-lg-12 col-xs-12">
                    <div class="row">
                        <div class="col-sm-2 col-md-2 col-lg-2 col-xs-12 list hidden-xs text-right pull-right">
                            <div class="btn-group btn-group-sm">
                                <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title="Grid"><i class="icon_grid-2x2"></i></button>
                                <button  type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="List"><i class="fa fa-list-ul" ></i></button>
                            </div>
                        </div>
                        <!-- <div class="col-sm-3 col-md-3 col-lg-3 col-xs-12 pull-right">
                            <div class="form-group input-group input-group-sm">
                                <label class="input-group-addon" for="input-sort">Sort by     </label>
                                <select id="input-sort" class="form-control selectpicker bs-select-hidden">
                                    <option value=""></option>
                                    <option value="">Name (A - Z)</option>
                                    <option value="">Name (Z - A)</option>
                                    <option value="">Price (Low &gt; High)</option>
                                    <option value="">Price (High &gt; Low)</option>
                                    <option value="">Rating (Highest)</option>
                                </select>
                            </div>
                        </div> -->

                        
                    </div>
                    <p>Show result {{count($products)}}</p>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3 col-xs-12 hidden-xs">
                    <div class="leftside">
   
                        <div class="highlight">
                            <h3>Category</h3>
                            <ul class="list-unstyled">
                                @foreach($categories as $category)
                                <li>
                                    <a href="{{route('shop',['category'=>$category->slug])}}">{{$category->name}}</a>
                                </li>
                                @endforeach                            
                            </ul>
                        </div>
                       
                        <div class="popular">
                            <h3>tags</h3>
                            <ul class="list-inline">
                                @foreach($categories as $category)
                                <li>
                                    <a href="{{route('shop',['category'=>$category->slug])}}">{{$category->name}}</a>
                                </li>
                                @endforeach
                               
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
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

                  
                </div>
                <div class="pull-right">
                        {{$products->links()}}
                        </div>
            </div>
            @include('project.include.recommendation')
        </div>
    </div>
    <!-- shop container end here -->
<br><br>
    @endsection
