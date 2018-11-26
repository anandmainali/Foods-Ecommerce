    @extends('layouts.admin-master')
    @section('breadcrumb','Profile')
    @section('content')
    <div class="card-body">  
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PROFILE SIDEBAR -->
                <div class="profile-sidebar">
                    <div class="card card-topline-red">
                        <div class="card-body no-padding height-9">
                            <div class="row">
                                <div class="profile-userpic">
                                    @if(Auth::user()->image)
                                    <img src="{{Auth::user()->image}}" class="img-responsive" alt="">
                                    @else
                                    <img src="\UserImage\default.png" class="img-responsive" alt="">
                                    @endif
                                     </div>
                                </div>
                                <br>
                                <ul class="list-group list-group-unbordered">
                                    <li class="list-group-item">
                                        <b>Username</b> <a class="pull-right">{{Auth::user()->uname}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Email</b> <a class="pull-right">{{Auth::user()->email}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Role</b> <a class="pull-right">{{ucfirst(Auth::user()->utype)}}</a>
                                    </li>
                                </ul>
                                <!-- END SIDEBAR USER TITLE -->

                            </div>
                        </div>

                    </div>
                    <!-- END BEGIN PROFILE SIDEBAR -->


                </div>
            </div>
            <!-- end page content -->

        </div>

        @endsection
