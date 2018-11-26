@extends('layouts.admin-master')
@section('breadcrumb','Member List')
@section('content')

<div class="card-body ">
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-6">
      <div class="btn-group">
        <a href="{{route('member.create')}}" class="btn btn-info" role="button"><i class="fa fa-plus" aria-hidden="true"></i> Add New</a>
      </div>
    </div>

    <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
      <thead>

        <tr>
          <th>S.N.</th>
          <th></th>
          <th>Name</th>
          <th>Post</th>
          
          <th>About</th> 
          <th>Action</th>                               
        </tr>
      </thead>
      
      <tbody>
        @if(count($members) > 0)
        @foreach($members as $key=>$member)
        <tr>
         <td>{{++$key}}</td>
         <td class="patient-img">
           <img src="{{$member->photo}}" alt="" class="img img-circle">
         </td>
         <td>{{$member->name}}</td>
         <td>{{$member->post}}</td>                               
         <td>{!!substr($member->about,0,100)!!}</td>
         <td style="width: 100px;">
          <div style="float: left;">
            <a href='{{route('member.edit',$member->id)}}'>
              <button class="btn btn-primary btn-xs">
                <i class="fa fa-edit"></i>
              </button>
            </a>
          </div>
          <div style="float: right;">
            {!! Form::open(['method'=>'DELETE','action'=>['TeamMemberController@destroy',$member->id]])!!}
            {!! Form::button('<i class="fa fa-trash"></i>',['type'=>'submit','class'=>'btn btn-danger btn-xs','return onClick'=>'confirm("Are you sure to delete?")'])!!}
            {!! Form::close()!!}
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
    @else
    <tr>
      <td colspan="100%"><h4>Member Table is Empty.</h4></td>
    </tr>
    @endif
    
    
    
  </table>
</div>
</div>

@endsection
