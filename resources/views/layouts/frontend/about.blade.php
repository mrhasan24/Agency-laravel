<section class="about-one">
            <div class="container">
            @foreach ($abouts as $about)
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <div class="about-one__img wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <img src="{{asset('image/about-one-img-2.jpg')}}" alt="">
                             
                                <div class="about-one__experience-text">
                                    
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
                                    <p class="section-title__tagline">We Are Blessed, We Are Skilled!</p>
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
                                        <h3>{{$about->experience}}+ years Experience</h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <h3>{{$about->projectcomplete}} + Project Completed</h3>
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
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="row">
                    <div class="col-xl-12">
                        <h1>HTML</h1>
                    <div class="progress"> 
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h1>HTML</h1>
                        <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h1>HTML</h1>
                        <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h1>HTML</h1>
                        <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
             
            </div>
        </section>