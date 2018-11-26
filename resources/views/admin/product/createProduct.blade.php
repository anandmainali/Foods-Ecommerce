@extends('layouts.admin-master')
@section('breadcrumb','Create Product')
@section('content')
<div class="card-body ">
   <div class="row">

   	{!! Form::open(['method'=>'POST','action'=>'ProductController@store','files'=>true])!!}
    <div class="col-md-12">
    	<div class="form-group">
            {!! Form::label('category_id','Category')!!}
            {!! Form::select('category_id', $category, null,['class'=>'form-control']); !!}
        </div> 
       <!--  <div class="form-group">
           {!! Form::label('subcategory_id','Subcategory')!!}
           {!! Form::select('subcategory_id', $subcategory, null,['class'=>'form-control']); !!}
       </div>  -->
        <div class="form-group">
            {!! Form::label('name','Name')!!}
            {!! Form::text('name',null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('discount','Discount (%)')!!}
            {!! Form::text('discount',null,['class'=>'form-control'])!!}
        </div>
         <div class="form-group">
            {!! Form::label('oldprice','Old Price (Rs.)')!!}
            {!! Form::text('oldprice',null,['class'=>'form-control'])!!}
        </div>
         <div class="form-group">
            {!! Form::label('newprice','New Price (Rs.)')!!}
            {!! Form::text('newprice',null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('unit','Unit (Eg: Kg,Pcs)')!!}
            {!! Form::text('unit',null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('image','Photo')!!}
            {!! Form::file('image',['class'=>'form-control'])!!}
        </div>
         <div class="form-group">
            {!! Form::label('featured','Featured')!!} <br>
            {!! Form::checkbox('featured',1,null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('description','Description')!!}
            {!! Form::textarea('description',null,['class'=>'form-control','id'=>'about'])!!}
        </div>

        <div class="form-group">
            {!! Form::button('<i class="fa fa-paper-plane"></i>Submit',['type'=>'submit','class'=>'btn btn-primary pull-right'])!!}
        </div>
        <a type="cancel" href="{{ route('product.index') }}" class="btn btn-default pull-right">Cancel</a>
    </div>

    {!! Form::close()!!}


</div>
</div>



@endsection
