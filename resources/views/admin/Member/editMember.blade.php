@extends('layouts.admin-master')
@section('breadcrumb','Edit Member')
@section('content')


{!! Form::model($member,['method'=>'PATCH','action'=>['TeamMemberController@update',$member->id],'files'=>true])!!}
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
        
        <img src="{{$member->photo}}" alt="" height="80" width="80" class="img-circle">
        
        {!! Form::file('photo',['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('about','Description')!!}
        {!! Form::textarea('about',null,['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::button('<i class="fa fa-paper-plane"></i>Update',['type'=>'submit','class'=>'btn btn-primary pull-right'])!!}
    </div>
    <a type="cancel" href="{{ route('member.index') }}" class="btn btn-default pull-right">Cancel</a>
</div>

{!! Form::close()!!}

</div>
</div>
</div>
</div>
</div>
</div>
@endsection
