@include('../layouts.frontend.menu')
@include('../layouts.frontend.head')


  <!--Page Header Start-->
  <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="page-header__shape-1"></div>
            <div class="page-header__shape-2 float-bob-y">
                <img src="{{asset('frontend/images/shapes/page-header-shape-2.png')}}" alt="">
            </div>
            <div class="page-header__shape-3 float-bob-x">
                <img src="{{asset('frontend/images/shapes/page-header-shape-3.png')}}" alt="">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>About Us</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><span>-</span></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        @include('layouts.frontend.feature')
        @include('layouts.frontend.about')
        <div class="success mt-5">
        @include('layouts.frontend.successscore')
        </div>

       

        <div class="teamsec pt-5">
        @include('layouts.frontend.team')
        </div>


        <!--Testimonial Four Start-->
        <section class="testimonial-four">
            <div class="testimonial-four__wrap">
                <div class="container">
                    <div class="section-title text-center">
                        <div class="section-title__tagline-box">
                            <div class="section-title__tagline-icon">
                                <img src="assets/images/icon/section-title-icon.png" alt="">
                            </div>
                            <p class="section-title__tagline">Our Testimonial</p>
                        </div>
                        <h2 class="section-title__title">Our Sweet Client Feedback</h2>
                    </div>
                    <div class="testimonial-four__inner">
                        <div class="testimonial-four__carousel owl-carousel owl-theme thm-owl__carousel"
                            data-owl-options='{
                            "loop": true,
                            "autoplay": true,
                            "margin": 180,
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
                                    "items": 2
                                },
                                "1200": {
                                    "items": 2
                                }
                            }
                        }'>
                            <!--Testimonial Four Single Start-->
                            @foreach ($testimonials as $key=>$testimonial)
                            <div class="item">
                                <div class="testimonial-four__single">
                                    <div class="testimonial-four__quote">
                                        <span class="icon-left1"></span>
                                    </div>
                                    <p class="testimonial-four__text">{{$testimonial->review_artical}}</p>
                                    <div class="testimonial-four__client-box">
                                        <div class="testimonial-four__client-img">
                                            <img src="{{asset('uploads/testimonial/'. $testimonial->image)}}" width="80" style="width: 80px; border-radius: 50%;" alt="">
                                        </div>
                                        <div class="testimonial-four__client-info">
                                            <h3 class="testimonial-four__client-name">{{$testimonial->Client_name}}</h3>
                                            <p class="testimonial-four__client-sub-title">{{$testimonial->Client_designation}}</p>
                                            <div class="testimonial-four__client-ratting">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!--Testimonial Four Single End-->
                           
                        
                          
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial Four End-->
   
    @include('layouts.frontend.newsletter')
    @include('layouts.frontend.footer')




        @include('layouts.frontend.jslink')

