@extends('publicSite.layout.master')
@section ('style')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Merriweather&family=Mochiy+Pop+One&family=Mohave&display=swap');
    h1,h2,h3,h4,h5,h6 {
        font-family: "Barlow Condensed", sans-serif !important;
    }
</style>
 

@endsection
@section('content')
<div class="container" style="margin-top: 200px">
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Your Reservation</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Customer Name</th>
                          <th>Customer Email</th>
                          <th>Custumer Phone</th>
                          <th>Trip Name</th>
                          <th>Booking Date</th>
                          <th>Price</th>
                          {{-- <th>Status</th> --}}
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($reservations as $reservation) 
                        <tr>
                          <td>{{$reservation->reservation_id}}</td>
                         

                          <td scope="row">{{$reservation->name}}</td>

                          <td>{{$reservation->email}}</td>
                          <td>{{$reservation->phone}}</td>
                             <td>{{$reservation->tirp_name}}</td>
                             <td>{{$reservation->booking_date}}</td>
                          <td>{{$reservation->price . " JD"}}</td>
                          {{-- <td><a href="#" class="btn btn-success">Progress</a></td> --}}
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</section>


@endsection