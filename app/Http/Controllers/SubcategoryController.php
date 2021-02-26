<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Trial;
use Illuminate\Support\Facades\File;

class SubcategoryController extends Controller
{
     public function index()
    {
       $category = Category::all();
        $trial = Trial::all(); 
        return view('admin.collection.subcategory.index')->with('trial',$trial)->with('category',$category);
    }
    public function store(Request $request)
    {

        $trial = new Trial();
        $trial->category_id = $request->input('category_id');
        $trial->url = $request->input('url');
        $trial->name = $request->input('name');
        $trial->description = $request->input('description');
    

        if( $request->hasfile('subcategory_img'))
        {
            
            $image_file = $request->file('subcategory_img');
            $img_extension = $image_file->getClientOriginalExtension();
            $img_filename = time() . '.' . $img_extension;
            $image_file->move('uploads/subcategoryimage/',$img_filename);       
            $trial->image = $img_filename;  
        }
        $trial->priority = $request->input('priority');
        $trial->status = $request->input('status');

        $trial->save();
        return redirect()->back()->with('status','role updated');

    }
    public function edit($id)
    {
        $category = Category::all();
        $trial = Trial::find($id);


        return view('admin.collection.subcategory.edit')
        ->with('category',$category)
        ->with('trial',$trial)
        ;
    }
    public function update(Request $request,$id)
    {
        $trial = Trial::find($id);
        $trial->category_id = $request->input('category_id');
        $trial->url = $request->input('url');
        $trial->name = $request->input('name');
        $trial->description = $request->input('description');
    

        if( $request->hasfile('subcategory_img'))
        {
            $filepath_image = 'uploads/subcategoryimage/'.$trial->image;
            if(File::exists($filepath_image)){
                    File::delete($filepath_image);  
                }
            
            $image_file = $request->file('subcategory_img');
            $img_extension = $image_file->getClientOriginalExtension();
            $img_filename = time() . '.' . $img_extension;
            $image_file->move('uploads/subcategoryimage/',$img_filename);       
            $trial->image = $img_filename;  
        }
        $trial->priority = $request->input('priority');
        $trial->status = $request->input('status');

        $trial->update();
        return redirect()->back()->with('status','role updated');
    }
}
