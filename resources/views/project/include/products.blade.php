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
				
			</ul>
			<div  class="tab-content">
				<div class="tab-pane active" id="all">
					
					<div class="row">
						@foreach($products as $product)
						<div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
							<div class="product-thumb">
								<div class="image">
									<a href="{{ route('shop_detail',$product->id) }}">
										<img src="{{$product->image}}" alt="image" height="180" title="image" class="img-responsive" />
									</a>
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
								<div class="caption text-center">
									<h4><a href="{{ route('shop_detail',$product->id) }}">Organic <span>{{$product->name}}</span></a></h4>
									<p class="price">@if($product->oldprice)<strike>Rs.{{$product->oldprice}}</strike>@endif Rs. {{$product->newprice}}</p>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
