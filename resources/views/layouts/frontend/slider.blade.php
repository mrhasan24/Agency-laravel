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