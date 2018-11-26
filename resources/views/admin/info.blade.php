    @extends('layouts.admin-master')
    @section('breadcrumb','Site Info.')
    @section('content')
    
    <div class="card-body ">
        <div class="row">           
         {!! Form::model($info,['method'=>'PATCH','action'=>'AdminController@updateInfo','files'=>true])!!}
         <div class="col-md-12">
            <div class="form-group">
                {!! Form::label('name','Site Name')!!}
                {!! Form::text('name',null,['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!! Form::label('email','Email')!!}
                {!! Form::email('email',null,['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!! Form::label('phone','Phone')!!}
                {!! Form::text('phone',null,['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!! Form::label('address','Address')!!}
                {!! Form::text('address',null,['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!! Form::label('logo','Logo')!!} <br>                
                <img src="{{$info->logo}}" alt="" height="80">
                {!! Form::file('logo',['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!! Form::label('about','Description')!!}                
                {!! Form::textarea('about',null,['class'=>'form-control'])!!}
            </div>

            <div class="form-group">                        
                {!! Form::button('<i class="fa fa-paper-plane"></i>Submit',['type'=>'submit','class'=>'btn btn-primary pull-right'])!!}
            </div>
        </div>

        {!! Form::close()!!}

    </div>
</div>


@endsection














