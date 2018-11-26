@extends('project.pages.master')
@section('body')

    <!-- bread-crumb start here -->
    <div class="bread-crumb">
        <img src="{{URL::to('project/images/top-banner.jpg')}}" class="img-responsive" alt="banner-top" title="banner-top">
        <div class="container">
            <div class="matter">
                <h2><span>Organic</span> Checkout</h2>
                <ul class="list-inline">
                    <li>
                        <a>HOME</a>
                    </li>
                    <li>
                        <a>Checkout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- bread-crumb end here -->

    <!-- checkout start here -->
    <div class="checkout">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12" style="margin-left: 25%">
                    <div class="commontop">
                        <h4>Shipping Details</h4>
                    </div>
                    <form action="{{ route('order.store') }}" method="post" class="form-horizontal">
                        {{csrf_field()}}
                        <fieldset>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label>Full Name *</label>
                                    <input type="text" name="name" value="{{Auth::user()->uname}}" type="disabled" id="input-name" class="form-control" disabled="true">
                                </div>                               
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label>Email *</label>
                                    <input name="email" value="{{auth()->user()->email}}" placeholder="Enter your Email Address*" id="input-email" class="form-control" type="text" disabled="true">
                                </div>                                
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label>Phone *</label>
                                    <input name="phone" placeholder="Enter your phone number*" id="" class="form-control" type="text">
                                </div>                                
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label>Shipping Address *</label>
                                    <input name="address" value="" placeholder="Enter your full shipping address.." id="input-line" class="form-control" type="text">
                                    
                                </div>
                            </div>    
                            <input type="hidden" name="total" value="{{Cart::total()}}" >                     
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label>Additional note </label>
                                    <textarea name="note" placeholder="Write your note" id="input-note1" class="form-control"></textarea>
                                </div>
                            </div>
                        </fieldset>
                    
                    <h6>Your order</h6>
                    <table class="table cartable1">
                        <tr>
                            <td class="text-left">Cart SubTotal</td>
                            <td class="text-right">Rs. {{Cart::total()}}</td>
                        </tr>
                        <tr>
                            <td class="text-left">Shipping & handling</td>
                            <td class="text-right">Rs. 0</td>
                        </tr>                        
                        <tr>
                            <td class="text-left">Order Total</td>
                            <td class="text-right">Rs.{{Cart::total()}}</td>
                        </tr>
                    </table>
                </div>
                <div class="clearfix"></div>
                <div class="buttons text-center col-sm-12">
                    <button type="submit" class="btn-primary"> Place order now</button> 
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- checkout end here -->


    @endsection
