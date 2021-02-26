<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class RegisteredController extends Controller
{
	public function index()
	{
		$users = User::paginate(2);
			//$users = User::all();
		//$users = User::where('role_as',Input::get('roles'))->get();
		return view('admin.users2.index')->with('users',$users);
	}
	public function edit($id)
	{
	$user_roles = User::find($id);


	return view('admin.users2.edit')->with('user_roles',$user_roles);
	}
	public function updaterole(Request $request,$id)
	{
		$user = User::find($id);
		$user->name = $request->input('name');
		$user->role_as = $request->input('roles');
		$user->isban = $request->input('isban');
		$user->update();
		return redirect()->back()->with('status','role updated');

	}



    
}
