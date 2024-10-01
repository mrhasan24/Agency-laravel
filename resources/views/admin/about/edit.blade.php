@extends('layouts.app')
@section('title', 'About US')


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
                               
                                    <h4 class="pull-left page-title">Edit About Elements</h4>
                               
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">About info</h3>
                                    </div>

                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12">

                                                <div class="m-t-20">
                                                    <form class="" action="{{route('about.update', $abouts->id)}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        

                                                        <div class="form-group">
                                                            <label>About title</label>
                                                            <input type="text" class="form-control" name="abouttitle" value="{{$abouts->abouttitle}}" required placeholder="About title"/>
                                                        </div>
                                                       <div class="form-group">
                                                            <label>About Description</label>
                                                            <div>
                                                                <textarea name="aboutdescription" rows="4" cols="80" value="{{$abouts->aboutdescription}}" id="" required placeholder="Enter about description"></textarea>
                                                               
                                                            </div>         
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Phone</label>
                                                            <div>
                                                                <input type="text" class="form-control" name="phone" value="{{$abouts->phone}}"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Button Url</label>
                                                            <div>
                                                                <input type="text" class="form-control" name="abbutton" value="{{$abouts->abbutton}}"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Experience</label>
                                                            <div>
                                                                <input type="text" class="form-control" name="experience" value="{{$abouts->experience}}"/>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label>Project Complete</label>
                                                            <div>
                                                                <input type="text" class="form-control" name="projectcomplete" value="{{$abouts->projectcomplete}}"/>
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