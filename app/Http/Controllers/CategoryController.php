<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Group;
use Illuminate\Support\Facades\File;
//use File;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $group = Group::all(); 
    	return view('admin.collection.category.create')->with('group',$group)->with('category',$category);
    }


     public function store(Request $request)
	{
		$category = new Category();
		$category->group_id = $request->input('group_id');
		$category->url = $request->input('url');
		$category->name = $request->input('name');
		$category->description = $request->input('description');

		if( $request->hasfile('category_img'))
    	{
    		
    		$image_file = $request->file('category_img');
    		$img_extension = $image_file->getClientOriginalExtension();
    		$img_filename = time() . '.' . $img_extension;
    		$image_file->move('uploads/categoryimage/',$img_filename);		
    		$category->image = $img_filename;	
    	}

    	if( $request->hasfile('category_icon'))
    	{
    		
    		$icon_file = $request->file('category_icon');
    		$icon_extension = $icon_file->getClientOriginalExtension();
    		$icon_filename = time() . '.' . $icon_extension;
    		$icon_file->move('uploads/categoryicon/',$icon_filename);		
    		$category->icon = $icon_filename;	
    	}



		$category->status = $request->input('status');

		$category->save();
		return redirect()->back()->with('status','role updated');

	}

	public function edit($id)
	{
		$group = Group::all();
		$category = Category::find($id);


		return view('admin.collection.category.edit')
		->with('group',$group)
		->with('category',$category)
		;
	}
	public function update(Request $request,$id)
	{
		$category = Category::find($id);
		$category->group_id = $request->input('group_id');
		$category->url = $request->input('url');
		$category->name = $request->input('name');
		$category->description = $request->input('description');

		if( $request->hasfile('category_img'))
    	{
    		$filepath_image = 'uploads/categoryimage/'.$category->image;
    		if(File::exists($filepath_image)){
    				File::delete($filepath_image);	
    			}
			$image_file = $request->file('category_img');
    		$img_extension = $image_file->getClientOriginalExtension();
    		$img_filename = time() . '.' . $img_extension;
    		$image_file->move('uploads/categoryimage/',$img_filename);		
    		$category->image = $img_filename;	
    	}

    	if( $request->hasfile('category_icon'))
    	{
    		$filepath_icon  = 'uploads/categoryimage/'.$category->icon;
    		if(File::exists($filepath_icon)){
    				File::delete($filepath_icon);	
    			}

    		
    		$icon_file = $request->file('category_icon');
    		$icon_extension = $icon_file->getClientOriginalExtension();
    		$icon_filename = time() . '.' . $icon_extension;
    		$icon_file->move('uploads/categoryicon/',$icon_filename);		
    		$category->icon = $icon_filename;	
    	}



		$category->status = $request->input('status');

		$category->update();
		return redirect()->back()->with('status','category updated');

	}
}



//->with('groups',$groups);