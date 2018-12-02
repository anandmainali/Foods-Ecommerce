@extends('layouts.admin-master')
@section('breadcrumb','Dashboard')
@section('content')

        <!-- start widget -->
        <div class="card-body">
        <div class="row">
            <div class="state-overview">
                <div class="col-lg-3 col-sm-6">
                    <div class="overview-panel blue">
                        <div class="symbol">
                            <i class="fa fa-shopping-cart usr-clr"></i>
                        </div>
                        <div class="value white">
                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="{{count($orders)}}">0</p>
                            <p>Orders</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="overview-panel grey">
                        <div class="symbol">
                            <i class="fa fa-shopping-basket"></i>
                        </div>
                        <div class="value white">
                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="{{count($products)}}">0</p>
                            <p>Products</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="overview-panel orange">
                        <div class="symbol">
                            <i class="fa fa-list-alt"></i>
                        </div>
                        <div class="value white">
                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="{{count($categories)}}">0</p>
                            <p>Categories</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="overview-panel green-bgcolor">
                        <div class="symbol">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="value white">
                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="{{count($users)}}">0</p>
                            <p>Users</p>
                        </div>
                    </div>
                </div>                       
                
            </div>
        </div>
        <!-- end widget -->
        
        
        
    </div>

<!-- end page content -->
@endsection
