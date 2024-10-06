@extends('layouts.app')
@section('title', 'skill')


@section('content')

<div class="container" style="margin-top:150px; margin-left:250px">

<div class="row">
                            <div class="col-md-12">
                                <div class="mb-5" style="margin-bottom:10px">
                                <a href="{{route('skill.create')}}" class="btn btn-primary">Add New Skill info</a>
                                </div>

                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Skill info Page</h3>
                                    </div>
                                    <div class="panel-body">
                                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Sl</th>
                                                    <th>Skill Title</th>
                                                    <th>Skill Parcent</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($skills as $key=>$skill)
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{$skill->skilltitle}}</td>
                                                    <td>{{$skill->skillparcent}}</td>
                                                 

                                                    <td><a href="{{route('skill.edit', $skill->id)}}" class="btn btn-primary m-5">Edit</a>
                                                    <form id="delete-form-{{ $skill->id }}" action="{{route('skill.destroy', $skill->id )}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    </form>
                                                    <button class="btn btn-danger" type="button" onclick="if(confirm('Are you sure to want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $skill->id }}').submit();
                                                    
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