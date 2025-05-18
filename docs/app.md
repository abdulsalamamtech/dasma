<!-- Credit To: https://elyssi.redpixelthemes.com/ -->
<!-- e-commerce ERD: https://vertabelo.com/blog/er-diagram-for-online-shop/ -->


## user
    name [username, min:3 | max:32]
    email [min:10| max:64]
    password [min:8, max:32]
    role [super-admin | admin | customer]
    # default_address [yes | no]

## assets
    name
    type
    file_id
    path
    url
    size
    hosted_at [imagekit, aws, cloudinary]

## addresses [user has multiple addresses]
    first_name
    last_name
    other_name
    phone_number
    post_code
    street
    city
    state
    country [Nigeria]
    default_address [yes | no]

## coupons [eg DASMA25 for 2% off]
    name 
    coupon_code [unique max: 20 ] 
    expires [date]
    discount
    min_order_amount
    created_by

## promotions [search a product that has this promotion id]
    banner [single image asset | 50 by 50]
    title [hot deal, happy new year]
    description [get our happy new year discount products]
    discount [min:0 | max:100, 10% discount]
    show [yes| no]
    start_date
    end_date


## brands [vendors]
    banner [single image asset]
    name
    slug


## categories [collections]
    name
    slug


## products
    weight (kg)
    banner [single image]
    name
    slug
    initial_price [must be > price]
    price [< initial price]
    stock [number of products in stock]
    sku [(id + user + created_at) nullable string]
    description
    tag [hot deal, new product, bags]
    color
    size
    views [default 0]
        category_id [belongs to a category]
        brand_id [nullable belongs to a brand]
        promotion_id [nullable belongs to a promotion]
    advertised (false | true)

## product_variations [max of 4 asset images per product]
    product_id [belongs to a product]
    title [side-view |  back-view]
    (color size)
    asset_id [single asset image]
    sku [id + user + created_at]

## view_products
    user_id
    product_id
    views

## wishlists [favourites]
    user_id
    product_id


## carts [calculate to orders then add to order_items ]
    user_id
    product_id
    quantity
    color
    size

## orders
    user_id
    total_amount
    discount
    total_after_discount
    coupon [eg DASMA25 for 2% off]
    coupon_id
    shipping_fee
    total_payable_amount
    note [nullable]
    paid
    total_weight
    status 
        [
            pending (not paid), 
            cancel (before payment), 
            processing (after payment),

            confirmed (by admin), 
            shipped (by admin) 
            received (by user), 
            rejected (by user), 
            returned (by user), 
            refunded (by admin), 
        ]
    address_id

## order_items
    user_id
    order_id
    product_id
    quantity
    price
    color
    size

## transactions
    order_id
    amount
    status [pending, successful, cancelled, suspended, rejected]
    reference
    payment_method
    // response data from payment server
    data


## reviews
    order_id
    comment
    rating [1 to 5]
    status [pending, approved, rejected]


## chat
    user_id
    admin_id
    content
    status [pending, viewed]

## messages
    name
    email
    subject
    message


## newsletters
    email

----------------------------------------------------------------------



## Structures

### Home
    - home
    - store
    - collections
    - contact
    - FAGs
    - search

    - login
    - register
    - logout

    - account | dashboard for customers
    - wishlist
    - cart

    - order 
        user_id
        total_price
        status [pending, shipped, completed]
        coupon [used coupon code]
        discount
    - order_items
        user_id
        order_id
        product_id
        price
        quantity
    - transactions
        user_id
        order_id
        amount
        reference
        status [pending, failed, successful]
    - history [references all order items for the customer]

    - profile [for the customer]
        - information
        - addresses


## Methods
    - assets
        - file_id
        - path
        - url
    - brands
        - name
        - description
        - asset_id
    - categories
        - name
        - description
    - Add collections
        - name (women)
        - description (for ladies and girls)
        - tags (boots, bags, belts) add multiple names [array]
    - products
        - name
        - description
        - price
        - colors []
        - sizes []
        - category_id (required)
        - brand_id (nullable)
        - tags []
    - views
        orders
        transactions
        


