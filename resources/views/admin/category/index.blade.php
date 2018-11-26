@extends('layouts.admin-master')
@section('breadcrumb','Category List')
@section('content')
<div class="card-body ">
	<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-6">
			<div class="btn-group">
				<a href="{{route('category.create')}}" class="btn btn-info" role="button"><i class="fa fa-plus" aria-hidden="true"></i> Add New</a>
			</div>
		</div>

	</div>
	<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
		<thead>
			<tr>
				<th>S.N.</th>
				<th> Name </th>				                                                
				<th> Action </th>
			</tr>
		</thead>
		<tbody>
			@if(count($categories) > 0)
        @foreach($categories as $key=>$category)
			<tr class="odd gradeX">
				<td class="patient-img">
					{{++$key}}
				</td>
				<td>{{$category->name}}</td>
<td style="width: 100px;">
          <div style="float: left;">
            <a href='{{ route('category.edit',$category->id) }}'>
              <button class="btn btn-primary btn-xs">
                <i class="fa fa-edit"></i>
              </button>
            </a>
          </div>
          <div style="float: right;">
            {!! Form::open(['method'=>'DELETE','action'=>['CategoryController@destroy',$category->id]])!!}
            {!! Form::button('<i class="fa fa-trash"></i>',['type'=>'submit','class'=>'btn btn-danger btn-xs','return onClick'=>'confirm("Are you sure to delete?")'])!!}
            {!! Form::close()!!}
          </div>
        </td>
			</tr>
			@endforeach

		</tbody>
		@else
    <tr>
      <td colspan="100%"><h4>Category Table is Empty.</h4></td>
    </tr>
    @endif
	</table>
</div>

@endsection
