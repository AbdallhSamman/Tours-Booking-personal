@extends('publicSite.layout.master')
@section("style")
<style>

.page-item:first-child .page-link,
.page-item:last-child .page-link {
    border-radius: 50%;
    background-color: var(--thm-gray);
    color: #9ca3a9;
    font-size: 18px;
    font-weight: 600;
    text-align: center;
    padding: 0;
    display: -webkit-box;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    width: 57px;
    height: 57px;
    -webkit-transition: all .4s ease;
    transition: all .4s ease;
}

.page-item {
    margin: 0 5px !important;
}

.page-item.disabled span.page-link {
    background-color: #ECEEEF !important;
}

.page-item:first-child .page-link:hover,
.page-item:last-child .page-link:hover {
    background-color: #40b9eb;
    color: #fff;
}

span.page-link {
    width: 57px;
    height: 57px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background-color: #FFA801 !important;
    border: none;
}
</style>

@endsection


@section('content')
        <section class="blog-list" style="margin-top: 150px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        @if(count($trips) > 0)
                        @foreach ($trips as $trip)
                        <div class="blog-two__single blog-one__single">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="blog-one__image">
                                        <img src="{{asset('trip_images/'. $trip->image)}}" alt="">
                                        <a href="{{route('trips-details.show',$trip->id)}}"><i class="fa fa-long-arrow-alt-right"></i></a>
                                    </div><!-- /.blog-one__image -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6 d-flex">
                                    <div class="blog-two__content my-auto">
                                        <ul class="list-unstyled blog-one__meta">
                                            <li><a href="{{route('guide',$trip->guide->id)}}"><i class="far fa-user-circle"></i>{{$trip->guide->name}}</a></li>
                                            <li><a><i class="far fa-calendar-alt"></i>{{ $trip->date }}</a></li>
                                        </ul><!-- /.list-unstyled blog-one__meta -->
                                        <h3><a href="{{route('trips-details.show',$trip->id)}}">{{ $trip->name }}</a></h3>
                                        <p>{{ $trip->description}}</p>
                                        <a href="{{route('trips-details.show',$trip->id)}}" class="blog-two__link">Read More</a>
                                    </div><!-- /.blog-two__content -->
                                </div><!-- /.col-md-6 -->


                            </div><!-- /.row -->
                        </div><!-- /.blog-two__single -->
                        @endforeach

                        @else
                            <h1 class="text-center" style="font-family: Arial, Helvetica, sans-serif">No Result Found <i class="fas fa-search ml-3"></i></h1>
                        @endif


                        <div class="post-pagination">
                            @isset($status)
                            {!! $trips->links() !!}
                            @endisset
                        </div><!-- /.post-pagination -->
                    </div><!-- /.col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="sidebar">
                            

                            <div class="sidebar__single sidebar__category">
                                <h3 class="sidebar__title">All Categories</h3><!-- /.sidebar__title -->
                                <ul class="sidebar__category-list list-unstyled">
                                    @foreach ($cats as $cat)

                                    <li><a href="{{route('trips-list.show', $cat->id)}}"> {{$cat->category_name}} </a></li>
                                    @endforeach


                                </ul><!-- /.sidebar__category-list list-unstyled -->
                            </div><!-- /.sidebar__single sidebar__category -->


                            <div class="sidebar__single sidebar__social">
                                <h3 class="sidebar__title">Follow Us</h3><!-- /.sidebar__title -->
                                <div class="sidebar__social-list">
                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div><!-- /.sidebar__social-list -->
                            </div><!-- /.sidebar__single sidebar__twitter -->
                        </div><!-- /.sidebar -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-list -->


        @endsection
