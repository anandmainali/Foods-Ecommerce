@extends('layouts.admin-master')
@section('breadcrumb','User List')
@section('content')

<div class="card-body ">
   <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-6">
        <div class="btn-group">
            <a href="{{route('user.create')}}" class="btn btn-info" role="button"><i class="fa fa-plus" aria-hidden="true"></i> Add New</a>
        </div>
    </div>
    <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
        <thead>
            <tr>
                <th>S.N.</th>
                <th></th>
                <th> Username </th>
                <th> Email </th>
                <th> Role </th>
                <th> Status </th>
                <th> Action </th>
            </tr>
        </thead>
        @if(count($users) > 0)
        <tbody>

            @foreach($users as $key=>$user)
            <tr class="odd gradeX">
                <td>{{++$key}}</td>
                @if($user->image)
                <td class="patient-img"><img src="{{$user->image}}" alt="" class="img-circle"></td>
                @else
                <td class="patient-img"><img src="/UserImage/default.png" alt="" class="img-circle"></td>
                @endif
                <td>{{$user->uname}}</td>
                <td>{{$user->email}}</td>
                <td>{{ucfirst($user->utype)}}</td>
                <td>      
                    @if($user->status == 0)
                    <span class="label label-danger">
                        Disabled
                    </span>  
                    @else
                    <span class="label label-success">
                        Enabled
                    </span>  
                    @endif                                         

                </td>
                <td style="width: 100px;">
                    <div style="float: left;">
                        <a href='{{route('user.edit',$user->id)}}'>
                            <button class="btn btn-primary btn-xs">
                                <i class="fa fa-edit"></i>
                            </button>
                        </a>
                    </div>
                    <div style="float: right;">
                        {!! Form::open(['method'=>'DELETE','action'=>['UserController@destroy',$user->id]])!!}
                        {!! Form::button('<i class="fa fa-trash"></i>',['type'=>'submit','class'=>'btn btn-danger btn-xs','return onClick'=>'confirm("Are you sure to delete?")'])!!}
                        {!! Form::close()!!}
                    </div>
                </td>

            </tr>
            @endforeach
        </tbody>
        @else

        <tr>
            <td colspan="100%"><h4>Users Table is Empty.</h4></td>
        </tr>
        @endif
    </table>


</div>
</div>

<!-- end page content -->










@endsection
