@extends('publicSite.layout.master')

@section('content')


<section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-contact.jpg); margin-top:145px;">
            <div class="container">
                <h2>Destination</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{route('home2')}}">Home</a></li>
                    <li><span>Destination</span></li>
                </ul><!-- /.thm-breadcrumb -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->


        <section class="destinations-three">
            <div class="container">
                <div class="row">

                @foreach($category as $val)
                    <div class="col-lg-4 col-md-6">
                        <div class="destinations-three__single">
                        <img src="{{ asset('uploads/'. $val->category_img) }}" style="width:100%;height:45vh"  alt="Image">
                            <div class="destinations-three__content">
                                <h3><a href="{{route("trips-list.show",$val->id)}}">{{ $val->category_name}}</a></h3>

                            </div><!-- /.destinations-three__content -->
                            <div class="destinations-three__hover-content">
                                <h3><a href="{{route("trips-list.index",$val->id)}}">{{ $val->category_name}}</a></h3>
                                <p>{{$val->trip()->count(). ' Tours'}}</p>
                                <a href="{{route('trips-list.show', $val->id)}}" class="destinations-three__link"><i class="tripo-icon-right-arrow"></i></a>
                            </div><!-- /.destinations-three__hover-content -->
                        </div><!-- /.destinations-three__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                @endforeach

                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.destinations-three -->



@endsection



