@extends('layouts.app')
@section('title', 'Main Menu')


@section('content')

<div class="container" style="margin-top:150px; margin-left:250px">

<div class="row">
     
                            <div class="col-md-12">
                                <div class="mb-5" style="margin-bottom:10px">
                                <a href="{{route('home.create')}}" class="btn btn-primary">Main Menu Add </a>
                                </div>

                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Main Menu</h3>
                                    </div>
                                    @foreach ($menus as $key=>$menu)
                                <div class="logo">
                                    <h4>Logo Image</h4>
                                    <img src="{{asset('uploads/home/'. $menu->image)}}" style="width:200px;" alt="">

                                </div>
                                <div class="top-location">
                                    <table style="width:100%; border:1px solid black;">
                                        <tr style="border:1px solid black;">
                                            <th>Email: </th>
                                            <th>Address</th>
                                        </tr>
                                        <tr>
                                            <td >{{$menu->email}}</td>
                                            <td>{{$menu->location}}</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="socail " style="margin-top:30px">

                                <table style="width:100%; border:1px solid black;">
                                        <tr style="border:1px solid black;">
                                            <th style="border:1px solid black;">Facebook</th>
                                            <th>Twitter</th>
                                            <th>Instagram</th>
                                            <th>Pinterest</th>
                                            <th>Dribble</th>
                                            <th>Linkedin</th>
                                            <th>Phone</th>
                                        </tr>
                                        <tr>
                                            <td>{{$menu->facebook}}</td>
                                            <td>{{$menu->twitter}}</td>
                                            <td>{{$menu->instagram}}</td>
                                            <td>{{$menu->pinterest}}</td>
                                            <td>{{$menu->dribble}}</td>
                                            <td>{{$menu->linkedin}}</td>
                                            <td>{{$menu->phone}}</td>
                                           
                                        </tr>
                                    </table>
                                </div>
                                <div class="action">
                                <a href="{{route('home.edit', $menu->id)}}" class="btn btn-primary m-5">Edit</a>
                                                    <form id="delete-form-{{ $menu->id }}" action="{{route('home.destroy', $menu->id )}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    </form>
                                                    <button class="btn btn-danger" type="button" onclick="if(confirm('Are you sure to want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $menu->id }}').submit();
                                                    
                                                    }else{
                                                    event.preventDefault();
                                                    }">Delete</button>
                                </div>
                                @endforeach

                                </div>
                                
                            </div>

                        </div>
</div>


@endsection