------------------------
## Log Viewer
```sh
    composer require opcodesio/log-viewer
    php artisan log-viewer:publish
```
Adding Middleware and auth
- Docs: [middleware](https://log-viewer.opcodes.io/docs/3.x/configuration/middleware)
- Docs: [auth](https://log-viewer.opcodes.io/docs/3.x/configuration/access-to-log-viewer)
```php
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        LogViewer::auth(function ($request) {
            // return true to allow viewing the Log Viewer.
            return ($request->user()->role == 'admin') ?? false;
        });
    
    }
        /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        LogViewer::auth(function ($request) {
            // return true to allow viewing the Log Viewer.
            return ($request->user()->role == 'admin') ?? $request->user()
            && in_array($request->user()->email, [
                'abdulsalamamtech@gmail.com',
            ]);;
        });
    
    }

```
## config/log-viewer.php
- php artisan vendor:publish --tag="log-viewer-config"
```php
    'middleware' => ['web', 'auth'],
```



## Search In Laravel
```php

use Illuminate\Http\Request;

public function search(Request $request)
{
    $query = $request->input('query'); // The search query
    $keywords = explode(' ', $query); // Split the query into multiple keywords

    $products = Product::where(function ($q) use ($keywords) {
        foreach ($keywords as $keyword) {
            $q->orWhere('name', 'LIKE', "%{$keyword}%")
              ->orWhere('description', 'LIKE', "%{$keyword}%")
              ->orWhere('sku', 'LIKE', "%{$keyword}%");
        }
    })->get();

    return view('products.index', compact('products'));
}


public function scopeSearch($query, $keywords)
{
    return $query->where(function ($q) use ($keywords) {
        foreach ($keywords as $keyword) {
            $q->orWhere('name', 'LIKE', "%{$keyword}%")
              ->orWhere('description', 'LIKE', "%{$keyword}%")
              ->orWhere('sku', 'LIKE', "%{$keyword}%");
        }
    });
}


public function search(Request $request)
{
    $query = $request->input('query'); // The search query
    $keywords = explode(' ', $query); // Split the query into multiple keywords

    $products = Product::search($keywords)->get();

    return view('products.index', compact('products'));
}

## With Eloquent Relationship

$products = Product::where(function ($q) use ($keywords) {
    foreach ($keywords as $keyword) {
        $q->orWhere('name', 'LIKE', "%{$keyword}%")
          ->orWhere('description', 'LIKE', "%{$keyword}%")
          ->orWhere('sku', 'LIKE', "%{$keyword}%");
    }
})
->orWhereHas('category', function ($q) use ($keywords) {
    foreach ($keywords as $keyword) {
        $q->where('name', 'LIKE', "%{$keyword}%");
    }
})
->orWhereHas('brand', function ($q) use ($keywords) {
    foreach ($keywords as $keyword) {
        $q->where('name', 'LIKE', "%{$keyword}%");
    }
})
->get();


$products = Product::search($keywords)->paginate(10);



<form action="{{ route('products.search') }}" method="GET">
    <input type="text" name="query" placeholder="Search products..." value="{{ request('query') }}">
    <button type="submit">Search</button>
</form>

@if($products->isNotEmpty())
    <ul>
        @foreach($products as $product)
            <li>{{ $product->name }} - {{ $product->sku }}</li>
        @endforeach
    </ul>
@else
    <p>No products found.</p>
@endif




$products = Product::where(function ($q) use ($keywords) {
    foreach ($keywords as $keyword) {
        $q->orWhereAny([
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
        ], 'LIKE', "%$keyword%");
    }
})->get();
return $products;
```



## passing data to all view
- [Video Tutorial](https://www.youtube.com/watch?v=Lu9zjLdUGY0)
>> AppServiceProvider.php >> boot()
```php
    view()->composer('dasma.*', function ($view) {
        $products = \App\Models\Product::latest()->get();
        $view->with('products', $products);
    });

```