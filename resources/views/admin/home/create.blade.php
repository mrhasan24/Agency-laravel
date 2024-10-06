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
                               
                                    <h4 class="pull-left page-title">Main Menu</h4>
                               
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Menu Item adding</h3>
                                    </div>

                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12">

                                                <div class="m-t-20">
                                                    <form class="" action="{{route('home.store')}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="emial" class="form-control" name="email" required placeholder="Enter Email"/>
                                                        </div>
                                                       <div class="form-group">
                                                            <label>Location</label>
                                                            <div>
                                                                <input type="text" id="" class="form-control" name="location" required placeholder="Enter  Location"/>
                                                            </div>         
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Facebook Url</label>
                                                            <div>
                                                                <input type="text" id="" class="form-control" name="facebook" required placeholder="Enter Facebook url"/>
                                                            </div>         
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Twitter Url</label>
                                                            <div>
                                                                <input type="text" id="" class="form-control" name="twitter" required placeholder="Enter Twitter url"/>
                                                            </div>         
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Instagram Url</label>
                                                            <div>
                                                                <input type="text" id="" class="form-control" name="instagram" required placeholder="Enter Instagram url"/>
                                                            </div>         
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Pinterest Url</label>
                                                            <div>
                                                                <input type="text" id="" class="form-control" name="pinterest" required placeholder="Enter Pinterest url"/>
                                                            </div>         
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Dribbble Url</label>
                                                            <div>
                                                                <input type="text" id="" class="form-control" name="dribble" required placeholder="Enter Dribbble url"/>
                                                            </div>         
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Linkdin Url</label>
                                                            <div>
                                                                <input type="text" id="" class="form-control" name="linkedin" required placeholder="Enter Linkdin url"/>
                                                            </div>         
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Phone Number</label>
                                                            <div>
                                                                <input type="text" id="" class="form-control" name="phone" required placeholder="Enter Phone Number"/>
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