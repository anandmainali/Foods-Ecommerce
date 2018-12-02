@extends('project.pages.master')
@section('body')

<!-- bread-crumb start here -->
<div class="bread-crumb">
    <img src="{{URL::to('project/images/top-banner.jpg')}}" class="img-responsive" alt="banner-top" title="banner-top">
    <div class="container">
        <div class="matter">
            <h2><span>Organic</span> Cart</h2>
            <ul class="list-inline">
                <li>
                    <a href="{{ route('index') }}">HOME</a>
                </li>
                <li>
                    <a>My Orders</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- bread-crumb end here -->

<!-- checkout start here -->
<div class="mycart">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form method="post" enctype="multipart/form-data">
                    <div class="table-responsive">
                        <table class="table listproducts">
                            <thead>
                                <tr>
                                    <td class="text-center">Product Image</td>
                                    <td class="text-center">Name</td>
                                    <td class="text-center">Price</td>                                  
                                    <td class="text-center">Quantity</td>
                                    <td class="text-center">Subtotal</td>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($orderProducts)>0)
                                @foreach($orderProducts as $product)
                                <tr>
                                    <td class="text-center">
                                        <a href="{{ route('shop_detail',$product->id) }}"><img src="{{$product->image}}" class="img-responsive" alt="img" title="img" /></a>                                        
                                    </td>
                                    <td class="text-center"><div class="name"><a href="{{ route('shop_detail',$product->id) }}">
                                            {{$product->name}}
                                             </a></div></td>
                                    <td class="text-center">Rs.{{$product->newprice}}</td>
                                    <td class="text-center"> {{$product->quantity}}</td>
                                    <td class="text-center">Rs.{{($product->newprice)*($product->quantity)}}</td>

                             </tr>                            
                             @endforeach  
                             @else
                                <tr>
                                    <td colspan="100%" class="text-center">No orders found.</td>
                                </tr>
                             @endif                           
                              
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
        <div class="col-sm-12">
            <div class="buttons">
                <button class="btn-primary " onclick="location.href='{{route('shop')}}'">continue shopping</button>
            </div>
        </div>
    </div>
</div>
@include('project.include.recommendation')
</div>
<!-- checkout end here -->


@endsection
