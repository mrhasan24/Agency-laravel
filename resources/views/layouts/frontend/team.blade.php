
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