@include('layouts.frontend.head')

@include('layouts.frontend.menu')

        <!-- Main Sllider Start -->
           <!-- Main Sllider Start -->
           <section class="main-slider">
            <div class="main-slider__carousel owl-carousel owl-theme thm-owl__carousel"
                data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"], "margin": 0, "dots": true, "nav": false, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

                @foreach ($sliders as $key=>$slider)
                <div class="item main-slider__slide-1">
                <td>{{$key+1}}</td>
                    <div class="main-slider__bg"
                        style="background-image: url({{asset('uploads/slider/'. $slider->image)}});" >
                    </div><!-- /.slider-one__bg -->
                    <div class="main-slider__shape-1"></div>
                    <div class="main-slider__shape-2 float-bob-y">
                        <img src="{{asset('frontend/images/shapes/main-slider-shape-2.png')}}" alt="">
                    </div>
                    <div class="main-slider__shape-3 float-bob-x">
                        <img src="{{asset('frontend/images/shapes/main-slider-shape-3.png')}}" alt="">
                    </div>
                    <div class="container">
                        <div class="main-slider__content">
                            <p class="main-slider__sub-title">{{$slider->tag}}</p>
                            <h2 class="main-slider__title">{{$slider->title}}</h2>
                            <p class="main-slider__text">{{$slider->sub_title}}</p>
                            <div class="main-slider__btn-box">
                                <a href="{{url($slider->button_link)}}" target="_blank" class="thm-btn main-slider__btn">Learn More<span
                                        class="fa fa-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach



            </div>
        </section>
        <!--Main Sllider Start -->
        <!--Main Sllider Start -->

    

        <!--Feature One Start-->
   
        <!--Feature One End-->

        <section class="feature-one">
            <div class="container">
                <div class="row">
                    <!--Feature One Single Start-->
                    @foreach ($features as $feature )
                    <div class="col-xl-3 col-lg-6 col-md-6">
                    
                        <div class="feature-one__single">
                            <div class="feature-one__icon">
                                <span class=""><img src="{{asset('uploads/feature/'. $feature->image)}}" style="width:30px;" alt=""></span>
                            </div>
                            <div class="feature-one__content">
                                <h3 class="feature-one__title"><a href="#">{{$feature->title}}</a>
                                </h3>
                                <p class="feature-one__text">{{$feature->subtitle}}</p>
                            </div>
                        </div>
                       
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </section>
        <!--Feature One End-->

        <!--About One Start-->
        <section class="about-one">
            <div class="container">
           
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <div class="about-one__img wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <img src="{{asset('fontend/images/about-one-img-2.jpg')}}" alt="">
                                @foreach ($abouts as $about)
                                <div class="about-one__experience-text">
                                    <p>{{$about->experience}}years Experience</p>
                                </div>
                                <div class="about-one__img-box">
                                    <div class="about-one__img-2">
                                        <img src="{{asset('fontend/images/about-one-img-2.jpg')}}" alt="">
                                       
                                        <div class="about-one__shape-1"></div>
                                    </div>
                                </div>
                                <div class="about-one__project-complete">
                                    <div class="about-one__count count-box">
                                        <h3 class="count-text" data-stop="100" data-speed="1500">{{$about->projectcomplete}}</h3>
                                        <span>+</span>
                                    </div>
                                    <p class="about-one__count-text">Project
                                        <br> Complete</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <div class="section-title__tagline-icon">
                                        <img src="{{asset('frontend/images/icon/section-title-icon.png')}}" alt="">
                                    </div>
                                    <p class="section-title__tagline">About Us</p>
                                </div>
                                <h2 class="section-title__title">{{$about->abouttitle}}</h2>
                            </div>
                            <p class="about-one__text">{{$about->aboutdescription}}
                            </p>
                            <ul class="about-one__points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Take a look at our round up of the best shows</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>It has survived not only five centuries</p>
                                    </div>
                                </li>
                            </ul>
                            <!-- <div class="about-one__it-solution">
                                <div class="about-one__it-solution-img">
                                    <img src="assets/images/resources/about-one-it-solution-img.jpg" alt="">
                                </div>
                                <div class="about-one__it-solution-content">
                                    <p> IT Solutions Services Company
                                        Funded in <span>1998</span></p>
                                </div>
                            </div> -->
                            <div class="about-one__btn-and-contact">
                                <div class="about-one__btn-box">
                                    <a href="{{url($about->abbutton)}}" class="about-one__btn thm-btn">Discover More<span
                                            class="fa fa-plus"></span></a>
                                </div>
                                <div class="about-one__contact-box">
                                    <div class="about-one__contact-icon">
                                        <span class="fas fa-phone"></span>
                                    </div>
                                    <div class="about-one__contact">
                                        <span>Call Anytime</span>
                                        <p><a href="tel:{{url($about->phone)}}">{{$about->phone}}</a></p>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             
            </div>
        </section>
        <!--About One End-->

        <!--Process One Start
        <section class="process-one">
            <div class="process-one__inner">
                <div class="process-one__shape-1 float-bob-y-2">
                    <img src="assets/images/shapes/process-one-shape-1.png" alt="">
                </div>
                <div class="container">
                    <ul class="process-one__process-list list-unstyled">
                        <li class="wow fadeInUp" data-wow-delay="100ms">
                            <div class="process-one__single">
                                <div class="process-one__icon">
                                    <span class="icon-zoom-in"></span>
                                </div>
                                <p class="process-one__text">Research</p>
                                <div class="process-one__count"></div>
                            </div>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="200ms">
                            <div class="process-one__single">
                                <div class="process-one__icon">
                                    <span class="icon-test"></span>
                                </div>
                                <p class="process-one__text">Concept</p>
                                <div class="process-one__count"></div>
                            </div>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="300ms">
                            <div class="process-one__single">
                                <div class="process-one__icon">
                                    <span class="icon-self-development"></span>
                                </div>
                                <p class="process-one__text">Develop</p>
                                <div class="process-one__count"></div>
                            </div>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="400ms">
                            <div class="process-one__single">
                                <div class="process-one__icon">
                                    <span class="icon-growth"></span>
                                </div>
                                <p class="process-one__text">Test</p>
                                <div class="process-one__count"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        Process One End-->
     <!--Services One Start-->
     <!--Services One Start-->
     <section class="services-one">
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
        <!--Services One End-->

        <!--Services One End-->


        <!--Benefits One Start
        <section class="benefits-one">
            <div class="benefits-one__shape-1">
                <div class="benefits-one__shape-bg"
                    style="background-image: url({{asset('frontend/images/backgrounds/benefits-one-shape-bg.png')}});"></div>
            </div>
            <div class="benefits-one__bg-one"
                style="background-image: url({{asset('frontend/images/backgrounds/benefits-one-bg-one.jpg')}});"></div>
            <div class="benefits-one__overly"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="benefits-one__left">
                            <div class="benefits-one__img wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <img src="{{asset('frontend/images/resources/benefits-one-img-1.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="benefits-one__right">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <div class="section-title__tagline-icon">
                                        <img src="assets/images/icon/section-title-icon.png" alt="">
                                    </div>
                                    <p class="section-title__tagline">Our Benefits</p>
                                </div>
                                <h2 class="section-title__title">Discover The World Of
                                    Marketing Agency</h2>
                            </div>
                            <p class="benefits-one__text">Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                proide sunt in culpa qui officia deserunt mollit anim id est</p>
                            <div class="benefits-one__points-and-mission">
                                <ul class="benefits-one__points list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Consulting Agency</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Financial Advice</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="benefits-one__mission">
                                    <h3 class="benefits-one__mission-title">Our Mission</h3>
                                    <p class="benefits-one__mission-text">Duis aute irure dolor in <br> reprehenderit in
                                        voluptate</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>Benefits One End-->
    <!--Portfolio Two Start-->
    <section class="portfolio-two">
            <div class="container">
                <div class="section-title-two text-center">
                    <div class="section-title-two__tagline-box">
                        <span class="section-title-two__tagline">Our Portfolio</span>
                    </div>
                    <h2 class="section-title-two__title">Our Case Studies</h2>
                </div>


                <ul class="portfolio-two-filter style1 post-filter has-dynamic-filters-counter list-unstyled">
                    <li data-filter=".filter-item" class="active"><span class="filter-text">All Work</span></li>
                    @foreach ($categories as $category )
                    <li data-filter="#{{ $category->slug }}"><span class="filter-text">{{ $category->name}}</span></li>
                     
                    @endforeach
                    
                    
                </ul>


                <div class="row filter-layout">
                    <!--Portfolio Two Single Start-->
                    @foreach ($items as $item )
                    
                    <div class="col-xl-3 col-lg-6 col-md-6 filter-item ser illus photo " id="{{$item->category->slug}}">
                

                       
                        <div class="portfolio-two__single"><a href="{{url('portfoliodt'.$item->id)}}">
                            <div class="portfolio-two__img">
                            <img src="{{asset('uploads/item/'. $item->image)}}" alt="">
                            
                            <a href="{{url('portfolio'.$item->id)}}">
                                <div class="portfolio-two__content">
                                    <p class="portfolio-two__sub-title">{{$item->name}}</p>
                                    <p class="portfolio-two__sub-title mt-2">Price: {{$item->price}}</p>
                                    
                                    <h3 class="portfolio-two__title"><a href="{{url('portfoliodt'.$item->id)}}">{{$item->category->name}} </a></h3>
                                </div>
                                </a>


                                <div class="portfolio-two__arrow">
                                    <a href="{{asset('uploads/item/'. $item->image)}}" class="img-popup">
                                        <span class="icon-back"></span>
                                    </a>
                                </div>
                            </div>
                            </a>
                        </div> 
                    </div>
                    
                    @endforeach
                    <!--Portfolio Two Single End-->




                </div>
            </div>
        </section>
        <!--Portfolio Two End-->

        <!--FAQ One Start
        <section class="faq-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="faq-one__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <div class="section-title__tagline-icon">
                                        <img src="assets/images/icon/section-title-icon.png" alt="">
                                    </div>
                                    <p class="section-title__tagline">Technology Solution</p>
                                </div>
                                <h2 class="section-title__title">Latest Software Solutions
                                    <br> Customer</h2>
                            </div>
                            <p class="faq-one__text">Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proide
                                sunt in culpa qui officia deserunt mollit anim id est laborum. perspiciatis unde omnis
                                iste natus error sit voluptatem</p>
                            <div class="faq-one__img-and-system">
                                <div class="faq-one__img">
                                    <img src="assets/images/resources/faq-one-img.jpg" alt="">
                                </div>
                                <div class="faq-one__system">
                                    <h3 class="faq-one__system-title">Optimize It System</h3>
                                    <p class="faq-one__system-text">Duis aute irure dolor in reprehenderit in voluptate
                                        velit esse cillum</p>
                                    <div class="faq-one__system-points">
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>The Perfect Business Solutions</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="faq-one__right">
                            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>Completely Iterate Covalent Strategic Theme</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Excepteur sint occaecat cupidatat non proide sunt in culpa qui off
                                                deserunt mollit anim id est laborum. omnis iste natus error sit
                                                voluptate audantium, totam rem aperiam,</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accrodion  active">
                                    <div class="accrodion-title">
                                        <h4>Few Resons Why You Should Choose Us</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Excepteur sint occaecat cupidatat non proide sunt in culpa qui off
                                                deserunt mollit anim id est laborum. omnis iste natus error sit
                                                voluptate audantium, totam rem aperiam,</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>How To Update Application New Features</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Excepteur sint occaecat cupidatat non proide sunt in culpa qui off
                                                deserunt mollit anim id est laborum. omnis iste natus error sit
                                                voluptate audantium, totam rem aperiam,</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>How To Connect With The Support To Improve Experience</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Excepteur sint occaecat cupidatat non proide sunt in culpa qui off
                                                deserunt mollit anim id est laborum. omnis iste natus error sit
                                                voluptate audantium, totam rem aperiam,</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>FAQ One End-->

        <!--CTA One Start-->
        <section class="cta-one">
            <div class="container">
                <div class="cta-one__inner wow fadeInUp" data-wow-delay="300ms">
                    <h3 class="cta-one__title">Have Any Question?</h3>
                    <div class="cta-one__icon">
                        <span class="icon-phone"></span>
                    </div>
                    <div class="cta-one__content">
                        <p class="cta-one__text">Lorem ipsum dolor sit am cons sid</p>
                        <p class="cta-one__number"><a href="tel:+880178817975">+880178817975
                            </a></p>
                    </div>
                </div>
            </div>
        </section>
        <!--CTA One End-->

        <!--Counter One Start-->
               <!--Counter One Start-->
               <section class="counter-one">
            <div class="counter-one__bg img-bounce"
                style="background-image: url('{{asset("frontend/images/Have Any Question1.png")}}');">
            </div>
            <div class="counter-one__bg-two"
                style="background-image: url('{{asset("frontend/images/Have Any Question2.png")}}');"></div>
            <div class="counter-one__bg-three"
                style="background-image: url('{{asset("frontend/images/Have Any Question3.jpg")}}');"></div>
            <div class="container">
                <div class="counter-one__inner">
                    <ul class="counter-one__count-list list-unstyled">
                    @foreach ($successcounters as $key=>$successcounter)

                        <li class="wow fadeInUp" data-wow-delay="100ms">
                            <div class="counter-one__single">
                                <div class="counter-one__icon">
                                    <span class="#"><img src="{{asset('uploads/successcounter/'. $successcounter->image)}}" alt=""></span>
                                </div>
                                <p class="counter-one__text">{{$successcounter->title}}</p>
                                <div class="counter-one__count count-box">
                                    <h3 class="count-text" data-stop="5684" data-speed="1500">{{$successcounter->counter}}+</h3>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>
        <!--Counter One End-->
        <!--Counter One End-->

        <!--Pricing One Start
        <section class="pricing-one">
            <div class="pricing-one__bg" style="background-image: url(assets/images/backgrounds/pricing-one-bg.jpg);">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-icon">
                            <img src="assets/images/icon/section-title-icon.png" alt="">
                        </div>
                        <p class="section-title__tagline">Our Pricing</p>
                    </div>
                    <h2 class="section-title__title">Select Your Choice Plan</h2>
                </div>
                <div class="row">

                    <div class="col-xl-4 col-lg-4">
                        <div class="pricing-one__single">
                            <div class="pricing-one__inner">
                                <div class="pricing-one__shape-1">
                                    <img src="assets/images/shapes/pricing-one-shape-1.png" alt="">
                                </div>
                                <div class="pricing-one__shape-2">
                                    <img src="assets/images/shapes/pricing-one-shape-2.png" alt="">
                                </div>
                                <div class="pricing-one__price-box">
                                    <h3 class="pricing-one__title">Enterprise</h3>
                                    <p class="pricing-one__price"><span>$</span>35.00</p>
                                    <span class="pricing-one__sub-title">Per Month</span>
                                </div>
                                <ul class="pricing-one__points list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Financial Solutions</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>12 Hours Support</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="pricing-one__btn-box">
                                    <a href="contact.html" class="pricing-one__btn">Get Started Now<span
                                            class="icon-back"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
  
                    <div class="col-xl-4 col-lg-4">
                        <div class="pricing-one__single">
                            <div class="pricing-one__inner">
                                <div class="pricing-one__shape-1">
                                    <img src="assets/images/shapes/pricing-one-shape-1.png" alt="">
                                </div>
                                <div class="pricing-one__shape-2">
                                    <img src="assets/images/shapes/pricing-one-shape-2.png" alt="">
                                </div>
                                <div class="pricing-one__price-box">
                                    <h3 class="pricing-one__title">Regular</h3>
                                    <p class="pricing-one__price"><span>$</span>55.00</p>
                                    <span class="pricing-one__sub-title">Per Month</span>
                                </div>
                                <ul class="pricing-one__points list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Financial Solutions</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>12 Hours Support</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="pricing-one__btn-box">
                                    <a href="contact.html" class="pricing-one__btn">Get Started Now<span
                                            class="icon-back"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-xl-4 col-lg-4">
                        <div class="pricing-one__single">
                            <div class="pricing-one__inner">
                                <div class="pricing-one__shape-1">
                                    <img src="assets/images/shapes/pricing-one-shape-1.png" alt="">
                                </div>
                                <div class="pricing-one__shape-2">
                                    <img src="assets/images/shapes/pricing-one-shape-2.png" alt="">
                                </div>
                                <div class="pricing-one__price-box">
                                    <h3 class="pricing-one__title">Professional</h3>
                                    <p class="pricing-one__price"><span>$</span>85.00</p>
                                    <span class="pricing-one__sub-title">Per Month</span>
                                </div>
                                <ul class="pricing-one__points list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Financial Solutions</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>12 Hours Support</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="pricing-one__btn-box">
                                    <a href="contact.html" class="pricing-one__btn">Get Started Now<span
                                            class="icon-back"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--Pricing One End-->

        <!--Team One Start-->
<section class="team-one">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-icon">
                            <img src="frontend/images/icon/section-title-icon.png" alt="">
                        </div>
                        <p class="section-title__tagline">Meet Our Team</p>
                    </div>
                    <h2 class="section-title__title">Meet Our Expart Mambers</h2>
                </div>
                <div class="row">
                    <!--Team One Single Start-->
                    @foreach ($teams as $key=>$team)
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{asset('uploads/team/'. $team->image)}}" alt="">
                                    <div class="team-one__name-box">
                                        <h3 class="team-one__name"><a href="{{url('team'.$team->id)}}">{{$team->name}}</a></h3>
                                        <p class="team-one__sub-title">{{$team->designation}}</p>
                                    </div>
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="{{url($team->facebook_link)}}"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="{{url($team->twitter_link)}}"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="{{url($team->pinterest_link)}}"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="{{url($team->instagram_link)}}"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="{{url($team->dribbble_link)}}"><i class="fab fa-dribbble"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--Team One Single End-->
        
                    
                    
                    
                </div>
            
            </div>
        </section>
        <!--Team One End-->


        <!--Video One End-->

        <!--Testimonial One Start-->
         <!--Testimonial One Start-->
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
        <!--Testimonial One End-->
        <!--Testimonial One End-->
        <!--Newsletter One Start-->
        <section class="newsletter-one">
            <div class="container">
                <div class="newsletter-one__inner">
                    <div class="newsletter-one__bg float-bob-y"
                        style="background-image: url(assets/images/backgrounds/newsletter-one-bg.jpg);"></div>
                    <h3 class="newsletter-one__title">Newsletter</h3>
                    <p class="newsletter-one__sub-title">Stay updated</p>
                    <div class="newsletter-one__form mc-form" data-url="MC_FORM_URL">
                        <input type="email" name="EMAIL" placeholder="Email address">
                        <button type="submit" class="newsletter-one__btn">
                            <span>
                                Subscribe
                                <i class="icon-arrow"></i>
                            </span>
                        </button>
                    </div><!-- /.subscribe-one__form -->
                    <div class="mc-form__response"></div><!-- /.mc-form__response -->
                </div>
            </div>
        </section>
        <!--Newsletter One End-->


        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="site-footer__bg-2"
                style="background-image: url(assets/images/backgrounds/site-footer-bg-2.jpg);"></div>
            <div class="site-footer__bg-3 float-bob-y"
                style="background-image: url(assets/images/backgrounds/site-footer-bg-3.png);"></div>
            <div class="site-footer__bg" style="background-image: url(assets/images/backgrounds/site-footer-bg.jpg);">
            </div>
            <div class="site-footer__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">About</h3>
                                </div>
                                <ul class="footer-widget__list list-unstyled">
                                    <li><a href="about.html">Causes</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="about.html">New Campaign</a></li>
                                    <li><a href="about.html">Site Map</a></li>
                                    <li><a href="about.html">New Events</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__explore">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Explore</h3>
                                </div>
                                <ul class="footer-widget__list list-unstyled">
                                    <li><a href="about.html">Press Release</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="blog.html">Blog Posts</a></li>
                                    <li><a href="about.html">Social Connect</a></li>
                                    <li><a href="about.html">Help Topics</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget__links">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Links</h3>
                                </div>
                                <ul class="footer-widget__list list-unstyled">
                                    <li><a href="about.html">Company</a></li>
                                    <li><a href="blog.html">Latest News</a></li>
                                    <li><a href="services.html">Popular Services</a></li>
                                    <li><a href="about.html">Financial</a></li>
                                    <li><a href="about.html">Consulting</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__blog">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Blog</h3>
                                </div>
                                <ul class="footer-widget__list list-unstyled">
                                    <li><a href="about.html">Financial Planning</a></li>
                                    <li><a href="about.html">Care for All People</a></li>
                                    <li><a href="about.html">Build Business</a></li>
                                    <li><a href="about.html">Being Volunteer</a></li>
                                    <li><a href="about.html">Raise fund to help</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                            <div class="footer-widget__column footer-widget__contact">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Contact</h3>
                                </div>
                                <ul class="footer-widget__contact-list list-unstyled">
                                    <li>
                                        <p>45 Broklyn Street, 78 New York</p>
                                    </li>
                                    <li><a href="mailto:zeena@gmail.com">zeena@gmail.com</a></li>
                                    <li><a href="tel:7778880000">777 888 0000</a></li>
                                </ul>
                                <div class="footer-widget__social">
                                    <a href="#"><span class="fab fa-facebook-f"></span></a>
                                    <a href="#"><span class="fab fa-twitter"></span></a>
                                    <a href="#"><span class="fab fa-linkedin-in"></span></a>
                                    <a href="#"><span class="fab fa-youtube"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="site-footer__bottom-inner">
                        <p class="site-footer__bottom-text">Copyright © 2023 All Rights Reserved.</p>
                        <ul class="list-unstyled site-footer__bottom-links">
                            <li>
                                <a href="about.html">Terms & Condition</a>
                            </li>
                            <li>
                                <a href="about.html">Privacy</a>
                            </li>
                            <li>
                                <a href="about.html">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/resources/logo-1.png" width="115"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@zeena.com">needhelp@zeena.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-search"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow"></i></a>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js" integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jarallax/2.2.1/jarallax.min.js" integrity="sha512-q3LhUlXpvwtaAgWNbnqlMYe2wu9ELY4OVPxofREHs7zCDhw7YN7S46VOso6US3QgeehHNPh06h6E5/sFIMEDOA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script src="assets/vendors/jarallax/jarallax.min.js"></script> -->
<!-- <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxchimp/1.3.0/jquery.ajaxchimp.min.js" integrity="sha512-5yj5elY9u6clGe9/97bj3jJlw8+O9XSv/tbme8m/LR8cKnnT5+rR8qHW/UYQ/MozLg3cvTHeYIpM5kRktASSbg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.appear/0.4.1/jquery.appear.min.js" integrity="sha512-vYYoQJKYzaJQaOaYxaJhhmxikOJ2SEgHwmCNa0EMP0aRr7opdt4HHrorAwnCyPm8bdW/JBApIomo85YaBX81zA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js" integrity="sha512-6kvhZ/39gRVLmoM/6JxbbJVTYzL/gnbDVsHACLx/31IREU4l3sI7yeO0d4gw8xU5Mpmm/17LMaDHOCf+TvuC2Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.2.0/jquery.magnific-popup.min.js" integrity="sha512-fCRpXk4VumjVNtE0j+OyOqzPxF1eZwacU3kN3SsznRPWHgMTSSo7INc8aY03KQDBWztuMo5KjKzCFXI/a5rVYQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js" integrity="sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/odometer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wnumb/1.2.0/wNumb.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{asset('frontend/vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('frontend/vendors/jquery-ui/jquery-ui.js')}}"></script>
<script src="{{asset('frontend/vendors/circleType/jquery.circleType.js')}}"></script>
<script src="{{asset('frontend/vendors/circleType/jquery.lettering.min.js')}}"></script>





<!-- template js -->
<script src="{{asset('frontend/js/zeena.js')}}"></script>
<script src="{{asset('frontend/js/navtabmain.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/66cacd68ea492f34bc09d622/1i6434o77';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>