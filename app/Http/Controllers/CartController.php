<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 use Illuminate\Support\Facades\Cookie;
 use App\Models\Product;

class CartController extends Controller
{
	public function addtocart(Request $request)
	{

		$prod_id = $request->input('product_id');
        $quantity = $request->input('quantity');
        $products = Product::find($prod_id);
            $prod_name = $products->name;
            $prod_image = $products->image;
            $priceval = $products->price;

            if($products)
            {
                $item_array = array(
                    'item_id' => $prod_id,
                    'item_name' => $prod_name,
                    'item_quantity' => $quantity,
                    'item_price' => $priceval,
                    'item_image' => $prod_image
                );
                $cart_data[] = $item_array;

                $item_data = json_encode($cart_data);
                $minutes = 60;
                Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                return response()->json(['status'=>'"'.$prod_name.'" Added to Cart']);
            }
}
}