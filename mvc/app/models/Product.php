<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = "products";
    public $fillable = [
        'name', 'cate_id', 'price', 'short_desc',
        'detail', 'star', 'views'
    ];
}
