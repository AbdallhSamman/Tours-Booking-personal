@extends('publicSite.layout.master')

@section('content')

<section class="page-header" style="background-image:url(../assets/images/backgrounds/page-header-contact.jpg);margin-top: 145px">
    <div class="container">
        <h2>News Details</h2>
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="{{route('home2')}}">Home</a></li>
            <li><span>News</span></li>
        </ul><!-- /.thm-breadcrumb -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="blog-list">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <div class="blog-details__image">

                    <img src="{{asset('trip_images/'.$tripDetails->image)}}" alt="" class="img-fluid">

                </div><!-- /.blog-details__image -->
                <div class="blog-details__content">
                    <ul class="list-unstyled blog-one__meta">
                        <li><a href="{{route('guide',$tripDetails->guide_id)}}"><i class="far fa-user-circle"></i> {{$tripDetails->guide->name}}</a></li>
                        <li><a><i class="far fa-calendar-alt"></i> {{$tripDetails->date}}</a></li>
                    </ul><!-- /.list-unstyled blog-one__meta -->
                    <h3>{{$tripDetails->name}}</h3>
                    <p>{{$tripDetails->description}}</p>

                    <br>
                                {{-- ======================= --}}


                        <!-- Button trigger modal -->
                        <button type="button" style="padding: 6px 15px;" class="edit-trip" data-toggle="modal" data-target="#exampleModalCenter">
                            Book Now!
                           </button>

                           <!-- Modal -->

                           <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                             <div class="modal-dialog modal-dialog-centered" role="document">
                               <div class="modal-content">
                                 <div class="modal-header">
                                   <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                   </button>
                                 </div>
                                 <div class="modal-body">
                                   Your Request Will be sent to the guide, The guide Will contact you within 24 hours
                                 </div>
                                 <div class="modal-footer">
                                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                   @auth
                                    <form action="{{route('reservation.store')}}" method="Post">
                                    @csrf
                                    <input type="hidden" value="{{$tripDetails->id}}" name="trip_id">
                                     <button class="edit-trip "  type="submit"  onclick="alert('Your Request successfully sent!')">Send requet </button>
                                    </form>
                                    @endauth
                                    @guest
                                    <form action="/register" method="get">
                                     <button class="edit-trip "  type="submit"  onclick="alert('You Must be logged in')">Send requet </button>
                                    </form>
                                    @endguest
                                 </div>
                               </div>
                             </div>
                           </div>


                           {{-- ==================================== --}}
                           {{-- <button   onclick="alert('Test me')">Send requet </button> --}}


                    <div class="blog-details__bottom">



                        <div class="sidebar__social-list">
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-dribbble"></i></a>
                        </div><!-- /.sidebar__social-list -->
                    </div><!-- /.blog-details__bottom -->
                </div><!-- /.blog-details__content -->
    
            </div><!-- /.col-lg-8 -->
            <div class="col-lg-4">
                <div class="sidebar">
                    @section('style')
                    <style>
                        @import url('https://fonts.googleapis.com/css2?family=Merriweather&family=Mochiy+Pop+One&family=Mohave&display=swap');
                        h1,h2,h3,h4,h5,h6 {
                            font-family: "Barlow Condensed", sans-serif !important;
                        }
                        </style>
                        @endsection

                    <div class="container sidebar__single sahar-container">
                        <div class="row">
                            <div class="col-6">
                                <h5><i class="fas fa-user sahar-icon"></i> Trip Guide:</h5>
                                <h5><i class="far fa-clock sahar-icon"></i> Trip Duration:</h5>
                                <h5><i class="far fa-calendar-alt sahar-icon"></i> Trip Date:</h5>
                                <h5><i class="fas fa-tag sahar-icon"></i> Trip Price:</h5>
                            </div>
                            <div class="col-6">
                                <h5>{{$tripDetails->guide->name}}</h5>
                                <h5>{{$tripDetails->days}} days</h5>
                                <h5>{{$tripDetails->date}}</h5>
                                <h5>{{$tripDetails->price}} Jd</h5>
                            </div>
                        </div>
                    </div>
                </div><!-- /.sidebar -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog-list -->

@endsection
