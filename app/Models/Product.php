<?php

namespace App\Models;

use App\Helpers\ActorHelper;
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
        'weight',
        'tag',
        'views',
        'sku',
        'color',
        'size',
    ];


    protected $casts = [
        'price' => 'decimal:2',
        'initial_price' => 'decimal:2',
        'stock' => 'integer',
        'views' => 'integer',
        'tag' => 'string',
        'color' => 'string',
        'size' => 'string',
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

    public function cartItem(){
        // Check if the user is authenticated
        // if (!auth()->check()) {
        //     return null; // or handle the case when the user is not authenticated
        // }
        // Retrieve the cart item for the authenticated user
        // and the current product

        return Cart::where('user_id', ActorHelper::getUserId())
            ->where('product_id', $this->id)
            ->first();
    }

    public function tagDesign(){
        // [trend, 10%, 20%, hot, new]
        $productTag = $this?->tag;
        if($productTag == 'trend'){
            return 'text-v-blue';
        }elseif ($productTag == '10%' || $productTag == '20%') {
            return 'text-primary-light';
        }elseif ($productTag == 'hot') {
            return 'text-v-red';
        }elseif ($productTag == 'new') {
            return 'text-v-green';
        }else{
            return 'text-v-green';
        }
    }
    
}
