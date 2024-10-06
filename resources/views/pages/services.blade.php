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
                    <h2>Our Services</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><span>-</span></li>
                        <li>Our Services</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        @include('layouts.frontend.feature')



           <!--Services Four Start-->
           <section class="services-four services-five">
            <div class="services-four__bg"
                style="background-image: url(assets/images/backgrounds/services-four-bg.png);"></div>
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-icon">
                            <img src="assets/images/icon/section-title-icon.png" alt="">
                        </div>
                        <p class="section-title__tagline">What We Offering</p>
                    </div>
                    <h2 class="section-title__title">We Make Bright Agency</h2>
                </div>
                <div class="row">
                    <!--Services Four Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="services-four__single">
                            <div class="services-four__shape-1"></div>
                            <div class="services-four__shape-2"></div>
                            <div class="services-four__icon">
                                <span class="icon-web-page"></span>
                            </div>
                            <h3 class="services-four__title"><a href="services-details.html">Speed <br> Optimization</a>
                            </h3>
                            <p class="services-four__text">Lorem ipsum is are many variations of
                                pass of majority.</p>
                            <a href="" class="services-four__arrow">
                                <span class="icon-back"></span>
                            </a>
                        </div>
                    </div>
                    <!--Services Four Single End-->
                    <!--Services Four Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="services-four__single">
                            <div class="services-four__shape-1"></div>
                            <div class="services-four__shape-2"></div>
                            <div class="services-four__icon">
                                <span class="icon-money"></span>
                            </div>
                            <h3 class="services-four__title"><a href="services-details.html">Digital <br> Marketing</a>
                            </h3>
                            <p class="services-four__text">Lorem ipsum is are many variations of
                                pass of majority.</p>
                            <a href="" class="services-four__arrow">
                                <span class="icon-back"></span>
                            </a>
                        </div>
                    </div>
                    <!--Services Four Single End-->
                    <!--Services Four Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="services-four__single">
                            <div class="services-four__shape-1"></div>
                            <div class="services-four__shape-2"></div>
                            <div class="services-four__icon">
                                <span class="icon-content-management-1"></span>
                            </div>
                            <h3 class="services-four__title"><a href="services-details.html">Content <br> Management</a>
                            </h3>
                            <p class="services-four__text">Lorem ipsum is are many variations of
                                pass of majority.</p>
                            <a href="" class="services-four__arrow">
                                <span class="icon-back"></span>
                            </a>
                        </div>
                    </div>
                    <!--Services Four Single End-->
                    <!--Services Four Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="services-four__single">
                            <div class="services-four__shape-1"></div>
                            <div class="services-four__shape-2"></div>
                            <div class="services-four__icon">
                                <span class="icon-project-management"></span>
                            </div>
                            <h3 class="services-four__title"><a href="services-details.html">Content <br> Marketing</a>
                            </h3>
                            <p class="services-four__text">Lorem ipsum is are many variations of
                                pass of majority.</p>
                            <a href="" class="services-four__arrow">
                                <span class="icon-back"></span>
                            </a>
                        </div>
                    </div>
                    <!--Services Four Single End-->
                </div>
            </div>
        </section>
        <!--Services Four End-->

      @include('layouts.frontend.services')


        @include('layouts.frontend.newsletter')
    @include('layouts.frontend.footer')




        @include('layouts.frontend.jslink')