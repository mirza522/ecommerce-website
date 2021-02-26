<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
      protected $table = 'groups';

     protected $fillable = [
        'group_id', 
        'url', 
        'name',
        'description',
      	'image',
        'icon',
        'status',
          
    ];
}
