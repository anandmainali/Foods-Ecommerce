    @extends('layouts.admin-master')
    @section('breadcrumb','Setting')
    @section('content')
    <div class="card-body">   
        <div class="row">
            <div class="col-md-12">                          
                <div class="col-md-4">
                    @if(Auth::user()->image)
                    <img src="{{Auth::user()->image}}" style="margin-top: 20px" class="img-responsive thumbnail" alt="">
                    @else
                    <img src="\UserImage\default.png" style="margin-top: 20px" class="img-responsive thumbnail" alt="">
                    @endif
                    
                </div>
                <div class="col-md-8 col-sm-8">
                    <div class="panel tab-border card-topline-green">
                        <header class="panel-heading panel-heading-gray custom-tab">
                            <ul class="nav nav-tabs">                                        
                                <li class="active">
                                    <a href="#about-2" data-toggle="tab">
                                        <i class="fa fa-edit"></i> Update Profile
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#contact-2" data-toggle="tab">
                                        <i class="fa fa-lock"></i> Update Password
                                    </a>
                                </li>
                            </ul>
                        </header>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane " id="home-2">Home</div>
                                <div class="tab-pane active" id="about-2">
                                    <div class="card-body " id="bar-parent">

                                        {!! Form::model(Auth::user(),['method'=>'PATCH','action'=>['AdminController@updateUser',Auth::user()->id],'files'=>true])!!}

                                        <div class="form-group">
                                            {!! Form::label('uname','Username')!!}
                                            {!! Form::text('uname',null,['class'=>'form-control'])!!}
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('email','Email')!!}
                                            {!! Form::email('email',null,['class'=>'form-control'])!!}
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('image','Photo')!!}
                                            {!! Form::file('image',['class'=>'form-control'])!!}
                                        </div>                               

                                        <div class="form-group">                        
                                            {!! Form::button('<i class="fa fa-paper-plane"></i>Update',['type'=>'submit','class'=>'btn btn-primary pull-right'])!!}
                                        </div>


                                        {!! Form::close()!!} 
                                    </div>

                                </div>
                                <div class="tab-pane " id="contact-2">
                                    <div class="card-body " id="bar-parent">
                                        {!! Form::open(['method'=>'POST','action'=>['AdminController@updatePassword',Auth::user()->id]])!!} 

                                        <div class="form-group">
                                            {!! Form::label('oldPassword','Old Password')!!}
                                            {!! Form::password('oldPassword',['class'=>'form-control'])!!}
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('newPassword','New Password')!!}
                                            {!! Form::password('newPassword',['class'=>'form-control'])!!}
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('confirmPassword','Confirm Password')!!}
                                            {!! Form::password('confirmPassword',['class'=>'form-control'])!!}
                                        </div>

                                        <div class="form-group">                        
                                            {!! Form::button('<i class="fa fa-paper-plane"></i>Update',['type'=>'submit','class'=>'btn btn-primary pull-right'])!!}
                                        </div>
                                        
                                        
                                        {!! Form::close()!!} 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                

                @endsection
