<section class="testimonial-one">
            <div class="testimonial-one__wrap">
                <div class="container">
                    <div class="section-title text-center">
                        <div class="section-title__tagline-box">
                            <div class="section-title__tagline-icon">
                                <img src="frontend/images/icon/section-title-icon.png" alt="">
                            </div>
                            <p class="section-title__tagline">Our Testimonial</p>
                        </div>
                        <h2 class="section-title__title">Our Sweet Client Feedback</h2>
                    </div>
                    <div class="testimonial-one__inner">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="testimonial-one__left">
                                    <div class="testimonial-one__carousel owl-carousel owl-theme thm-owl__carousel"
                                        data-owl-options='{
                                        "loop": true,
                                        "autoplay": true,
                                        "margin": 30,
                                        "nav": true,
                                        "dots": false,
                                        "smartSpeed": 500,
                                        "autoplayTimeout": 10000,
                                        "navText": ["<span class=\"icon-back1\"></span>","<span class=\"icon-back\"></span>"],
                                        "responsive": {
                                            "0": {
                                                "items": 1
                                            },
                                            "768": {
                                                "items": 1
                                            },
                                            "992": {
                                                "items": 1
                                            },
                                            "1200": {
                                                "items": 1
                                            }
                                        }
                                    }'>
                                        <!--Testimonial One Single Start-->
                                        @foreach ($testimonials as $key=>$testimonial)
                                        <div class="item">
                                        
                                            <div class="testimonial-one__single">
                                                <div class="testimonial-one__quote">
                                                    <span class="icon-left1"></span>
                                                    
                                                </div>
                                                <p class="testimonial-one__text" style="text-align: justify;">{{$testimonial->review_artical}}
                                                   </p>
                                                <div class="testimonial-one__client-box">
                                                    <div class="testimonial-one__client-img">
                                                        <img src="{{asset('uploads/testimonial/'. $testimonial->image)}}" alt="" style="width:80px;"> 
                                                    </div>
                                                    <div class="testimonial-one__client-info">
                                                        <h3 class="testimonial-one__client-name">{{$testimonial->Client_name}}
                                                        </h3>
                                                        <p class="testimonial-one__client-sub-title">{{$testimonial->Client_designation}}</p>
                                                        <div class="testimonial-one__client-ratting">
                                                            <span class=""> 
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                           
                                                        </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        @endforeach
                                        <!--Testimonial One Single End-->
                                        <!--Testimonial One Single Start-->
                                        
                                        <!--Testimonial One Single End-->
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6">

                                <div class="testimonial-one__right">
                                    <div class="testimonial-one__img">
                                        <img src="{{asset('uploads/testimonial/shh-2024-10-03-.jpg')}}" alt="">

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>