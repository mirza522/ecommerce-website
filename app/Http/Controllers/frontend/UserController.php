<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\File;
//use File:

class UserController extends Controller
{
    public function myprofile()
    {
    	return view('frontend.users2.myprofile');
    }

    public function profileupdate(Request $request)
    {
    	$user_id=Auth::user()->id;
    	$user = User::findOrFail($user_id);

    	$user->name = $request->input('name');
    	$user->lname = $request->input('lname');
    	$user->adress1 = $request->input('adress1');
    	$user->adress2 = $request->input('adress2');	
    	$user->city = $request->input('city');
    	$user->state = $request->input('state');
    	$user->lname = $request->input('lname');
    	$user->pincode = $request->input('pincode');
    	$user->phone = $request->input('phone');
    	$user->alternate_phone = $request->input('alternate_phone');
    	$user->lname = $request->input('alternate_phone');
    	
    	if( $request->hasfile('image'))
    	{
    		$destination = 'uploads/profile/'.$user->image;
    		if(File::exists($destination)){
    			File::delete($destination);

    		}
    		$file = $request->file('image');
    		$extension = $file->getClientOriginalExtension();
    		$filename = time() . '.' . $extension;
    		$file->move('uploads/profile/',$filename);		
    		$user->image = $filename;	
    	}
    	$user->update();
    	return redirect()->back()->with('status','updated');		

    }
}
