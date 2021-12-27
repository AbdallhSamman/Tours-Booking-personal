<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('admin.user', compact('users'));
    }
    public function getGuide($id)
    {
        $user = User::find($id);
        $trips = Trip::where('guide_id', $id)->get();
        return view('publicSite/guide_profile', compact('user', 'trips'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::where('role_type', $id)->get();
        return view("admin.user", compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $newImage = time() . '-' . $request->image->getClientOriginalName();
        $request->image->move(public_path('user_images'), $newImage);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone;
        $user->image = $newImage;
        $user->role_type = 'admin';
        $user->save();
        return redirect()->route("user.index");
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($user)
    {
        $edited_user = User::find($user);
        return view('admin.edit_user', compact('edited_user'));
    }
    public function editGuideProfile($id)
    {
        $edited_user = User::find($id);
        return view('edit_guide_profile', compact('edited_user'));
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
        $user = User::find($id);
        $newImage = time() . '-' . $request->image->getClientOriginalName();
        $request->image->move(public_path('user_images'), $newImage);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->phone = $request->phone;
        $user->image = $newImage;
        $user->role_type = 'admin';
        $user->save();
        return redirect()->route("user.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete($id);
        return redirect()->route("user.index");
    }
}
