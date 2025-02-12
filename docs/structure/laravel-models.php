<?php

// app/Models/User.php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'username',
        'email',
        'password',
        'role',
        'default_address'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'default_address' => 'boolean',
    ];

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function viewProducts()
    {
        return $this->hasMany(ViewProduct::class);
    }
}

// app/Models/Asset.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $fillable = [
        'name',
        'type',
        'file_id',
        'path',
        'url',
        'size',
        'hosted_at'
    ];

    protected $casts = [
        'size' => 'integer'
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'banner_id');
    }

    public function productVariations()
    {
        return $this->hasMany(ProductVariation::class, 'asset_id');
    }
}

// app/Models/Address.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'other_name',
        'phone_number',
        'street',
        'city',
        'state',
        'country'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}

// app/Models/Promotion.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $fillable = [
        'banner_id',
        'title',
        'description',
        'discount',
        'show',
        'start_date',
        'end_date'
    ];

    protected $casts = [
        'show' => 'boolean',
        'discount' => 'decimal:2',
        'start_date' => 'datetime',
        'end_date' => 'datetime'
    ];

    public function banner()
    {
        return $this->belongsTo(Asset::class, 'banner_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

// app/Models/Brand.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'banner_id',
        'name',
        'slug'
    ];

    public function banner()
    {
        return $this->belongsTo(Asset::class, 'banner_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

// app/Models/Category.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

// app/Models/Product.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'banner_id',
        'name',
        'slug',
        'initial_price',
        'price',
        'stock',
        'sku',
        'description',
        'tags',
        'views',
        'category_id',
        'brand_id',
        'promotion_id'
    ];

    protected $casts = [
        'initial_price' => 'decimal:2',
        'price' => 'decimal:2',
        'stock' => 'integer',
        'views' => 'integer',
        'tags' => 'array'
    ];

    public function banner()
    {
        return $this->belongsTo(Asset::class, 'banner_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function promotion()
    {
        return $this->belongsTo(Promotion::class);
    }

    public function variations()
    {
        return $this->hasMany(ProductVariation::class);
    }

    public function viewProducts()
    {
        return $this->hasMany(ViewProduct::class);
    }

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}

// app/Models/ProductVariation.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariation extends Model
{
    protected $fillable = [
        'product_id',
        'title',
        'color',
        'size',
        'asset_id',
        'sku'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function asset()
    {
        return $this->belongsTo(Asset::class);
    }
}

// app/Models/ViewProduct.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ViewProduct extends Model
{
    protected $fillable = [
        'user_id',
        'product_id',
        'views'
    ];

    protected $casts = [
        'views' => 'integer'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

// app/Models/Wishlist.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $fillable = [
        'user_id',
        'product_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

// app/Models/Cart.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id',
        'product_id',
        'quantity'
    ];

    protected $casts = [
        'quantity' => 'integer'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

// app/Models/Order.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'total_amount',
        'coupon',
        'note',
        'status',
        'address_id'
    ];

    protected $casts = [
        'total_amount' => 'decimal:2'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }

    public function review()
    {
        return $this->hasOne(Review::class);
    }
}

// app/Models/OrderItem.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'user_id',
        'order_id',
        'product_id',
        'quantity',
        'price'
    ];

    protected $casts = [
        'quantity' => 'integer',
        'price' => 'decimal:2'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

// app/Models/Transaction.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'order_id',
        'amount',
        'status',
        'reference',
        'payment_method',
        // response data from payment server
        'data',
    ];

    protected $casts = [
        'amount' => 'decimal:2'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}

// app/Models/Review.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'order_id',
        'comment',
        'rating',
        'status'
    ];

    protected $casts = [
        'rating' => 'integer'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}

// app/Models/Message.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message'
    ];
}
