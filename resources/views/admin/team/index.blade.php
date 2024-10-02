@extends('layouts.app')
@section('title', 'Team')


@section('content')

<div class="container" style="margin-top:150px; margin-left: 250px; ">

<div class="row">
                            <div class="col-md-12">
                                <div class="mb-5" style="margin-bottom:10px">
                                <a href="{{route('team.create')}}" class="btn btn-primary">Add New team mamber</a>
                                </div>

                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">team mamber Page</h3>
                                    </div>
                                    <div class="panel-body">
                                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Sl</th>
                                                    <th>Name</th>
                                                    <th>Designation</th>
                                                    <th>Image</th>
                                                    <th>Social</th>

                                                    <th>Information</th>
                                                    <th>Special In</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                    <th>Website</th>
                                                    <th>Education Qualification</th>
                                                    <th>Technology skill</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            @foreach ($teams as $key=>$team)
                                            <tbody>
                                            
                                                <tr>
                                                <td>{{++$key}}</td>
                                                    <td>{{$team->name}}</td>
                                                    <td>{{$team->designation}}</td>
                                                    <td><img src="{{asset('uploads/team/'. $team->image)}}" style="height:70px; width:70px;" alt=""></td>
                                                    <td>{{$team->facebook_link}} </br>{{$team->twitter_link}} </br> {{$team->pinterest_link}} </br> {{$team->instagram_link}} </br>{{$team->dribbble_link}} </br> {{$team->linkedin_link}}</td>
                                                    <td>{{$team->mamber_info}}</td>
                                                    <td>{{$team->mamber_keyword_1}} </br>{{$team->mamber_keyword_2}}</td>
                                                    <td>{{$team->mamber_phone}}</td>
                                                    <td>{{$team->mamber_email}}</td>
                                                    <td>{{$team->mamber_website}}</td>
                                                    <td>{{$team->education_qualification}}</td>
                                                    <td>{{$team->technology_skill_1}} : {{$team->technology_skill_parcent_1}}% </br>{{$team->technology_skill_2}}: {{$team->technology_skill_parcent_2}}% </br>{{$team->technology_skill_3}}: {{$team->technology_skill_parcent_3}}% </br>{{$team->technology_skill_4}}: {{$team->technology_skill_parcent_4}}%</td>

                                                  
                                                    <td><a href="{{route('team.edit', $team->id)}}" class="btn btn-primary m-5">Edit</a>
                                                    <form id="delete-form-{{ $team->id }}" action="{{route('team.destroy', $team->id )}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    </form>
                                                    <button class="btn btn-danger" type="button" onclick="if(confirm('Are you sure to want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $team->id }}').submit();
                                                    
                                                    }else{
                                                    event.preventDefault();
                                                    }">Delete</button></td>
                                                </tr>
                                                
                                           
                                                
                                            </tbody>
                                            @endforeach
                                        </table>

                                    </div>
                                </div>
                            </div>

                        </div>
</div>


@endsection