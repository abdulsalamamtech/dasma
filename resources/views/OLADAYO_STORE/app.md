


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
        
