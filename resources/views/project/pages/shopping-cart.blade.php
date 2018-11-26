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
                    <a>Cart</a>
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
                                    <td class="text-center">Quantity(Kg)</td>
                                    <td class="text-center">Total</td>
                                    <td class="text-center">Delete</td>
                                </tr>
                            </thead>
                            <tbody>
                              @if(count(Cart::content())>0)                                
                                @foreach(Cart::content() as $product)
                                <tr>
                                    <td class="text-left">
                                        <a href="{{ route('shop_detail',$product->id) }}"><img src="{{$product->model->image}}" class="img-responsive" alt="img" title="img" /></a>
                                        <div class="name"><a href="{{ route('shop_detail',$product->id) }}">{{$product->model->name}}</a></div>
                                    </td>
                                    <td class="text-center" >Rs.{{$product->price}}</td>
                                    <td class="text-center">
                                        <p class="qtypara">
                                            <input type="hidden" value="{{$product->rowId}}" id="hidden{{$product->id}}">                       
                                            <input type="number" min="1" value="{{$product->qty}}" class="form-control  qty{{$product->id}}" >
                                        </p>
                                    </td>

                                    <td class="text-center" id="price{{$product->id}}">Rs.{{($product->price)*($product->qty)}}</td>
                                    <td class="text-center">

                                      <form action="{{ route('cart.remove',$product->rowId) }}" method="post">
                                         {{csrf_field()}}
                                         <button type="submit"><i class="icon_close_alt2"></i></button>                                
                                     </form>                                     
                                 </td>
                             </tr>
                             <script type="text/javascript">
    $(document).ready(function(){
        $(".qty{{$product->id}}").on('change keyup', function(){
            var a =   $(".qty{{$product->id}}").val();
            var b =   $("#hidden{{$product->id}}").val();
            $.ajax({
                url : '{{URL::to('cart-update')}}',
                data: {'id': b,'qty':a},
                type : 'get',
                success : function(datas){
               console.log(datas);
                     $("#price{{$product->id}}").empty();
                    $("#price{{$product->id}}").append('<span id="price{{$product->id}}">Rs.'+datas.subtotal+'</span>');
                   $('#total').load(location.href + ' #total');
                    /*$("#grandtotal").empty();
                    $("#grandtotal").append('<span id="grandtotal">'++'</span></td>');*/
              }
          });
        });
    });
</script> 

                             @endforeach
                            @else
                                <tr>
                                    <td colspan="100%" class="text-center">No products added to cart.</td>
                                </tr>
                             @endif
                            @if(count(Cart::content())>0)
                             <tr>
                                <td colspan="3">Grand Total</td>
                                
                                <td colspan="1" class="text-right" > <div id="total">
                 Rs.{{Cart::total()}}
             </div></td>
             <td></td>
                             
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
                @if(count(Cart::content())>0)
                <a type="button" href="{{ route('cart.destroy') }}" class="btn-primary">Clear shopping cart</a>
                
                <button type="button" class="btn-primary pull-right" onclick="location.href='{{ route('checkout.index') }}'">Proceed to Checkout</button>
                @endif
            </div>
        </div>
       <!--  <div class="col-sm-12">
           <div class="row">
               <div class="col-lg-4" style="margin-left: 30%">
                   <div class="cartable">
                       <h5>Cart Total</h5>
                       <table class="table">
                           <tbody>
                               <tr>
                                   <td class="text-left">Shipping</td>
                                   <td class="text-right">Rs. 0</td>
                               </tr>
                               <tr>
                                   <td class="text-left">Sub Total</td>
                                   <td class="text-right">Rs. {{Cart::total()}}</td>
                               </tr>
                           </tbody>
                       </table>
                       <div class="text-center">
                           <button type="button" class="btn-primary" onclick="location.href='{{ route('checkout.index') }}'">Proceed to Checkout</button>
                       </div>
                   </div>
               </div>
           </div>
       </div> -->
    </div>
</div>
@include('project.include.recommendation')
</div>
<!-- checkout end here -->


@endsection
