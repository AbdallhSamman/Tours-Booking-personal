@extends('publicSite.layout.master')

@section('content')

        <section class="banner-two">
            <div class="banner-two__bg">
                <div class="banner-two__bg-inner" data-options='{ "delay": 5000, "slides": [ { "src": "assets/images/backgrounds/banner-2-bg-1.jpg" }, { "src": "assets/images/backgrounds/banner-2-bg-2.jpg" }, { "src": "assets/images/backgrounds/banner-2-bg-3.jpg" } ], "transition": "fade", "timer": false }'></div><!-- /.banner-two__bg-inner -->
            </div><!-- /.banner-two__bg -->
            <img src="assets/images/shapes/banner-two__flotated-text.png" alt="" class="banner-two__floated-text">
            <div class="container">
                <p>explore</p>
                <h2>Jordan Tours</h2>
            </div><!-- /.container -->
        </section><!-- /.banner-two -->

        <section class="destinations-three">
            <div class="container">
                <div class="block-title text-center">
                    <p>Checkout</p>
                    <h3>The Cities</h3>
                </div><!-- /.block-title -->
                <div class="row">
                    @foreach ($category as $categories)
                    <div class="col-lg-4 w-100 col-md-6" >
                        <div class="destinations-three__single">
                            <img style="height: 45vh" src="uploads/{{$categories->category_img}}" alt="">
                            <div class="destinations-three__content">
                                <h3><a href="{{ route('trips-list.show',$categories->id)}}">{{$categories->category_name}}</a></h3>
                            </div><!-- /.destinations-three__content -->
                            <div class="destinations-three__hover-content">
                                <h3><a href="{{ route('trips-list.show',$categories->id)}}">{{$categories->category_name}}</a></h3>
                                <p>{{$categories->trip->count(). ' Tours'}}</p>
                                <a href="{{ route('trips-list.show',$categories->id)}}  " class="destinations-three__link"><i class="tripo-icon-right-arrow"></i></a>
                            </div><!-- /.destinations-three__hover-content -->
                        </div><!-- /.destinations-three__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->


                    @endforeach

                </div><!-- /.row -->
            </div><!-- /.container -->

        </section><!-- /.destinations-three -->






        <section class="cta-one cta-one__home-two">
            <div class="container">
                <h3>Discover the beauty of nature</h3>
                <div class="cta-one__button-block">
                    <a href="{{ route('trips-list.index') }}" class="thm-btn cta-one__btn">Book Now!</a><!-- /.thm-btn cta-one__btn -->
                </div><!-- /.cta-one__button-block -->
            </div><!-- /.container -->
        </section><!-- /.cta-one -->

        <section class="tour-one">
            <div class="container">
                <div class="block-title text-center">
                    <p>Featured tours</p>
                    <h3>Most Popular Tours</h3>

                </div><!-- /.block-title -->

                <div class="tour-one__carousel tour-one__carousel-no-overflow thm__owl-carousel  owl-carousel owl-theme" data-options='{"nav": false, "autoplay": true, "autoplayTimeout": 5000, "smartSpeed": 700, "dots": true, "margin": 30, "loop": true, "responsive": { "0": { "items": 1, "nav": true, "navText": ["Prev", "Next"], "dots": false }, "767": { "items": 1, "nav": true, "navText": ["Prev", "Next"], "dots": false }, "991": { "items": 2 }, "1199": { "items": 2 }, "1200": { "items": 3 } }}'>
                    @foreach ($trip as $trips)
                    <div class="item">


                        <div class="tour-one__single">
                            <div class="tour-one__image">
                                <img style="min-width:35wh; max-height:30vh" src="{{asset('trip_images/'.$trips->image)}}" alt="">

                            </div><!-- /.tour-one__image -->

                            <div class="tour-one__content" style="min-height: 350px">
                                <ul  class="list-unstyled blog-one__meta">
                                    <li><a href="{{route('guide',$trips->guide->id)}}"><i></i> {{"guide: " . $trips->guide->name}}</a></li>
                                    <li><a><i class="fas fa-calendar-day"></i> {{$trips->date}}</a></li>
                                </ul>

                                <h3><a href="{{ route('trips-details.show',$trips->id)}}">{{$trips->name}}</a></h3>
                                <p><span>{{$trips->price . "JD"}}</span> / Per Person</p>
                                <p>Capacity :{{$trips->max_visitors}} Person</p>
                                <ul class="tour-one__meta list-unstyled">
                                    <li><a ><i class="far fa-clock"></i> {{$trips->days . "day"}}</a></li>
                                    <li><a><i class="far fa-user-circle"></i> {{"+". $trips->minimum_age}}</a></li>
                                    <li><a href="{{route('trips-list.show',$trips->category->id)}}"><i class="far fa-map"></i>{{$trips->category->category_name}}</a></li>
                                </ul>
                            </div>


                        </div>
                    </div>

                    @endforeach
                </div><!-- /.tour-one__carousel -->


            </div><!-- /.container -->
        </section><!-- /.tour-one -->



        <section class="cta-four img-responsive" style="background-image: url(assets/images/gallery/FlagofJordan.jpg);">
            <div class="container">
                <p>Find next place to visit</p>
                <h3>Explore the beauty of<span style="color:white"> Jordan</span></h3>

            </div><!-- /.container -->
        </section><!-- /.cta-four -->




        <section class="blog-one">
            <div class="container">
                <div class="block-title text-center">
                    <p>Check out Our</p>
                    <h3>Latest Trips</h3>
                </div><!-- /.block-title -->
                <div class="row" >
                    @foreach ($news as $tripDate)


                    <div class="col-lg-4 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="000ms" >
                        <div class="blog-one__single" >
                            <div class="blog-one__image">
                                <img style="min-width:35wh; max-height:30vh" src="{{asset('trip_images/'.$tripDate->image)}}" alt="">

                                <a href="{{ route('trips-details.show',$tripDate->id)}}"><i class="fa fa-long-arrow-alt-right"></i></a>
                            </div><!-- /.blog-one__image -->
                            <div class="blog-one__content" style="min-height:280px">
                                <ul class="list-unstyled blog-one__meta">
                                    <li><a href="{{route('guide',$tripDate->guide->id)}}"><i></i> {{"guide: " . $tripDate->guide->name}}</a></li>
                                    <li><a href="news-details.html"><i class="far fa-comments"></i> {{$tripDate->date}}</a></li>

                                </ul><!-- /.list-unstyled blog-one__meta -->
                                <h3><a href="{{ route('trips-details.show',$tripDate->id)}}">{{$tripDate->name}}</a></h3>
                                <ul class="tour-one__meta list-unstyled">
                                    <li><a><i class="far fa-clock"></i> {{$tripDate->days . "day"}}</a></li>
                                    <li><a><i class="far fa-user-circle"></i> {{"+". $tripDate->minimum_age}}</a></li>
                                    <li><a href="{{ route('trips-list.show',$tripDate->category->id)}}"><i class="far fa-map"></i>{{$tripDate->category->category_name}}</a></li>
                                </ul><!-- /.tour-one__meta -->
                            </div><!-- /.blog-one__content -->
                        </div><!-- /.blog-one__single -->
                    </div><!-- /.col-lg-4 -->
                    @endforeach

                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-one -->

        <section class="mailchimp-one">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <h3>Get Latest Tour Updates <br>
                            by Sign Up</h3>
                    </div><!-- /.col-lg-5 -->
                    <div class="col-lg-5">

                            <a href="{{ asset('register')}}" class="thm-btn mailchimp-one__btn" >SIGN UP NOW</a>

                        <div class="mc-form__response"></div>
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.mailchimp-one -->

        @endsection
