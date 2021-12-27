<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;    
use App\Models\User;
use App\Models\Trip;
use Illuminate\Support\Facades\Auth;
class ReservationController extends Controller


{
    public function show(){
        // $guide = User::findOrFail($id);
        // $reservations = $guide->reservations->trip_id;
        // $guide_name = $reservations->user_id;
        $reservations = DB::table('trip_user')
        ->join('trips', 'trips.id', '=', 'trip_id')
        ->join('users', 'users.id', '=', 'user_id')
 
        ->where('guide_id','=',Auth::user()->id)
        ->get(['*','trips.name As tirp_name','trip_user.id As reservation_id']);
  
    //    $res= $reservation->booking_date;


// select * from trip_user INNER join trips on (trip_id = trips.id) where (trips.guide_id = 4);
        // dd($reservations);
    
        return view('publicsite.reservations', compact('reservations'));

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //users => array of objects
        $users = User::all();

        return  view("admin.reservation",compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
       $trip = Trip::find($request->trip_id);

    
     
     
   
         
         $trip->user()->attach([
            [
               'trip_id' => $request->trip_id,
               'user_id' => Auth::id(),
               'booking_date' => now(),
               'status' => 'Hold'
           ]
            
           
       ]);
   

       return redirect()->route("userprofile.index");


         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
