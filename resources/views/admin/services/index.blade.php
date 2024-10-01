@extends('layouts.app')
@section('title', 'Services')


@section('content')

<div class="container" style="margin-top:150px; margin-left:250px">

<div class="row">
                            <div class="col-md-12">
                                <div class="mb-5" style="margin-bottom:10px">
                                <a href="{{route('services.create')}}" class="btn btn-primary">Add New Services</a>
                                </div>

                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Services Page</h3>
                                    </div>
                                    <div class="panel-body">
                                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Sl</th>
                                                    <th>Services Name</th>
                                                    <th>Image</th>
                                                    <th>Service List</th>
                                                    <!-- <th>Service Item-2</th>
                                                    <th>Service Item-3</th>
                                                    <th>Service Item-4</th>
                                                    <th>Service Item-5</th> -->
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($services as $key=>$service)
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{$service->services_name}}</td>

                                                    <td><img src="{{asset('uploads/service/'. $service->image)}}" style="height:70px; width:70px;" alt=""></td>
                                                    <td>{{$service->servicesitem1}} </br>{{$service->servicesitem2}}</br>{{$service->servicesitem3}}{{$service->servicesitem4}}</br>{{$service->servicesitem5}}</br></td>
                                                 

                                                    <td><a href="{{route('services.edit', $service->id)}}" class="btn btn-primary m-5">Edit</a>
                                                    <form id="delete-form-{{ $service->id }}" action="{{route('services.destroy', $service->id )}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    </form>
                                                    <button class="btn btn-danger" type="button" onclick="if(confirm('Are you sure to want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $service->id }}').submit();
                                                    
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