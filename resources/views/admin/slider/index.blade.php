@extends('layouts.app')
@section('title', 'Slider')
@section('content')
<div class="container" style="margin-top:150px; margin-left:250px;">

<div class="row">
                            <div class="col-md-12">
                                <div class="mb-5" style="margin-bottom:10px">
                                <a href="{{route(name: 'slider.create')}}" class="btn btn-primary">Add New Slider</a>
                                </div>

                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Slider Control Page</h3>
                                    </div>
                                    <div class="panel-body">
                                        <table  id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Sl</th>
                                                    <th>Tag</th>
                                                    <th>Title</th>
                                                    <th style="table-layout:fixed; width:90px; word-break:break-all;"> Sub Title</th>
                                                    <th>Button link</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                            @foreach ($sliders as $key=>$slider)
                                                <tr>
                                                <td>{{$key+1}}</td>
                                                    <td>{{$slider->tag}}</td>
                                                    <td>{{$slider->title}}</td>
                                                    <td>{{$slider->sub_title}}</td>
                                                    <td>{{$slider->button_link}}</td>
                                                    <td><img src="{{asset('uploads/slider/'. $slider->image)}}" style="height:70px; width:70px;" alt=""></td>
                                                  
                                                    <td><a href="{{route('slider.edit', $slider->id)}}" class="btn btn-primary m-5">Edit</a>
                                                    <form id="delete-form-{{ $slider->id }}" action="{{route('slider.destroy', $slider->id )}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    </form>
                                                    <button class="btn btn-danger" type="button" onclick="if(confirm('Are you sure to want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $slider->id }}').submit();
                                                    
                                                    }else{
                                                    event.preventDefault();
                                                    }">Delete</button></td>
                                                  
                                                </tr>
                                                
                      @endforeach
                                                
                                            </tbody>
                                            
                                        </table>

                                    </div>
                                </div>
                            </div>

                        </div>
</div>


@endsection