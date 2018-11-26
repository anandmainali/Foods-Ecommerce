@extends('layouts.admin-master')
@section('breadcrumb','Comment List')
@section('content')

          <div class="card-body ">
            
            <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
              <thead>
                <tr>
                  <th>S.N.</th>
                  <th> Name </th>                                                
                  <th> Email </th>
                  <th> Mobile </th>
                  <th> Message </th>                                                
                  <th> Action </th>
                </tr>
              </thead>
              @if(count($comments) > 0)
              <tbody>
               
                @foreach($comments as $key=>$comment)
                <tr class="odd gradeX">
                  <td>{{++$key}}</td>
                  <td>{{$comment->name}}</td>
                  <td>{{$comment->email}}</td>
                  <td>{{$comment->mobile}}</td>
                  
                  <td>{{$comment->message}}</td>
                  <td style="width: 60px;">
                    {!! Form::open(['method'=>'DELETE','action'=>['CommentController@destroy',$comment->id]])!!}
                    {!! Form::button('<i class="fa fa-trash"></i>',['type'=>'submit','class'=>'btn btn-danger btn-xs','return onClick'=>'confirm("Are you sure to delete?")'])!!}
                    {!! Form::close()!!}
                  </td>
                </tr>
                @endforeach
              </tbody>
              @else
              
              <tr>
               <td colspan="100%"><h4>Comment Table is Empty.</h4></td>
             </tr>
             @endif
           </table>
         </div>
      
@endsection
