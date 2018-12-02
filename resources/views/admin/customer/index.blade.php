@extends('layouts.admin-master')
@section('button')
<br>
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-6">
      <div class="btn-group">
        <a href="{{route('customer.create')}}" class="btn btn-info" role="button"><i class="fa fa-plus" aria-hidden="true"></i> Add New</a>
      </div>
    </div>
  </div>
  @endsection
@section('breadcrumb','All Testimonials')
@section('content')

<!-- start page content -->

<div class="card-body ">
    <div class="row">
   <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
    <thead>

      <tr>
        <th>S.N.</th>
        <th></th>
        <th>Customer Name</th>
        <th>Post</th>                                    
        <th>Comment</th> 
        <th>Action</th>                               
      </tr>
    </thead>

    <tbody>
      @if(count($customers) > 0)
      @foreach($customers as $key=>$customer)
      <tr>
       <td>{{++$key}}</td>
       <td class="patient-img">
         <img src="{{$customer->photo}}" alt="" class="img-circle">
       </td>
       <td>{{$customer->name}}</td>
       <td>{{$customer->post}}</td>

       <td>{!!substr($customer->about,0,100)!!}</td>
       <td style="width: 100px;">                                
        <div style="float: left;"> 
          <a href='{{route('customer.edit',$customer->id)}}' >
            <button class="btn btn-primary btn-xs">
              <i class="fa fa-edit"></i>
            </button>
          </a>
        </div>
        <button class="btn btn-danger btn-xs" type="button" onclick="deleteItem({{ $customer->id }})">
                                                    <i class="fa fa-trash"></i>
                                                </button>
            <form id="delete-form-{{ $customer->id }}" action="{{ route('customer.destroy',$customer->id) }}" method="POST" style="display: none;">
                {!! method_field('delete') !!}
          {!! csrf_field() !!}
            </form>



      </td>
    </tr>
    @endforeach
  </tbody>
  @else
  <tr>
    <td colspan="100%"><h4>Testimonial Table is Empty.</h4></td>
  </tr>
  @endif



</table>
</div>
</div>


@endsection
