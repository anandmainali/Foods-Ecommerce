@extends('project.pages.master')
@section('body')

@include('project.include.bread-crumb')
    <!-- confirm start here -->
    <div class="confirm">
        <div class="container">
            <div class="row">
               
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="image">
                        <img  src="{{URL::to('project/images/confirmation.png')}}" class="img-responsive" alt="confirm" title="confirm" />
                    </div>
                    <h2>Order successfully Received</h2>
                    <p>Thank For Your Purchase</p>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="buttons">
                        <button type="button" class="btn-primary" onclick="location.href='{{route('index')}}'">Return to home</button>
                        <button type="button" class="btn-primary" onclick="location.href='{{route('shop')}}'">continue shopping</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- confirm end here -->


    @endsection
