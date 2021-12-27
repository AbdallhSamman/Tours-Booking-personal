<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class   TourGuideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view("publicSite.add_trip",compact('categories'));
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
        $trip = new Trip();
        $request['guide_id'] = Auth::id();
        $input = $request->all();
        if($request->file("image")) {
        $newImageName = time() . '-' . $request->image->getClientOriginalName();
        $request->image->move(public_path('trip_images'), $newImageName);
        $input['image'] = $newImageName;
        }
        $trip::create($input);
        return redirect()->route("userprofile.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guide = User::findOrFail($id);
        $trips = $guide->trip;
        return view("publicSite.guide_profile",compact('guide','trips'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trip = Trip::findOrFail($id);
        $categories = Category::all();
        return view("publicSite.edit_trip",compact('trip','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trip $guideTrip)
    {

         $request->validate([
            'name' => 'required',
            'description' => 'required',
            'days' => 'required',
            'minimum_age' => 'required',
            'max_visitors' => 'required',
            'price' => 'required',
            'date' => 'required',
            'category_id' => 'required'
        ]);

        $request['guide_id'] =$guideTrip->guide_id;

        $input = $request->all();

        if($request->file("image")) {
        $newImageName = time() . '-' . $request->image->getClientOriginalName();
        $request->image->move(public_path('trip_images'), $newImageName);
        $input['image'] = $newImageName;
        }

         $guideTrip->update($input);
        return redirect()->route("userprofile.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trip $guideTrip)
    {
        $guideTrip->delete();
        return redirect()->route("userprofile.index");
    }


}
