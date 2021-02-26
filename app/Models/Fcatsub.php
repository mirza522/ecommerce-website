<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fcatsub extends Model
{
     protected $table = 'fcatsubs';

     protected $fillable = [
        'category_id', 
        'url', 
        'name',
        'description',
      	'image',
        'priority',
        'status',
		
          
    ];
    public function category()
    {
        return $this->belongsTo(Group::class,'category_id','id');
    }
}
