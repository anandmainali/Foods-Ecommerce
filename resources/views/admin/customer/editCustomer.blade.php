@extends('layouts.admin-master')
@section('breadcrumb','Edit Testimonial')
@section('content')

<div class="card-body ">
 <div class="row">
                        
                        {!! Form::model($customer,['method'=>'PATCH','action'=>['HappyCustomerController@update',$customer->id],'files'=>true])!!}
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('name','Name')!!}
                                {!! Form::text('name',null,['class'=>'form-control'])!!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('post','Post')!!}
                                {!! Form::text('post',null,['class'=>'form-control'])!!}
                            </div>

                            <div class="form-group">

                                {!! Form::label('photo','Photo')!!} <br>
                                <img src="{{$customer->photo}}" width="80" alt="">
                                {!! Form::file('photo',['class'=>'form-control'])!!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('Comment','Description')!!}
                                {!! Form::textarea('about',null,['class'=>'form-control','id'=>'about'])!!}
                            </div>

                            <div class="form-group">                        
                                {!! Form::button('<i class="fa fa-paper-plane"></i>Update',['type'=>'submit','class'=>'btn btn-primary pull-right'])!!}
                            </div>
                            <a type="cancel" href="{{ route('customer.index') }}" class="btn btn-default pull-right">Cancel</a>
                        </div>

                        {!! Form::close()!!}

                    </div>
                </div>
            
@endsection
