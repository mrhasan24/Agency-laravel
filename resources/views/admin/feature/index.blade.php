@extends('layouts.app')
@section('title', 'Feature')


@section('content')

<div class="container" style="margin-top:150px; margin-left: 250px;">

<div class="row">
                            <div class="col-md-12">
                                <div class="mb-5" style="margin-bottom:10px">
                                <a href="{{route('feature.create')}}" class="btn btn-primary">Add New Feature services</a>
                                </div>

                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Feature services Page</h3>
                                    </div>
                                    <div class="panel-body">
                                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Sl</th>
                                                    <th>Title</th>
                                                    <th>SubTitle</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($features as $key=>$feature)
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{$feature->title}}</td>
                                                    <td>{{$feature->subtitle}}</td>

                                                    <td><img src="{{asset('uploads/feature/'. $feature->image)}}" style="height:70px; width:70px;" alt=""></td>
                                                    

                                                    <td><a href="{{route('feature.edit', $feature->id)}}" class="btn btn-primary m-5">Edit</a>
                                                    <form id="delete-form-{{ $feature->id }}" action="{{route('feature.destroy', $feature->id )}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    </form>
                                                    <button class="btn btn-danger" type="button" onclick="if(confirm('Are you sure to want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $feature->id }}').submit();
                                                    
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