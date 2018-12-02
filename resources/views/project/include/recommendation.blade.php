<div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 commontop text-center">
                            <p>Fresh Foods</p>
                            <h4>
                                <i class="icon_star_alt"></i>
                                <i class="icon_star_alt"></i>
                                <i class="icon_star_alt"></i>
                                Recommended Products
                                <i class="icon_star_alt"></i>
                                <i class="icon_star_alt"></i>
                                <i class="icon_star_alt"></i>
                            </h4>
                        </div>
                        @foreach($recommendations as $recommendation)
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="{{ route('shop_detail',$recommendation->id) }}"><img src="{{$recommendation->image}}" alt="image" title="image" class="img-responsive" /></a>
                                    <div class="onhover onhover9"> 
                                        <div class="list-unstyled">   
                                        @if(auth()->check())                                  
                                                <form action="{{route('wishlist.store')}}" method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" name="product_id" value="{{$recommendation->id}}" />
                                            <input type="hidden" name="user_id" value="{{auth()->user()->id}}" />         
                                            <button type="submit"><i class="icon_heart"></i></button>   
                                        </form>
                                        @endif
                                            <form action="{{route('cart.store')}}" method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" name="id" value="{{$recommendation->id}}" />
                                            <input type="hidden" name="name" value="{{$recommendation->name}}" />
                                            <input type="hidden" name="image" value="{{$recommendation->image}}" />
                                            <input type="hidden" name="newprice" value="{{$recommendation->newprice}}" />
                                            <input type="hidden" name="qty" value="1" />
                                            <button type="submit"><i class="icon_cart"></i></button>    
                                        </form>                                         
                                        </div>
                                     </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="{{ route('shop_detail',$recommendation->id) }}">Organic <span>{{$recommendation->name}}</span></a></h4>
                                    <p class="price">Rs.{{$recommendation->newprice}}</p>
                                   
                                    
                                    <div class="button-group">                                       
                                        <button type="button"><i class="icon_heart"></i></button>
                                        <form action="{{route('cart.store')}}" method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" name="id" value="{{$recommendation->id}}" />
                                            <input type="hidden" name="name" value="{{$recommendation->name}}" />
                                            <input type="hidden" name="image" value="{{$recommendation->image}}" />
                                            <input type="hidden" name="newprice" value="{{$recommendation->newprice}}" />
                                            <input type="hidden" name="qty" value="1" />
                                            <button type="submit"><i class="icon_cart"></i></button>    
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                        
                        
                    </div>
                </div>
