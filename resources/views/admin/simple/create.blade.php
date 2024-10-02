@extends('layouts.app')
@section('title', 'Create simple')


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
                               
                                    <h4 class="pull-left page-title">Create a new simple</h4>
                               
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Data add for simple</h3>
                                    </div>

                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12">

                                                <div class="m-t-20">
                                                    <form class="" action="{{route('simple.store')}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                       
                                                       <div class="form-group">
                                                            <label>Title</label>
                                                            <div>
                                                                <input type="text" id="" class="form-control" name="title" required placeholder="Enter Title"/>
                                                            </div>         
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Sub Title</label>
                                                            <div>
                                                                <input type="text" class="form-control" name="subtitle" required placeholder="Enter Sub title"/>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label>Image</label>
                                                            <div>
                                                                <input type="file" class="form-control" name="image" required placeholder="Background Image"/>
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