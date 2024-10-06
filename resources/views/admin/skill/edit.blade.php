@extends('layouts.app')
@section('title', 'skills')


@section('content')

       <!-- Begin page -->
       <div id="wrapper" style="margin-top:50px">
            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                               
                                    <h4 class="pull-left page-title">Edit skills Elements</h4>
                               
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">skills info</h3>
                                    </div>

                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12">

                                                <div class="m-t-20">
                                                    <form class="" action="{{route('skill.update', $skills->id)}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        

                                                        <div class="form-group">
                                                            <label>skill title</label>
                                                            <input type="text" class="form-control" name="skilltitle" value="{{$skills->skilltitle}}" required placeholder="skill title"/>
                                                        </div>
                                                       <div class="form-group">
                                                            <label>Skill Score</label>
                                                            <div>
                                                            <input type="text" class="form-control" name="skillparcent" value="{{$skills->skillparcent}}"/>
                                                            </div>         
                                                        </div>
                                                      
                                                            
                                                        <div class="form-group">
                                                            <div>
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                                    Submit
                                                                </button>
                                                                <button type="reset" class="btn btn-default waves-effect m-l-5">
                                                                    Cancel
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>


                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div> <!-- container -->

                </div> <!-- content -->



            </div>
            <!-- End Right content here -->

        </div>


@endsection