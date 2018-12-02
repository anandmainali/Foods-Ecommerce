@extends('layouts.admin-master')
@section('button')
<br>
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-6">
      <div class="btn-group">
        <a href="{{route('subcategory.create')}}" class="btn btn-info" role="button"><i class="fa fa-plus" aria-hidden="true"></i> Add New</a>
      </div>
    </div>
  </div>
  @endsection
@section('breadcrumb','All SubCategories')
@section('content')
<div class="card-body ">
    <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle display" id="example4">
        <thead>
            <tr>
                <th>S.N.</th>
                <th>Category Name </th>         
                <th>SubCategory Name</th>                     
                <th> Action </th>
            </tr>
        </thead>
        @if(count($subcategories) > 0)
        <tbody>
            @foreach($subcategories as $key=>$subcategory)
            <tr class="odd gradeX">
                <td class="text-center">{{++$key}}</td>
                <td>{{$subcategory->category->name}}</td>
                <td>{{$subcategory->name}}</td>
                <td style="width: 100px;">
                    <div style="float: left;">
                        <a href='{{route('subcategory.edit',$subcategory->id)}}'>
                            <button class="btn btn-primary btn-xs">
                                <i class="fa fa-edit"></i>
                            </button>
                        </a>
                    </div>
                    <button class="btn btn-danger btn-xs" type="button" onclick="deleteItem({{ $subcategory->id }})">
                                                    <i class="fa fa-trash"></i>
                                                </button>
            <form id="delete-form-{{ $subcategory->id }}" action="{{ route('subcategory.destroy',$subcategory->id) }}" method="POST" style="display: none;">
                {!! method_field('delete') !!}
                {!! csrf_field() !!}
            </form>                </td>
            </tr>
            @endforeach
        </tbody>
        @else
        <tr>
            <td colspan="100%">
                <h4>Subcategory Table is Empty.</h4>
            </td>
        </tr>
        @endif
    </table>
</div>

@endsection


