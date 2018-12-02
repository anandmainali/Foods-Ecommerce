@extends('layouts.admin-master')
@section('breadcrumb','Add Slider')
@section('content')
<div class="card-body ">
   <div class="row">
    {!! Form::open(['method'=>'POST','action'=>'SliderController@store','files'=>true])!!}
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('image','Photo')!!}
            {!! Form::file('image',['class'=>'form-control'])!!}
        </div>
        
        <div class="form-group">
            {!! Form::button('<i class="fa fa-paper-plane"></i>Submit',['type'=>'submit','class'=>'btn btn-primary pull-right'])!!}
        </div>
        <a type="cancel" href="{{ route('slider.index') }}" class="btn btn-default pull-right">Cancel</a>
    </div>
    
    {!! Form::close()!!}
    

</div>
</div>


@endsection
