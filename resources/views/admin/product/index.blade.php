@extends('layouts.admin-master')
@section('breadcrumb','Product List')
@section('content')

					<div class="card-body ">
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="btn-group">
        <a href="{{route('product.create')}}" class="btn btn-info" role="button"><i class="fa fa-plus" aria-hidden="true"></i> Add New</a>
      </div>
							</div>
							
						</div>
						<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
							<thead>
								<tr>
									<th>S.N.</th>
									<th>Image</th>
									<th> Category</th>
									<!-- <th> Subcategory</th> -->
									<th> Product Name </th>
									<th> Discount (%)</th>
									<th> Price (Rs.)</th>									
									<th>Featured</th>									
									<th> Action </th>
								</tr>
							</thead>
							
							@if(count($products) > 0)
							<tbody>
								@foreach($products as $key=>$product)
								<tr class="odd gradeX">
									<td class="center">{{++$key}}</td>
									<td class="center"><img src="{{$product->image}}" alt="Product Image" height="50"></td>
									<td class="center">{{$product->category->name}}</td>
									<!-- <td class="center"></td> -->
									<td class="center">{{$product->name}}</td>
									<td class="center">{{$product->discount}}</td>
									<td class="center">{{$product->newprice}}</td>
									@if($product->featured === 1)								
									<td class="center"><span class="label label-success">Yes</span></td>
									@else
									<td class="center"><span class="label label-danger">No</span></td>
									@endif									
									<td class="center" style="width: 100px;">
							          <div style="float: left;">
                        <a href='{{route('product.edit',$product->id)}}'>
                            <button class="btn btn-primary btn-xs">
                                <i class="fa fa-edit"></i>
                            </button>
                        </a>
                    </div>
                    <div style="float: right;">
                        {!! Form::open(['method'=>'DELETE','action'=>['ProductController@destroy',$product->id]])!!}
                        {!! Form::button('<i class="fa fa-trash"></i>',['type'=>'submit','class'=>'btn btn-danger btn-xs','return onClick'=>'confirm("Are you sure to delete?")'])!!}
                        {!! Form::close()!!}
                    </div>
							        </td>
								</tr>
								@endforeach
								
							</tbody>
							@else							
								<tr >
									<td colspan="100%"><h4>Product Table is Empty.</h4></td>
								</tr>
							@endif
						</table>                                    
					</div>
				
@endsection
