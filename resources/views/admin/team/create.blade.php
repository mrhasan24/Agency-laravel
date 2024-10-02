@extends('layouts.app')
@section('title', 'Add New Team mamber') 


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
                               
                                    <h4 class="pull-left page-title">Add new mamber</h4>
                               
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Data add for New Mamber</h3>
                                    </div>

                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12">

                                                <div class="m-t-20">
                                                    <form class="" action="{{route('team.store')}}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input type="text" class="form-control" name="name" required placeholder="Name"/>
                                                        </div>
                                                       <div class="form-group">
                                                            <label>Designation</label>
                                                            <div>
                                                                <input type="text" id="" class="form-control" name="designation" required placeholder="Enter designation"/>
                                                            </div>         
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Facebook Url</label>
                                                            <div>
                                                                <input type="text" class="form-control" name="facebook_link" required placeholder="Enter facebook_link"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Twitter Url</label>
                                                            <div>
                                                                <input type="text" class="form-control" name="twitter_link" required placeholder="Enter twitter_link"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Pinterest Url</label>
                                                            <div>
                                                                <input type="text" class="form-control" name="pinterest_link" required placeholder="Enter pinterest_link"/>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label>Instagram Url</label>
                                                            <div>
                                                                <input type="text" class="form-control" name="instagram_link" required placeholder="Enter instagram_link"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Dribbble Url</label>
                                                            <div>
                                                                <input type="text" class="form-control" name="dribbble_link" required placeholder="Enter dribbble_link"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Linkdin Url</label>
                                                            <div>
                                                                <input type="text" class="form-control" name="linkedin_link" required placeholder="Enter Linkdin_link"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Image</label>
                                                            <div>
                                                                <input type="file" class="form-control" name="image" required placeholder="Image"/>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Mamber Information</label>
                                                            <div>
                                                                <textarea cols="30" rows="5" class="form-control" name="mamber_info" id=""></textarea>
                                                               
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Mamber Speciality 1</label>
                                                            <div>
                                                               <input type="text" class="form-control" name="mamber_keyword_1">
                                                               
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Mamber Speciality 2</label>
                                                            <div>
                                                               <input type="text" class="form-control" name="mamber_keyword_2">
                                                               
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Phone Number</label>
                                                            <div>
                                                               <input type="number" class="form-control" name="mamber_phone">
                                                               
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <div>
                                                               <input type="email" class="form-control" name="mamber_email">
                                                               
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Website</label>
                                                            <div>
                                                               <input type="text" class="form-control" name="mamber_website">
                                                               
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Education Qualification</label>
                                                            <div>
                                                            <textarea cols="30" rows="5" class="form-control" name="education_qualification" id=""></textarea>
                                                              
                                                               
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Technology Name & Skill -1</label>
                                                            <div>
                                                               <input type="text"  name="technology_skill_1" placeholder="Enter technology Name">
                                                               <input type="number" name="technology_skill_parcent_1" placeholder="Enter Your Skilled Parcent">
                                                               
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Technology Name & Skill -2</label>
                                                            <div>
                                                               <input type="text"  name="technology_skill_2" placeholder="Enter technology Name">
                                                               <input type="number" name="technology_skill_parcent_2" placeholder="Enter Your Skilled Parcent">
                                                               
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Technology Name & Skill -3</label>
                                                            <div>
                                                               <input type="text"  name="technology_skill_3" placeholder="Enter technology Name">
                                                               <input type="number" name="technology_skill_parcent_3" placeholder="Enter Your Skilled Parcent">
                                                               
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Technology Name & Skill -4</label>
                                                            <div>
                                                               <input type="text"  name="technology_skill_4" placeholder="Enter technology Name">
                                                               <input type="number" name="technology_skill_parcent_4" placeholder="Enter Your Skilled Parcent">
                                                               
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