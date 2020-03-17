<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\User;
use App\category;   
use Image;

class profilecontroller extends Controller
{
    public function index()
    {
    
        $data = category::all();
        return view('user_profile',compact('data'));
    }
    public function profile()
    {
      
        return view('user_profile',array('user' => Auth::user()));
    }

    public function update_profile(Request $request){

    	// Handle the user upload of avatar
    	if($request->hasFile('profile')){
    		$profile = $request->file('profile');
    		$filename = time() . '.' . $profile->getClientOriginalExtension();
    		Image::make($profile)->resize(300, 300)->save( public_path('/Profile/' . $filename ) );

    		$user = Auth::user();
    		$user->profile = $filename;
    		$user->save();
    	}

    	return view('user_profile', array('user' => Auth::user()) );
   }
}