<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Group;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::all();
    	return view('admin.collection.group.index')->with('groups',$groups);
    }

    public function store(Request $request)
	{
		$group = new Group();
		$group->url = $request->input('url');
		$group->name = $request->input('name');
		$group->description = $request->input('description');
		$group->status = $request->input('status');
		$group->save();
		return redirect()->back()->with('status','role updated');

	}

	 public function edit($id)
	 {

	 	$groups = Group::find($id);
	 	return view('admin.collection.group.edit')->with('groups',$groups);

	 }

	 public function update(Request $request,$id)
	 {

	 	$groups = Group::find($id);
		$groups->url = $request->input('url');
		$groups->name = $request->input('name');
		$groups->description = $request->input('description');
		$groups->status = $request->input('status');
		$groups->save();
		return redirect()->back()->with('status','role updated');

	 }
}
//