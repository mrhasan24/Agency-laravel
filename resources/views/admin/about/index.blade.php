@extends('layouts.app')
@section('title', 'About us')


@section('content')

<div class="container" style="margin-top:150px; margin-left: 250px;">

<div class="row">
                            <div class="col-md-12">
                                <div class="mb-5" style="margin-bottom:10px">
                                <a href="{{route('about.create')}}" class="btn btn-primary">Add your About info</a>
                                </div>

                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">About us Page</h3>
                                    </div>
                                    <div class="panel-body">
                                    @foreach ($abouts as $key=>$about)
                                        <div class="aboutuss">
                                            <h3>About Title:</h3>
                                            <h1>{{$about->abouttitle}}</h1>
                                            
                                            <h3>About Discription:</h3>
                                            {{$about->aboutdescription}}
                                            <h3>Our Phone Number:</h3>
                                            {{$about->phone}}
                                            <h3>Our experience:</h3>
                                            {{$about->experience}}
                                            <h3>Our projectcomplete:</h3>
                                            {{$about->projectcomplete}}

                                            <div>Action: <a href="{{route('about.edit', $about->id)}}" class="btn btn-primary m-5">Edit</a>
                                                    <form id="delete-form-{{ $about->id }}" action="{{route('about.destroy', $about->id )}}" method="post"><br>
                                                    @csrf
                                                    @method('DELETE')
                                                    </form>
                                                    <button class="btn btn-danger" type="button" onclick="if(confirm('Are you sure to want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $about->id }}').submit();
                                                    
                                                    }else{
                                                    event.preventDefault();
                                                    }">Delete</button></div>

                                        </div>

                                        @endforeach





                                       

                                    </div>
                                </div>
                            </div>

                        </div>
</div>


@endsection