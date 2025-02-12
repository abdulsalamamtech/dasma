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
    street
    city
    state
    country [Nigeria]
    default_address [yes | no]

## coupons [eg DASMA25 for 2% off]
    name 
    coupon_code [unique max: 20 ] 
    expires [date]

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
    banner [single image]
    name
    slug
    initial_price [must be > price]
    price [< initial price]
    stock [number of products in stock]
    sku [(id + user + created_at) nullable string]
    description
    tags [hot deal, new product, bags]
    colors []
    sizes []
    views [default 0]
        category_id [belongs to a category]
        brand_id [nullable belongs to a brand]
        promotion_id [nullable belongs to a promotion]

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

## orders
    user_id
    total_amount
    coupon_id [eg DASMA25 for 2% off]
    note [nullable]
    paid
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
    // response data from payment server
    data

## order_items
    user_id
    order_id
    product_id
    quantity
    price

## transactions
    order_id
    amount
    status [pending, successful, cancelled, suspended, rejected]
    reference
    payment_method


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
        
