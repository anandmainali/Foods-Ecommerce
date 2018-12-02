@extends('project.pages.master')
@section('body')

    @include('project.include.bread-crumb')
    <!-- register start here -->
    <div class="register">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 col-sm-offset-3">
                    <div class="commontop text-left">
                        <h4>
                            Create your account
                            <i class="icon_star_alt"></i>
                            <i class="icon_star_alt"></i>
                            <i class="icon_star_alt"></i>
                        </h4>
                    </div>
                    <p>Create your new account</p>
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('uname') ? ' has-error' : '' }}">
                            <label for="uname">Full Name*</label>                            
                                <input id="name" type="text" class="form-control" name="uname" value="{{ old('uname') }}" required autofocus>
                                @if ($errors->has('uname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('uname') }}</strong>
                                    </span>
                                @endif                         
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Email Address *</label>                            
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif                            
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Password*</label>

                           
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                           
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">Confirm Password*</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            
                        </div>

                        <div class="form-group">
                            
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                                <button class="btn btn-primary pull-right" type="button" onclick="location.href='{{ route('signin') }}'">SignIn <i class="fa fa-arrow-right"></i></button>
                           
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- register end here -->


    @endsection
