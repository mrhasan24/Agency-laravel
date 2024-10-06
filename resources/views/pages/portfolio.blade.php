@include('../layouts.frontend.menu')
@include('../layouts.frontend.head')


 <!--Page Header Start-->
 <section class="page-header">
            <div class="page-header-bg" style="background-image: url(images/backgrounds/page-header-bg.jpg)">
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
                    <h2>Portfolio</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><span>-</span></li>
                        <li>Portfolio</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        @include('layouts.frontend.portfolio')

@include('layouts.frontend.newsletter')
    @include('layouts.frontend.footer')




        @include('layouts.frontend.jslink')