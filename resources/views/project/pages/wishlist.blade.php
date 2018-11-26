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
                    <a>My Wishlists</a>
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
                                    <td class="text-left">List Products</td>
                                    <td class="text-center">Price</td>                                  
                                    <td class="text-center">Delete</td>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($wishlists)>0)
                                @foreach($wishlists as $product)
                                <tr>
                                    <td class="text-left">
                                        <a href="{{ route('shop_detail',$product->product->id) }}"><img src="{{$product->product->image}}" class="img-responsive" alt="img" title="img" /></a>
                                        <div class="name"><a href="{{ route('shop_detail',$product->product->id) }}">
                                            {{$product->product->name}}
                                             </a></div>
                                    </td>
                                    <td class="text-center">Rs.{{$product->product->newprice}}</td>
                                    <td class="text-center">

                                      <a href="{{ route('wishlist.destroy',$product->id) }}">
                                         
                                         <i class="icon_close_alt2"></i>                                  
                                     </a>                                     


                                 </td>
                             </tr>

                             @endforeach
                             @else
                                <tr>
                                    <td colspan="100%" class="text-center">No products found in wishlists.</td>
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
