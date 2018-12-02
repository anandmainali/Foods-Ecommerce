@extends('layouts.admin-master')
@section('button')
<br>
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-6">
      <div class="btn-group">
        <a href="{{route('slider.create')}}" class="btn btn-info" role="button"><i class="fa fa-plus" aria-hidden="true"></i> Add New</a>
      </div>
    </div>
  </div>
  @endsection
@section('breadcrumb','All Sliders')
@section('content')

                    <div class="card-body ">
                        <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
                            <thead>

                                <tr>
                                    <th>S.N.</th>
                                    <th>Image</th>                                                                        
                                    <th>Action</th>                               
                                </tr>
                            </thead>
                            
                            <tbody>
                               @if(count($sliders) > 0)
                               @foreach($sliders as $key=>$slider)
                               <tr>	
                                <td>{{++$key}}</td>                               
                                <td><img src="{{$slider->image}}" height="100px" alt=""></td>
                                <td style="width: 80px;">
                                    <button class="btn btn-danger btn-xs" type="button" onclick="deleteItem({{ $slider->id }})">
                                                    <i class="fa fa-trash"></i>
                                                </button>
            <form id="delete-form-{{ $slider->id }}" action="{{ route('slider.destroy',$slider->id) }}" method="POST" style="display: none;">
                {!! method_field('delete') !!}
                {!! csrf_field() !!}
            </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        
                        @else
                        <tr>
                            <td colspan="100%"><h4>Slider Table is Empty.</h4></td>
                        </tr>
                        @endif                          
                    </table>
                </div>
            
@endsection








