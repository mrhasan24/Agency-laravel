@extends('layouts.app')
@section('title', 'Main Menu')


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
                               
                                    <h4 class="pull-left page-title">Edit Services Elements</h4>
                               
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Services</h3>
                                    </div>

                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12">

                                                <div class="m-t-20">
                                                    <form class="" action="{{route('services.update', $services->id)}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        
                                                        <div class="form-group">
                                                            <label>Services name</label>
                                                            <input type="text" class="form-control" name="services_name" value="{{$services->services_name}}" required placeholder="services_name"/>
                                                        </div>
                                                       <div class="form-group">
                                                            <label>Services Item-1</label>
                                                            <div>
                                                                <input type="text" id="" class="form-control" name="servicesitem1" value="{{$services->servicesitem1}}" required placeholder="Enter services item-1"/>
                                                            </div>         
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Services Item-2</label>
                                                            <div>
                                                                <input type="text" class="form-control" name="servicesitem2" value="{{$services->servicesitem2}}" required placeholder="Services Item-2"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Services Item-3</label>
                                                            <div>
                                                                <input type="text" class="form-control" name="servicesitem3" value="{{$services->servicesitem3}}" required placeholder="Enter Services Item-3"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Services Item-4</label>
                                                            <div>
                                                                <input type="text" class="form-control" name="servicesitem4" value="{{$services->servicesitem4}}" required placeholder="Enter Services Item-4"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Services Item-4</label>
                                                            <div>
                                                                <input type="text" class="form-control" name="servicesitem5" value="{{$services->servicesitem5}}" required placeholder="Enter Services Item-5"/>
                                                            </div>
                                                        </div>


                                                        <div class="form-group">
                                                            <label>Image</label>
                                                            <div>
                                                            <img src="{{asset('uploads/service/'. $services->image)}}" style="height:70px; width:70px;" alt="">
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