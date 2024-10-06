<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>





    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->



    <div class="page-wrapper">
        
@foreach ($menus as $key=>$menu) )
        <header class="main-header">
            <div class="main-header__top">
                <div class="main-header__top-inner">
                    <ul class="list-unstyled main-header__contact-list">
                        <li>
                            <div class="icon">
                                <i class="fas fa-map-marker"></i>
                            </div>
                            <div class="text">
                                <p>{{$menu->location}}</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="text">
                                <p><a href="mailto:{{$menu->email}}" target="_blank">{{$menu->email}}</a></p>
                            </div>
                        </li>
                    </ul>
                    <div class="main-header__top-text-and-social">
                        <div class="main-header__top-social">
                          
                            <a href="{{url($menu->facebook)}}" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="{{url($menu->twitter)}}" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="{{url($menu->instagram)}}" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="{{url($menu->pinterest)}}" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                            <a href="{{url($menu->dribble)}}" target="_blank"><i class="fab fa-dribbble"></i></a>
                            <a href="{{url($menu->linkedin)}}" target="_blank"><i class="fab fa-linkedin"></i></a>


                           
                        </div>
                    </div>
                </div>
            </div>
            <nav class="main-menu">
                <div class="main-menu__wrapper">
                    <div class="main-menu__wrapper-inner">
                        <div class="main-menu__left">
                            <div class="main-menu__logo">
                                <a href="/"><img src="{{asset('uploads/home/'. $menu->image)}}" width="145px" alt=""></a>
                            </div>
                            <div class="main-menu__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    <li class=" current megamenu">
                                        <a href="/">Home </a>
                                    </li>
                                    <li>
                                        <a href="/about-us">About</a>
                                    </li>
                                    <li class="">
                                        <a href="#">Services</a>
                                        <!-- <ul class="sub-menu">
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="services-details.html">Service Details</a></li>
                                        </ul> -->
                                    </li>
                                 
                                    <li>
                                    <a href="portfolio.html">Portfolio</a>
                                    </li>
                                   
                                    <li>
                                        <a href="contact.html">Contact</a>
                                    </li>
                                    <li>
                                        <a href="tel:{{$menu->phone}}">{{$menu->phone}}</a>
                                    </li>
                                </ul>
                            </div>
                          
                        </div>
                        <div class="main-menu__right">
                            <div class="main-menu__btn-box">
                                <a href="contact.html" class="main-menu__btn">Get A Quote <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        @endforeach
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->