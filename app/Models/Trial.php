<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trial extends Model
{
    protected $table = 'trials';

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
        return $this->belongsTo(category::class,'category_id','id');
    }
}
