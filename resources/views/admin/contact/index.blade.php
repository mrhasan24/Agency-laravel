@extends('layouts.app')
@section('title', 'contact')


@section('content')

<div class="container" style="margin-top:150px; margin-left: 250px;">

<div class="row">
                            <div class="col-md-12">
                                

                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">contacts Page</h3>
                                    </div>
                                    <div class="panel-body">
                                        <table style=' table-layout: fixed; word-wrap: break-word;' id="datatable-responsive" class="table table-striped table-bordered dt-responsive" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th style="min-width: 10px;max-width: 10px;">Sl</th>
                                                    <th style="min-width: 80px;max-width: 80px;">Name</th>
                                                    <th style="min-width: 120px;max-width: 150px;">Email</th>
                                                    <th style="min-width: 60px;max-width: 70px;">Phone</th>
                                                    <th style="min-width: 600px;max-width: 70px;">Subject</th>
                                                  
                                                    <th style="min-width: 300px;max-width: 500px;">message</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($contacts as $key=>$contact)
                                                <tr>
                                                    <td style="min-width: 10px;max-width: 10px;">{{$key+1}}</td>
                                                    <td>{{$contact->name}}</td>
                                                    <td>{{$contact->email}}</td>
                                                    <td>{{$contact->phone}}</td>
                                                    <td>{{$contact->subject}}</td>
                                                    <td style="  table-layout: fixed; word-wrap: break-word; width: 300px;">{{$contact->message}}</td>
                                                   
                                                    
                                                    <td>
                                                        <button class="btn btn-info mb-5" ><a href="mailto:{{$contact->email}}"  tagate="blank"><i class="fa fa-envelope"></i></a></button>
                                                    <form id="delete-form-{{ $contact->id }}" action="{{route('contact.destroy', $contact->id )}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    </form>
                                                    <button class="btn btn-danger" type="button" onclick="if(confirm('Are you sure to want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $contact->id }}').submit();
                                                    
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