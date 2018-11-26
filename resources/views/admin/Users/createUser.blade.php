@extends('layouts.admin-master')
@section('breadcrumb','Add User')
@section('content')

<div class="card-body ">
 <div class="row">

    {!! Form::open(['method'=>'POST','action'=>'UserController@store','files'=>true])!!}
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('uname','User Name')!!}
            {!! Form::text('uname',null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('email','Email')!!}
            {!! Form::email('email',null,['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('password','Password')!!}
            {!! Form::password('password',['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('cpass','Confirm Password')!!}
            {!! Form::password('cpass',['class'=>'form-control'])!!}
        </div>


        <div class="form-group">
            {!! Form::label('image','Photo')!!}
            {!! Form::file('image',['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('utype','User Role')!!}
            {!! Form::select('utype', array('admin' => 'Admin', 'user' => 'User'), 'user',['class'=>'form-control']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('status','Status')!!}
            {!! Form::select('status', array('1' => 'Enable', '0' => 'Disable'), '0',['class'=>'form-control']); !!}
        </div>                                    

        <div class="form-group">
            {!! Form::button('<i class="fa fa-paper-plane"></i>Submit',['type'=>'submit','class'=>'btn btn-primary pull-right'])!!}
        </div>
        <a type="cancel" href="{{ route('user.index') }}" class="btn btn-default pull-right">Cancel</a>
    </div>

    {!! Form::close()!!}
</div>

@endsection
