@extends('layouts.app')
@section('title', 'Portfolio Items') 


@section('content')

<div class="container" style="margin-top:150px; margin-left: 250px;">

<div class="row">
                            <div class="col-md-12">
                                <div class="mb-5" style="margin-bottom:10px">
                                <a href="{{route('item.create')}}" class="btn btn-primary">Add New Item</a>
                                </div>

                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Portfolio Items</h3>
                                    </div>
                                    <div class="panel-body">
                                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Sl</th>
                                                    <th>Name</th>
                                                    <th>Image</th>
                                                    <th>Category</th>
                                                    <th>Price</th>
                                                    <th>Detiles</th>
                                                    <th>Clients Name'</th>
                                                    <th>Service</th>
                                                    <th>Project</th>
                                                     <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($items as $key=>$item)
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{$item->name}}</td>
                                                    <td><img src="{{asset('uploads/item/'. $item->image)}}" style="height:70px; width:70px;" alt=""></td>
                                                    <td>{{$item->category->name}}</td>
                                                    <td>{{$item->price}}</td>
                                                    <td>{{$item->description}}</td>
                                                    <td>{{$item->clients_name}}</td>
                                                    <td>{{$item->service}}</td>
                                                    <td>{{$item->project}}</td>
                                                    
                                                   
                                                    <td><a href="{{route('item.edit', $item->id)}}" class="btn btn-primary m-5">Edit</a>
                                                    <form id="delete-form-{{ $item->id }}" action="{{route('item.destroy', $item->id )}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    </form>
                                                    <button class="btn btn-danger" type="button" onclick="if(confirm('Are you sure to want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $item->id }}').submit();
                                                    
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