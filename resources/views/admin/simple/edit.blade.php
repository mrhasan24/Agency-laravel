@extends('layouts.app')
@section('title', 'Edit Your Slider')


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
                               
                                    <h4 class="pull-left page-title">Edit Slider Elements</h4>
                               
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Edit Your Slider</h3>
                                    </div>

                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12">

                                                <div class="m-t-20">
                                                    <form class="" action="{{route('slider.update', $slider->id)}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group">
                                                            <label>Tag</label>
                                                            <input type="text" class="form-control" name="tag" value="{{$slider->tag}}" required placeholder="Tag Here"/>
                                                        </div>
                                                       <div class="form-group">
                                                            <label>Title</label>
                                                            <div>
                                                                <input type="text" id="" class="form-control" name="title" value="{{$slider->title}}" required placeholder="Enter Title"/>
                                                            </div>         
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Sub Title</label>
                                                            <div>
                                                                <input type="text" class="form-control" name="sub_title" value="{{$slider->sub_title}}" required placeholder="Enter Sub title"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Button</label>
                                                            <div>
                                                                <input type="text" class="form-control" name="button_link" value="{{$slider->button_link}}" required placeholder="Enter Button link"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Image</label>
                                                            <div>
                                                            <img src="{{asset('uploads/slider/'. $slider->image)}}" style="height:70px; width:70px;" alt="">
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