@extends('layouts.admin-master')
@section('breadcrumb','Slider List')
@section('content')

                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="btn-group">
                                    <a href="{{route('slider.create')}}" class="btn btn-info" role="button"><i class="fa fa-plus" aria-hidden="true"></i> Add New</a>
                                </div>
                            </div>                                                      
                        </div>

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
                                    {!! Form::open(['method'=>'DELETE','action'=>['SliderController@destroy',$slider->id]])!!}
                                    {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs','onClick'=>'return confirm("Are you sure to delete?")'])  }}
                                    {!! Form::close()!!}

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








