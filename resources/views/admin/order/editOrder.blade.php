@extends('layouts.admin-master')
@section('breadcrumb','Edit Order')
@section('content')

<div class="card-body ">
   <div class="row">
   {!! Form::model($order,['method'=>'PATCH','action'=>['AdminOrderController@update',$order->id],'files'=>true])!!}
    <div class="col-md-12">
<div class="form-group">
            {!! Form::label('shipping_status','Shipping Status')!!} <br>
            {!! Form::checkbox('shipping_status',1,null,['class'=>'form-control'])!!}
</div>
</div>
<div class="form-group">
            {!! Form::button('<i class="fa fa-paper-plane"></i>Submit',['type'=>'submit','class'=>'btn btn-primary pull-right'])!!}
        </div>
        <a type="cancel" href="{{ route('order.index') }}" class="btn btn-default pull-right">Cancel</a>
    </div>

    {!! Form::close()!!}
</div>
</div>
@endsection
