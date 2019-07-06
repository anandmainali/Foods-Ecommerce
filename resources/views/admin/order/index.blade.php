@extends('layouts.admin-master')
@section('breadcrumb','All Orders')
@section('content')

<div class="card-body ">
	<p class="text-danger">*Note:- Click on the view button to see ordered products.</p>
	<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
		<thead>
			<tr>
				<th>S.N.</th>
				<th> Name </th>
				<th> Email </th>                       
				<th> Phone </th>
				 <th> Address </th>
				<th>Total (Rs.)</th>
				<th>Shipping Status</th>
				<!-- <th>Payement Gateway</th> -->
				<th> Action </th>
			</tr>
		</thead>
		@if(count($orders) > 0)
		<tbody>
			@foreach($orders as $key=>$order)
			<tr class="odd gradeX">
				<td class="center">{{++$key}}</td>
				<td>{{$order->user ? $order->user->uname : ''}}</td>
				<td class="center">{{$order->user ? $order->user->email : ''}}</td>
				<td>{{$order->phone}}</td>
				 <td>{{$order->address}}</td> 
				<td class="center">{{$order->total}}</td>
				<td class="center">
					@if($order->shipping_status == 0)
					<span class="label label-warning">
                       Not Shipped
                    </span>
                    @else
                    <span class="label label-success">
                        Shipped
                    </span> 
                    @endif 
					
				</td>
				<td style="width: 125px;">
					<div style="float: left;">
					<button type="button" data-toggle="modal" data-target="#exampleModalLong{{$order->id}}" class="btn btn-success btn-xs">
						<i class="fa fa-eye"></i>
					</button>	
					</div>			

<div class="modal fade" id="exampleModalLong{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-eye"></i>View Products</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle">
        	<thead>
        		<tr>
        			<td class="center">Product Image</td>
        			<td class="center">Product Name</td>        			
        			<td class="center">Quantity</td>
        			<td class="center">Price</td>
        			<td class="center">Subtotal</td>
        		</tr>
        	</thead>
        	<tbody>
        		@foreach($order->orderProduct as $product)
        		<tr class="odd gradeX">
        			 <td class="center"><img src="{{$product->product->image}}" alt="Product Image" height="50"></td>
        			<td class="center">{{$product->product->name}}</td>
        			<td class="center">{{$product->quantity}}</td>
        			<td class="center">Rs.{{$product->product->newprice}}</td>
        			<td class="center">Rs.{{($product->quantity)*($product->product->newprice)}}</td> 
        		</tr>
        		@endforeach
                <tr class="odd gradeX">
                     <td class="center"></td>
                    <td class="center"></td>
                    <td class="center"></td>
                    <td class="center"><b>Total:-</b></td>
                    <td class="center">Rs.{{$order->total}}</td> 
                </tr>
        	</tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>			
					<div style="float: left;">
                        <a href='{{route('order.edit',$order->id)}}'>
                            <button class="btn btn-primary btn-xs">
                                <i class="fa fa-edit"></i>
                            </button>
                        </a>
                    </div>	

                    <button class="btn btn-danger btn-xs" type="button" onclick="deleteItem({{ $order->id }})">
                                                    <i class="fa fa-trash"></i>
                                                </button>
            <form id="delete-form-{{ $order->id }}" action="{{ route('order.destroy',$order->id) }}" method="POST" style="display: none;">
                {!! method_field('delete') !!}
                {!! csrf_field() !!}
            </form>


					
				</td>
			</tr>
			@endforeach


        

		</tbody>
		@else
        <tr>
            <td colspan="100%"><h4>Orders Table is Empty.</h4></td>
        </tr>
        @endif
	</table>
</div>

@endsection
