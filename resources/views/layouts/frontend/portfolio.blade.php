<section class="portfolio-two">
            <div class="container">
                <div class="section-title-two text-center">
                    <div class="section-title-two__tagline-box">
                        <span class="section-title-two__tagline">Our Portfolio</span>
                    </div>
                    <h2 class="section-title-two__title">Our Case Studies</h2>
                </div>


                <ul class="portfolio-two-filter style1 post-filter has-dynamic-filters-counter list-unstyled">
                    <li data-filter=".filter-item" class="active"><span class="filter-text">All Work</span></li>
                    @foreach ($categories as $category )
                    <li data-filter="#{{ $category->slug }}"><span class="filter-text">{{ $category->name}}</span></li>
                     
                    @endforeach
                    
                    
                </ul>


                <div class="row filter-layout">
                    <!--Portfolio Two Single Start-->
                    @foreach ($items as $item )
                    
                    <div class="col-xl-3 col-lg-6 col-md-6 filter-item ser illus photo " id="{{$item->category->slug}}">
                

                       
                        <div class="portfolio-two__single"><a href="{{url('portfoliodt'.$item->id)}}">
                            <div class="portfolio-two__img">
                            <img src="{{asset('uploads/item/'. $item->image)}}" alt="">
                            
                            <a href="{{url('portfolio'.$item->id)}}">
                                <div class="portfolio-two__content">
                                    <p class="portfolio-two__sub-title">{{$item->name}}</p>
                                    <p class="portfolio-two__sub-title mt-2">Price: {{$item->price}}</p>
                                    
                                    <h3 class="portfolio-two__title"><a href="{{url('portfoliodt'.$item->id)}}">{{$item->category->name}} </a></h3>
                                </div>
                                </a>


                                <div class="portfolio-two__arrow">
                                    <a href="{{asset('uploads/item/'. $item->image)}}" class="img-popup">
                                        <span class="icon-back"></span>
                                    </a>
                                </div>
                            </div>
                            </a>
                        </div> 
                    </div>
                    
                    @endforeach
                    <!--Portfolio Two Single End-->




                </div>
            </div>
        </section>