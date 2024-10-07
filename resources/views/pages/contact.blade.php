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
                    <h2>Contact</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><span>-</span></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->



<!--Google Map Start-->
        <section class="google-map-one">
            <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d226.23932223088937!2d89.35921522003292!3d24.869683959937404!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fc55a68e720747%3A0x9ef9a1dc46274d63!2z4KaJ4Kaq4Ka24Ka54KawLCDgpqzgppfgp4HgpqHgprzgpr4!5e0!3m2!1sbn!2sbd!4v1726464899547!5m2!1sbn!2sbd" class="google-map__one" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
            </div>
        </section>
        <!--Google Map End-->
        <!--Contact Page Start-->
        @include('../layouts.frontend.contact')
        <!--Contact Page End-->

   
        @include('layouts.frontend.newsletter')
        @include('layouts.frontend.footer')
         @include('layouts.frontend.jslink')