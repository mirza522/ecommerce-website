<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Category;
use App\Models\Trial;
use App\Models\Product;

class CollectionController extends Controller
{
    public function index()
    {
    	return view('frontend.index');
    }

    public function groupview($group_url)
    {

    	$group = Group::where('url',$group_url)->first();
    	$group_id = $group->id;

    	$category = Category::where('group_id',$group_id)->get();
    	return view('frontend.collection.category2')->with('category',$category)->with('group',$group);
    }

    public function categoryview($group_url,$cate_url)
    {

    	$category = Category::where('url',$cate_url)->first();
    	$category_id = $category->id;

    	$subcategory = Trial::where('category_id',$category_id)->get();
    	return view('frontend.collection.subcategory')->with('subcategory',$subcategory)->with('category',$category);
    }

     public function subcategoryview($group_url,$cate_url,$subcate_url)
    {

    	$subcategory = Trial::where('url',$subcate_url)->first();
    	$subcategory_id = $subcategory->id;

    	$product = Product::where('sub_category_id',$subcategory_id)->get();
    	return view('frontend.collection.product')->with('product',$product)->with('subcategory',$subcategory);
    }


	 public function productview($group_url,$cate_url,$subcate_url,$prod_url)
    {

    	$product = Product::where('url',$prod_url)->first();
    	
    	return view('frontend.collection.productview')->with('product',$product);
    }    




}
