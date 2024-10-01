@extends('layouts.app')
@section('title', 'Feature Services')


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
                               
                                    <h4 class="pull-left page-title">Edit Feature Services Elements</h4>
                               
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Feature Services</h3>
                                    </div>

                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12">

                                                <div class="m-t-20">
                                                    <form class="" action="{{route('feature.update', $features->id)}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        
                                                        <div class="form-group">
                                                            <label>Feature Services title</label>
                                                            <input type="text" class="form-control" name="title" value="{{$features->title}}" required placeholder="Feature title"/>
                                                        </div>
                                                       <div class="form-group">
                                                            <label>Feature Services subtitle</label>
                                                            <div>
                                                                <input type="text" id="" class="form-control" name="subtitle" value="{{$features->subtitle}}" required placeholder="Enter Feature subtitle"/>
                                                            </div>         
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label>Image</label>
                                                            <div>
                                                            <img src="{{asset('uploads/feature/'. $features->image)}}" style="height:70px; width:70px;" alt="">
                                                                <input type="file" class="form-control" name="image" required placeholder=" Image"/>
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