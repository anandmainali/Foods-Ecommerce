@extends('layouts.admin-master')
@section('breadcrumb','Edit Subcategory')
@section('content')
<div class="card-body ">
 <div class="row">

    {!! Form::model($subcategory,['method'=>'PATCH','action'=>['SubcategoryController@update',$subcategory->id]])!!}
    
    <div class="col-md-12">
    	<div class="form-group">
            {!! Form::label('category_id','Category Name')!!}
            {!! Form::select('category_id', $category, null,['class'=>'form-control']); !!}
        </div> 
        <div class="form-group">
            {!! Form::label('name','Name')!!}
            {!! Form::text('name',null,['class'=>'form-control'])!!}
        </div>
        
               
        <div class="form-group">
            {!! Form::button('<i class="fa fa-paper-plane"></i>Update',['type'=>'submit','class'=>'btn btn-primary pull-right'])!!}
        </div>
        <a type="cancel" href="{{ route('subcategory.index') }}" class="btn btn-default pull-right">Cancel</a>
    </div>

    {!! Form::close()!!}
</div>

@endsection
