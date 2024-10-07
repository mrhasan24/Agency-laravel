@extends('layouts.app')
@section('title', 'item')


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
                               
                                    <h4 class="pull-left page-title">Edit Home Elements</h4>
                               
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Data add</h3>
                                    </div>

                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12">

                                                <div class="m-t-20">
                                                    <form class="" action="{{route('item.update', $item->id)}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input type="text" class="form-control" name="name" value="{{$item->name}}" required placeholder="Name Here"/>
                                                        </div>
                                                       <div class="form-group">
                                                            <label>Category</label>
                                                            <div>
                                                                <select name="category" id="" class="form-control">
                                                                @foreach ($categories as $category )

                                                                <option value="{{ $category->id }}">{{ $category->name }}</option>

                                                                @endforeach


                                                                </select>
                                                              
                                                            </div>         
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Price</label>
                                                            <div>
                                                                <input type="text" class="form-control" name="price" value="{{$item->price}}" required placeholder="price"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Description</label>
                                                            <div>
                                                            <textarea id="" name="description" rows="4" cols="50">{{$item->description}}</textarea>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Image</label>
                                                            <div>
                                                            <img src="{{asset('uploads/item/'. $item->image)}}" style="height:70px; width:70px;" alt="">
                                                                <input type="file" class="form-control" name="image" required placeholder="mage"/>
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