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


    protected $casts = [
        'price' => 'decimal:2',
        'initial_price' => 'decimal:2',
        'stock' => 'integer',
        'views' => 'integer',
        'tags' => 'array',
        'colors' => 'array',
       'sizes' => 'array',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function promotion(){
        return $this->belongsTo(Promotion::class);
    }

    public function banner(){
        return $this->belongsTo(Asset::class, 'banner_id');
    }

    public function variations(){
        return $this->hasMany(ProductVariation::class);
    }

    // public function reviews(){
    //     return $this->hasMany(Review::class);
    // }

    public function viewProducts(){
        return $this->hasMany(ViewProduct::class);
    }

    public function wishlists(){
        return $this->hasMany(Wishlist::class);
    }

    public function carts(){
        return $this->hasMany(Cart::class);
    }

    public function orders(){
        return $this->hasManyThrough(Order::class, OrderItem::class, 'product_id', 'id');
    }

    public function transactions(){
        return $this->hasManyThrough(Transaction::class, Order::class, 'product_id', 'order_id');
    }

    public function ordersItems(){
        return $this->hasMany(OrderItem::class);
    }

    
}
