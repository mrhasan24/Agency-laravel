@extends('layouts.app')

@section('title', 'Testimonial')


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
                               
                                    <h4 class="pull-left page-title">Add New Testimonial</h4>
                               
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Testimonial adding</h3>
                                    </div>

                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12">

                                                <div class="m-t-20">
                                                    <form class="" action="{{route('testimonial.store')}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label>Client name</label>
                                                            <input type="text" class="form-control" name="Client_name" required placeholder="Clientname"/>
                                                        </div>
                                                       <div class="form-group">
                                                            <label>Client Designation</label>
                                                            <div>
                                                                <input type="text" id="" class="form-control" name="Client_designation" required placeholder="Enter  Clientdes"/>
                                                            </div>         
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Review Artical</label>
                                                            <div>
                                                            <textarea class="form-control"  id="reviewartical" name="review_artical" rows="4" cols="50" required placeholder="Enter  reviewartical"></textarea>
                                                            </div>         
                                                        </div>
                                                        
                                                       
                                                       
                                                        <div class="form-group">
                                                            <label>Image</label>
                                                            <div>
                                                                <input type="file" class="form-control" name="image" required placeholder="Image"/>
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

