@extends('layouts.admin-master')
@section('button')
<br>
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-6">
      <div class="btn-group">
        <a href="{{route('product.create')}}" class="btn btn-info" role="button"><i class="fa fa-plus" aria-hidden="true"></i> Add New</a>
      </div>
    </div>
  </div>
  @endsection
@section('breadcrumb','All Products')
@section('content')

					<div class="card-body ">						
						<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
							<thead>
								<tr>
									<th class="center">S.N.</th>
									<th class="center">Image</th>
									<th class="center"> Category</th>
									<!-- <th> Subproduct</th> -->
									<th class="center"> Product Name </th>
									<!-- <th> Discount (%)</th> -->
									<th class="center"> Price (Rs.)</th>									
									<!-- <th>Featured</th> -->									
									<th class="center"> Action </th>
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
									<!-- <td class="center">{{$product->discount}}</td> -->
									<td class="center">{{$product->newprice}}</td>
									<!-- @if($product->featured === 1)								
																		<td class="center"><span class="label label-success">Yes</span></td>
																		@else
																		<td class="center"><span class="label label-danger">No</span></td>
																		@endif -->									
									<td class="center" style="width: 100px;">
							          <div style="float: left;">
                        <a href='{{route('product.edit',$product->id)}}'>
                            <button class="btn btn-primary btn-xs">
                                <i class="fa fa-edit"></i>
                            </button>
                        </a>
                    </div>
                    <button class="btn btn-danger btn-xs" type="button" onclick="deleteItem({{ $product->id }})">
                                                    <i class="fa fa-trash"></i>
                                                </button>
            <form id="delete-form-{{ $product->id }}" action="{{ route('product.destroy',$product->id) }}" method="POST" style="display: none;">
                {!! method_field('delete') !!}
    			{!! csrf_field() !!}
            </form>
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
