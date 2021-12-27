@extends('publicSite.layout.master')



@section('content')

       <section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-contact.jpg);">

            <div class="container" style="margin-top:145px;">
                <h2>Tour Guides</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{route('home2')}}">Home</a></li>
                    <li><span>Tour Guides</span></li>
                </ul><!-- /.thm-breadcrumb -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->


<section class="team-one">
    <div class="container">
        <div class="row">
            @foreach ($guides as $guide)

            <div class="col-lg-4 col-md-6">
                <div class="team-one__single">
                    <div class="team-one__image" style="height: 360px;">

                        <a href="{{route('guide',$guide->id)}}">

                            <img src='{{asset("user_images/". $guide->image)}}' alt="guide_image"  style="display: block; width: 100%;height: 100%;"></a>

                    </div>
                    <div class="team-one__content">
                        <a href="{{route('guide',$guide->id)}}"><h3>{{$guide->name}}</h3></a>
                        <p class="text-uppercase">Tour Guide</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="cta-one">
    <div class="container">
        <h3>Work with our amazing tour guides</h3>
        <div class="cta-one__button-block">
            <a href="{{ asset('register')}}" class="thm-btn cta-one__btn">Join our team</a><!-- /.thm-btn cta-one__btn -->
        </div><!-- /.cta-one__button-block -->
    </div><!-- /.container -->
</section><!-- /.cta-one -->
@endsection
