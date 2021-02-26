<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trial;
use App\Models\Product;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
     public function index()
    {
       $product = Product::all();
        $trial = Trial::all(); 
    	return view('admin.collection.product.index')->with('product',$product)->with('trial',$trial);
    }
    public function store(Request $request)
    {

		$product = new Product();
		$product->sub_category_id = $request->input('sub_category_id');
		$product->url = $request->input('url');
		$product->name = $request->input('name');
		$product->small_description = $request->input('small_description');
	

		if( $request->hasfile('image'))
    	{
    		
    		$image_file = $request->file('image');
    		$img_extension = $image_file->getClientOriginalExtension();
    		$img_filename = time() . '.' . $img_extension;
    		$image_file->move('uploads/productimage/',$img_filename);		
    		$product->image = $img_filename;	
    	}

    	$product->p_highlight_heading = $request->input('p_highlight_heading');
    	$product->p_highlights = $request->input('p_highlights');

    	$product->p_description_heading = $request->input('p_description_heading');
		$product->p_description = $request->input('p_description');
			$product->p_details_heading = $request->input('p_details_heading');
			$product->p_details = $request->input('p_details');
		
		$product->sale_tag = $request->input('sale_tag');
		$product->original_price = $request->input('original_price');
		$product->offer_price = $request->input('offer_price');
		$product->quantity = $request->input('quantity');
		$product->priority = $request->input('priority');
		$product->new_arrival_products = $request->input('new_arrival_products');
		$product->featured_products = $request->input('featured_products');
		$product->popular_products = $request->input('popular_products');
		$product->offers_products = $request->input('offers_products');
		$product->status = $request->input('status');
		$product->meta_title = $request->input('meta_title');
		$product->meta_description = $request->input('meta_description');
		$product->meta_keyword = $request->input('meta_keyword');

		$product->save();
		return redirect()->back()->with('status','role updated');

    }
    public function edit($id)
	{
		$trial = Trial::all();
		$product = Product::find($id);


		return view('admin.collection.product.edit')
		->with('trial',$trial)
		->with('product',$product)
		;
	}
	public function update(Request $request,$id)
	{
		$product = Product::find($id);
		
		$product->sub_category_id = $request->input('sub_category_id');
		$product->url = $request->input('url');
		$product->name = $request->input('name');
		$product->small_description = $request->input('small_description');
	

		if( $request->hasfile('image'))
    	{
    		
    		$image_file = $request->file('image');
    		$img_extension = $image_file->getClientOriginalExtension();
    		$img_filename = time() . '.' . $img_extension;
    		$image_file->move('uploads/productimage/',$img_filename);		
    		$product->image = $img_filename;	
    	}

    	$product->p_highlight_heading = $request->input('p_highlight_heading');
    	$product->p_highlights = $request->input('p_highlights');

    	$product->p_description_heading = $request->input('p_description_heading');
		$product->p_description = $request->input('p_description');
			$product->p_details_heading = $request->input('p_details_heading');
			$product->p_details = $request->input('p_details');
		
		$product->sale_tag = $request->input('sale_tag');
		$product->original_price = $request->input('original_price');
		$product->offer_price = $request->input('offer_price');
		$product->quantity = $request->input('quantity');
		$product->priority = $request->input('priority');
		$product->new_arrival_products = $request->input('new_arrival_products');
		$product->featured_products = $request->input('featured_products');
		$product->popular_products = $request->input('popular_products');
		$product->offer_products = $request->input('offer_products');
		$product->status = $request->input('status');
		$product->meta_title = $request->input('meta_title');
		$product->meta_description = $request->input('meta_description');
		$product->meta_keyword = $request->input('meta_keyword');

		$product->update();
		return redirect()->back()->with('status','role updated');
	}
}
