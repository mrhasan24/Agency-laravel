
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