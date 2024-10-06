<section class="services-one" style="margin-top: 20px; ">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-icon">
                            <img src="frontend/images/icon/section-title-icon.png" alt="">
                        </div>
                        <p class="section-title__tagline">What We Offering</p>
                    </div>
                    <h2 class="section-title__title">We Make Bright Agency</h2>
                </div>
                <div class="row">
                    
                <div class="services-one__inner">
                    <div class="col-md-12">
                        
                    <ul class="services-one__services-list list-unstyled">



                    @foreach ($services as $key=>$service)
                        <div class="col-md-4">
                            <div class="servicesitem"> 
                                <div class="services-one__single product">
                                    <div class="services-one__icon">
                                    <img src="{{asset('uploads/service/'. $service->image)}}" alt="">
                                       <h3 class="services-one__title ">   
                                       <a href="#">{{$service->services_name}}</a></h3>
                                   </div>
                                   <div class="product-text">  

                                   <div class="ser-item-list">
                                    <a href="#"><li>{{$service->servicesitem1}}</li></a>
                                    <a href="#"><li>{{$service->servicesitem2}}</li></a>
                                    <a href="#"><li>{{$service->servicesitem3}}</li></a>
                                    <a href="#"><li>{{$service->servicesitem4}}</li></a>
                                    <a href="#"><li>{{$service->servicesitem5}}</li></a>




                                   </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach

                    </ul>

                    </div> 
                </div>
                </div>
            </div>
        </section>