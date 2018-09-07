<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $countries = Country::all();

    	return view('account.profile', [
            'user' => auth()->user(),
            'countries' => $countries 
        ]);
    }

    public function store(Request $request)
    {
        $user = Auth::user();
    	$user->name = $request->name;
    	$user->lastname = $request->lastname;
    	$user->email = $request->email;
    	$user->password = $request->password;
    	$user->postal_code = $request->postal_code;
    	$user->address = $request->address;
        $user->city = $request->city;
    	$user->phone = $request->phone;
    	$user->country_id = $request->country_id;

        if($request->password) {
            $user->password = $request->password;
        }

        $user->save();

    	return redirect('profile')->with('success', 'Se actualizarón los datos correctamente');
    }
}
