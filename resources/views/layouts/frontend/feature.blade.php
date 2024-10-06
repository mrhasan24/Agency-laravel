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