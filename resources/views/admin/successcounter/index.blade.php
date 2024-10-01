@extends('layouts.app')
@section('title', 'Success Counter')


@section('content')

<div class="container" style="margin-top:150px; margin-left: 250px;">

<div class="row">
                            <div class="col-md-12">
                                <div class="mb-5" style="margin-bottom:10px">
                                <a href="{{route('successcounter.create')}}" class="btn btn-primary">Add New Success Counter</a>
                                </div>

                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Success Counter Page</h3>
                                    </div>
                                    <div class="panel-body">
                                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Sl</th>
                                                    <th>Title</th>
                                                    <th>Amaunt</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($successcounters as $key=>$successcounter)
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{$successcounter->title}}</td>
                                                    <td>{{$successcounter->counter}}</td>

                                                    <td><img src="{{asset('uploads/successcounter/'. $successcounter->image)}}" style="height:70px; width:70px;" alt=""></td>
                                                    

                                                    <td><a href="{{route('successcounter.edit', $successcounter->id)}}" class="btn btn-primary m-5">Edit</a>
                                                    <form id="delete-form-{{ $successcounter->id }}" action="{{route('successcounter.destroy', $successcounter->id )}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    </form>
                                                    <button class="btn btn-danger" type="button" onclick="if(confirm('Are you sure to want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $successcounter->id }}').submit();
                                                    
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