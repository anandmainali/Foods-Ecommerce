@extends('layouts.admin-master')
@section('breadcrumb','Edit User')
@section('content')
                        <div class="card-body ">
                           <div class="row">
                            {!! Form::model($user,['method'=>'PATCH','action'=>['UserController@update',$user->id],'files'=>true])!!}
                            <div class="col-sm-12">
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
                                    <small class="text-danger">*Leave empty to keep the same password.</small>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('cpass','Confirm Password')!!}
                                    {!! Form::password('cpass',['class'=>'form-control'])!!}
                                </div>


                                <div class="form-group">
                                    {!! Form::label('image','Photo')!!} <br>
                                    <img src="{{$user->image}}" height="80" alt="">
                                    {!! Form::file('image',['class'=>'form-control'])!!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('utype','User Role')!!}
                                    {!! Form::select('utype', array('admin' => 'Admin', 'user' => 'User'),null,['class'=>'form-control']); !!}
                                </div>
                                <div class="form-group">
                                  <!--   {!! Form::label('status','Status')!!} -->
                                   <!--  {!! Form::select('status', array('1' => 'Enable', '0' => 'Disable'),null,['class'=>'form-control']); !!} -->
                                    {{ Form::hidden('status', '1') }}
                                </div>

                                <div class="form-group">
                                    {!! Form::button('<i class="fa fa-paper-plane"></i>Submit',['type'=>'submit','class'=>'btn btn-primary pull-right'])!!}
                                </div>
                                <a type="cancel" href="{{ route('user.index') }}" class="btn btn-default pull-right">Cancel</a>
                            </div>

                            {!! Form::close()!!}
                        </div>
                    </div>
            
@endsection
