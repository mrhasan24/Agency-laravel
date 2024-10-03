@extends('layouts.app')
@section('title', 'Testimonial')

 
@section('content')

<div class="container" style="margin-top:150px; margin-left: 250px;">

<div class="row">
                            <div class="col-md-12">
                                <div class="mb-5" style="margin-bottom:10px">
                                <a href="{{route('testimonial.create')}}" class="btn btn-primary">Add New Testimonial</a>
                                </div>

                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Testimonial</h3>
                                    </div>
                                    <div class="panel-body">
                                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Sl</th>
                                                    <th>Client name</th>
                                                    <th>Client Designation</th>
                                                    <th>Review Artical</th>
                                                    <th>Client Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($testimonials as $key=>$testimonial)
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{$testimonial->Client_name}}</td>
                                                    <td>{{$testimonial->Client_designation}}</td>
                                                    <td>{{$testimonial->review_artical}}</td>
                                                    <td><img src="{{asset('uploads/testimonial/'. $testimonial->image)}}" style="height:70px; width:70px;" alt=""></td>
                                                    

                                                    <td><a href="{{route('testimonial.edit', $testimonial->id)}}" class="btn btn-primary m-5">Edit</a>
                                                    <form id="delete-form-{{ $testimonial->id }}" action="{{route('testimonial.destroy', $testimonial->id )}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    </form>
                                                    <button class="btn btn-danger" type="button" onclick="if(confirm('Are you sure to want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $testimonial->id }}').submit();
                                                    
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