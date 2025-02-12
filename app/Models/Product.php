<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'category_id',
        'brand_id',
        'promotion_id',
        'banner_id',
        'name',
       'slug',
        'description',
        'price',
        'initial_price',
        'stock',
        'tags',
        'views',
        'sku',
        'colors',
       'sizes',
    ];
}
