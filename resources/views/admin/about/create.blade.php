@extends('layouts.app')
@section('title', 'About us')


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
                               
                                    <h4 class="pull-left page-title">Aboutus page</h4>
                               
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">add about us info</h3>
                                    </div>

                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12">

                                                <div class="m-t-20">
                                                    <form class="" action="{{route('about.store')}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label>About title</label>
                                                            <input type="text" class="form-control" name="abouttitle" required placeholder="About title"/>
                                                        </div>
                                                       <div class="form-group">
                                                            <label>About Description</label>
                                                            <div>
                                                                <textarea name="aboutdescription" rows="4" cols="80" id="" required placeholder="Enter about description"></textarea>
                                                               
                                                            </div>         
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Phone</label>
                                                            <div>
                                                                <input type="text" class="form-control" name="phone" required placeholder="Enter phone number"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Button Url</label>
                                                            <div>
                                                                <input type="text" class="form-control" name="abbutton" required placeholder="Enter a url"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Experience</label>
                                                            <div>
                                                                <input type="text" class="form-control" name="experience" required placeholder="Enter Experience year"/>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label>Project Complete</label>
                                                            <div>
                                                                <input type="text" class="form-control" name="projectcomplete" required placeholder="Enter your project complete no"/>
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