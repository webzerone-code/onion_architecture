<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'tag_id',
        'productTitle',
        'productDescription',
        'productImage',
        'productPrice',
    ];
}
