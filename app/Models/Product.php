<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

     protected $fillable = [
        'sub_category_id', 
        'url', 
        'name',
        'small_description',
      	'image',
        'p_highlight_heading',
        'p_highlights',
        'p_description_heading',
        'p_description',
        'p_details_heading',
        'p_details',
        'sale_tag',
        'original_price',
        'offer_price',
        'quantity',
        'priority',
        'new_arrival_products',
        'featured_products',
        'popular_products',
        'offer_products',
        'status',
        'meta_title',
        'meta_description',
        'meta_keyword',
        
		
          
    ];
    public function trial()
    {
        return $this->belongsTo(trial::class,'sub_category_id','id');
    }
}
