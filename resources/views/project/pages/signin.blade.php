@extends('project.pages.master')
@section('body')

    @include('project.include.bread-crumb')
    <!-- register start here -->
    <div class="register">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 col-sm-offset-3 box">
                    <div class="commontop text-left">
                        <h4>
                            Sign in
                            <i class="icon_star_alt"></i>
                            <i class="icon_star_alt"></i>
                            <i class="icon_star_alt"></i>
                        </h4>
                    </div>
                    <p>Hello, Welcome to your account</p>
                   <form class="form-signin" method="post" action="{{route('login')}}">
            {{csrf_field()}}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"> 
                                <label>Email Address *</label>                           
                                <input id="email" type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif                           
                        </div>

             <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">   
             <label>password *</label>                      
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif                            
                        </div>                    
            <div class="form-group">
                            
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                                <button class="btn btn-primary pull-right" type="button" onclick="location.href='{{ route('signup') }}'">Register <i class="fa fa-arrow-right"></i></button>
                            </div>           

        </form>
                </div>
            </div>
        </div>
    </div>
    <!-- register end here -->


    @endsection
