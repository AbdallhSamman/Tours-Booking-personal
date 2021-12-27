@extends('publicSite.layout.master')
@section('style')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Merriweather&family=Mochiy+Pop+One&family=Mohave&display=swap');
    h1,h2,h3,h4,h5,h6 {
        font-family: "Barlow Condensed", sans-serif !important;
    }
    .mypara {
        font-size: 14px ;
        line-height: 1.6;
        font-family: Arial, Helvetica, sans-serif !important;
    }
</style>
@endsection

@section('content')


<section class="page-header" style="background-image: url({{asset('assets/images/backgrounds/page-header-contact.jpg')}}) ; padding-top:200px;">
    <div class="container">
        <h2>Guide Profile</h2>
        <ul class="thm-breadcrumb list-unstyled s">
            <li><a href="{{ route('home2')}}">Home</a></li>
            <li><span>User Profile</span></li>
        </ul>
    </div>
</section>
<!-- Sahar Start -->
<section class="user_profile">
    <div class="container">
        <div class="row">
            <!-- Guide Information -->
            <div class="col-4 guide-info">
                <img src="{{asset('user_images/'. $user->image)}}" alt="guide_photo" class="user_img">
                <h2 class="text-center pl-0">{{$user->name}}</h2>
                <div class="container">
                    <div class="row contact_info flex-row justify-content-center align-content-between mt-2">
                    <div class="box d-flex flex-column mr-3 align-items-center">
                    <span class="mb-2"><i class="fas fa-envelope"></i></span>
                    <span><i class="fas fa-mobile-alt"></i></span>
                    </div>
                    <div class="box d-flex flex-column align-items-start">
                    <span>{{ $user->email}}</span>
                    <span style="margin-top: 7px">{{$user->phone}}</span>
                    </div>
                    </div>
                </div>
            </div>
            <!-- Guide Trips -->
            <div class="col-8 guide-trips">
                <h1 class="mb-5" style="color:#FFA801">Guide Trips</h1>
                <!-- Trips -->
                <div class="trip mt-2">
                    <div class="container">
                        <!-- Trip Information -->
                        @foreach ($guide_trips as $trip)
                        <div class="row">
                            <div class="col-5">
                                <img src="{{asset('trip_images/' . $trip->image)}}" alt="trip_image" class="trip_img">
                            </div>
                            <div class="col-7">
                                <h4 style="text-transform: capitalize; color:#555">Name: {{$trip->name}}</h4>
                                <p class="mypara">Description: {{$trip->description}}</p>
                                <h6 style="color:#FFA801">Price: {{$trip->price }} JD</h6>
                                <a href="{{route('trips-details.show',$trip->id)}}"><button class="btn show-trip mt-3">Show Trip</button></a>
                            </div>
                        </div>
                        <hr>
                        @endforeach
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Sahar End -->
@endsection
