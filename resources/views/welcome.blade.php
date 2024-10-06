@include('layouts.frontend.head')
@include('layouts.frontend.menu')
        <!-- Main Sllider Start -->
            @include('layouts.frontend.slider')
        <!--Main Sllider Start -->
        <!--Feature One Start-->
            @include('layouts.frontend.feature')
        <!--Feature One End-->
        <!--About One Start-->
            @include('layouts.frontend.about')
        <!--About One End-->
        <!--Services One Start-->
            @include('layouts.frontend.services')
        <!--Services One End-->
        <!--Portfolio Two Start-->
            @include('layouts.frontend.portfolio')
        <!--Portfolio Two End-->
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
            @include('layouts.frontend.successscore')
        <!--Counter One End-->
        <!--Team One Start-->
            @include('layouts.frontend.team')
        <!--Team One End-->
         <!--Testimonial One Start-->
            @include('layouts.frontend.testimonial')
        <!--Testimonial One End-->
        <!--Newsletter One Start-->
            @include('layouts.frontend.newsletter')
        <!--Newsletter One End-->
        <!--Site Footer Start-->
            @include('layouts.frontend.footer')
        <!-- /.mobile-nav__wrapper -->
            @include('layouts.frontend.mobilemenu')
        <!-- /.mobile-nav__wrapper -->

   @include('layouts.frontend.jslink')