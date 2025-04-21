// alert("This is a test alert!");

// There is Alertify JS implementation on this file
$(document).ready(function () {

    // For testing purpose
    // alertify.success('document is ready', 'Good!');
    console.log('Document is ready: ', new Date().toLocaleString(),  window.location.href);
    

    // Get CSRF Token
    function XCSRFTOKEN(){
        let XCSRFTOKEN = $('meta[name="csrf-token"]').attr('content');
        // alert(XCSRFTOKEN);
    }


    // Set Api Headers
    const headers ={  
        'Content-Type': 'application/json',  
        'X-CSRF-TOKEN': XCSRFTOKEN()
    };


    // App routes
    const routes = {
        addToWishlist: '/account/wishlists',
        removeFromWishlist: '/account/wishlists',
        addToCart: '/carts',
        updateCart: '/account/carts',
        removeFromCart: '/account/carts',
        updateCartCardDetails : '/account/cart-card-details'
    };

    
    // Add item to cart from product listing page
    $('.addToCart').click(function () {

        var $card = $(this).closest('[data-id]');
        var productId = $card.data('id');
        let quantity = 1;
        let data = {
            product_id: productId,
            quantity: quantity
        };

        let url = routes.addToCart;
        console.log("Add cart url", url);
        axios.post(url, data, headers)
            .then(function (response) {
                console.log(response);
                // Check response status
                if (response?.data?.success) {
                    if (window.location.hash == "") {
                        window.location = window.location + "#productList";
                    }
                    // Notify the user
                    alertify.success(response?.data?.message, 'successful!');
                    // Remove the class name and replace it with the new class name
                    // $card.find('.removeFromCart').addClass('addToCart').removeClass('removeFromCart');
                    $card.find('.addToCart').addClass('removeFromCart').removeClass('addToCart');

                    
                }else{
                    // alert('Failed to remove item from cart!');
                    alertify.error(response?.data?.message || 'There was an error', 'successful!');
                }
            })
            .catch(function (error) {
                console.log(error);
                console.error('There was an error adding the item to the cart!', error.message);
                // Notify the user
                alertify.error(error.message ?? 'There was an error!', 'successful!');
            });
    });

    // Remove item from cart
    $('.removeFromCart').click(function () {

        var $card = $(this).closest('[data-id]');
        var productId = $card.data('id');

        let data = {
            product_id: productId,
            // quantity: quantity
        };

        let url = routes.addToCart + `/${productId}`;
        console.log("Remove cart url", url);
        axios.delete(url, data, headers)
            .then(function (response) {
                console.log(response);
                // Check response status
                if (response?.data?.success) {
                    // Update cart count in header
                    if (window.location.hash == "") {
                        window.location = window.location + "#productList";
                    }
                    // Notify the user
                    alertify.success(response?.data?.message, 'successful!');

                    // Remove the class name and replace it with the new class name
                    $card.find('.removeFromCart').addClass('addToCart').removeClass('removeFromCart');
                    // $card.find('.addToCart').addClass('removeFromCart').removeClass('addToCart');

                    console.log($card.find('.removeFromCart'));
                    

                }else{
                    // Notify the user
                    alertify.error(response?.data?.message || 'There was an error', 'successful!');
                }
            })
            .catch(function (error) {
                console.log(error);
                console.error('There was an error adding the item to the cart!', error.message);
                // Notify the user
                alertify.error(error.message ?? 'There was an error!', 'successful!');
            });
    });

    // Remove item from cart page
    $('.removeFromCartPage').click(function () {
        var $card = $(this).closest('[data-id]');
        var cartId = $card.data('id');
        var $quantity = $card.find('.quantity');
        var quantity = parseInt($quantity[0]?.value) || 1;

        let url = routes.removeFromCart + `/${cartId}`;
        console.log("Remove cart url", url);
        // return;
        axios.delete(url, [], headers)
            .then(function (response) {
                // $card.find('.addToCart').hide();
                // $card.find('.cartControls').show();
                console.log(response);
                // Update cart count in header
                // Check response status
                if (response?.data?.success) {
                    // Update cart count in header
                    // alert('Item added to cart successfully!');
                    alertify.success(response?.data?.message, 'successful!');
                    // $("#productList").load(location.href+" #productList");
                    if (window.location.hash == "") {
                        window.location = window.location + "#productList";
                    }

                    // Remove the cart details
                    // $card.hide();
                    $card.remove();
                    // Remove the class name and replace it with the new class name
                    // $card.find('.removeFromCart').addClass('addToCart').removeClass('removeFromCart');
                    // $card.find('.addToCart').addClass('removeFromCart').removeClass('addToCart');

                }else{
                    // alert('Failed to remove item from cart!');
                    alertify.error(response?.data?.message || 'There was an error', 'successful!');
                }
            })
            .catch(function (error) {
                console.log(error);
                alertify.error(error.message ?? 'There was an error!', 'successful!');
                console.error('There was an error adding the item to the cart!', error.message);
            });
    });

    // Increment cart quantity
    $('.increment').click(function () {
        var $card = $(this).closest('[data-id]');
        var cartId = $card.data('id');
        var $quantity = $card.find('.quantity');
        var quantity = parseInt($quantity[0]?.value) || 1;
        
        console.log($card);
        console.log(cartId);
        console.log($quantity);
        console.log(quantity);

        let data = {
            quantity: quantity
        };
        console.log("cart data", data);
        let url = routes.updateCart + `/${cartId}`;
        console.log("cart url", url);
        
        axios.put(url, data, headers)
            .then(function (response) {
                console.log(response.data);
                // Update cart count in header this should come from the response
                // Check response status
                if (response?.data?.success) {
                    // Update cart count in header
                    // alert('Item added to cart successfully!');
                    alertify.success("Increment is " + response?.data?.message, 'successful!');
                    // $("#productList").load(location.href+" #productList");
                    if (window.location.hash == "") {
                        window.location = window.location + "#productList";
                    }

                    // Update cart card details
                    populateCartCard();

                    // Remove the class name and replace it with the new class name
                    // addToCart to removeFromCart
                }else{
                    // alert('Failed to remove item from cart!');
                    alertify.error(response?.data?.message || 'There was an error', 'successful!');
                }
            })
            .catch(function (error) {
                console.log(error);
                alertify.error(error.message ?? 'There was an error!', 'successful!');
                console.error('There was an error adding the item to the cart!', error.message);
            });

    });

    // Decrement cart quantity
    $('.decrement').click(function () {
        var $card = $(this).closest('[data-id]');
        var cartId = $card.data('id');
        var $quantity = $card.find('.quantity');
        var quantity = parseInt($quantity[0]?.value) || 1;

        // the quantity should be greater than 1
        if (quantity <= 1) {
            alertify.error("Quantity cannot be less than 1", 'successful!');
            return;
        }
        
        console.log($card);
        console.log(cartId);
        console.log($quantity);
        console.log(quantity);

        let data = {
            // product_id: productId,
            quantity: quantity
        };
        console.log("cart data", data);
        let url = routes.updateCart + `/${cartId}`;
        console.log("cart url", url);
        
        axios.put(url, data, headers)
            .then(function (response) {
                console.log(response.data);
                // Update cart count in header this should come from the response
                // Check response status
                if (response?.data?.success) {
                    // Update cart count in header
                    // alert('Item added to cart successfully!');
                    alertify.success("Decrement is " +response?.data?.message, 'successful!');
                    // $("#productList").load(location.href+" #productList");
                    if (window.location.hash == "") {
                        window.location = window.location + "#productList";
                    }

                    // Update cart card details
                    populateCartCard();

                    // Remove the class name and replace it with the new class name
                    // addToCart to removeFromCart
                }else{
                    // alert('Failed to remove item from cart!');
                    alertify.error(response?.data?.message || 'There was an error', 'successful!');
                }
            })
            .catch(function (error) {
                console.log(error);
                alertify.error(error.message ?? 'There was an error!', 'successful!');
                console.error('There was an error adding the item to the cart!', error.message);
            });
    });

    // Add to wishlist from product list page
    $('.addToWishlist').click(function () {

        var $card = $(this).closest('[data-id]');
        var productId = $card.data('id');
        alert(`Adding product id:${productId} to wishlist`);

       
        let data = {
            product_id: productId,
        };
        console.log("Wishlist data", data);


        let url = routes.addToWishlist;
        axios.post(url, data, headers)
            .then(function (response) {
                console.log(response.data);
                // Update cart count in header this should come from the response
                // Check response status
                if (response?.data?.success) {
                    // Update cart count in header
                    // alert('Item added to cart successfully!');
                    alertify.success(response?.data?.message, 'successful!');
                    // $("#productList").load(location.href+" #productList");
                    if (window.location.hash == "") {
                        window.location = window.location + "#productList";
                    }

                    // Remove the class name and replace it with the new class name
                    // addToCart to removeFromCart
                }else{
                    // alert('Failed to remove item from cart!');
                    alertify.error(response?.data?.message || 'There was an error', 'successful!');
                }
            })
            .catch(function (error) {
                console.log(error);
                alertify.error(error.message ?? 'There was an error!', 'successful!');
                console.error('There was an error adding the item to the cart!', error.message);
            });
        return;    
    });

    // Remove item from wishlist page
    $('.removeFromWishlist').click(function () {
        var $card = $(this).closest('[data-id]');
        var productId = $card.data('id');
        var wishlistId = $card.data('wishlistId');



        console.log($card.data());        
        console.log($card.data('id'));
        console.log($card.data('wishlistId'));
       
        let data = {
            product_id: productId,
            wishlist_id: wishlistId
        };

        let url = routes.removeFromWishlist + `/${wishlistId}`;
        console.log("Remove wishlist url", url);
        axios.delete(url, [], headers)
            .then(function (response) {
                console.log(response.data);
                // Update cart count in header this should come from the response
                // Check response status
                if (response?.data?.success) {
                    // Update cart count in header
                    // alert('Item added to cart successfully!');
                    alertify.success(response?.data?.message, 'successful!');
                    // $("#productList").load(location.href+" #productList");
                    if (window.location.hash == "") {
                        window.location = window.location + "#productList";
                    }

                    // Remove the cart details
                    // $card.hide();
                    $card.remove();
                }else{
                    // alert('Failed to remove item from cart!');
                    alertify.error(response?.data?.message || 'There was an error', 'successful!');
                }
            })
            .catch(function (error) {
                console.log(error);
                alertify.error(error.message ?? 'There was an error!', 'successful!');
                console.error('There was an error deleting wishlist!', error.message);
            });   
    });


    // Populate the cart card
    function populateCartCard() {

        let inputCouponCode = $('#inputCouponCode');
        let couponCode = inputCouponCode.val();
        let cartTotal = $('#cartTotal');
        let cartDiscount = $('#cartDiscount');
        let cartTotalPurchasePrice = $('#cartTotalPurchasePrice');

        let url = routes.updateCartCardDetails + `?coupon=${couponCode}`;
        console.log("Populate cart url", url);
        axios.get(url, [], headers)
            .then(function (response) {
                console.log(response.data);
                // Update cart count in header this should come from the response
                // Check response status
                if (response?.data?.success) {
                    // Update cart count in header
                    // alert('Item added to cart successfully!');
                    // alertify.success(response?.data?.message, 'successful!');
                    console.log(response?.data?.message, 'successful!');
                    
                    // $("#productList").load(location.href+" #productList");
                    if (window.location.hash == "") {
                        window.location = window.location + "#productList";
                    }

                    // populate cart card with database values
                    cartTotalPurchasePrice.text(response?.data?.data?.total_after_discount);
                    cartTotal.text(response?.data?.data?.total);
                    cartDiscount.text(response?.data?.data?.discount);
                    if(couponCode != ""){
                        inputCouponCode.val(response?.data?.data?.coupon);
                        $('#couponCodeStatus').text('Coupon code applied');
                    }
                }else{
                    // alert('Failed to remove item from cart!');
                    // alertify.error(response?.data?.message || 'There was an error', 'successful!');
                    console.log(response?.data?.message || 'There was an error', 'successful!');
                    
                }
            })
            .catch(function (error) {
                console.log(error);
                // alertify.error(error.message ?? 'There was an error!', 'successful!');
                console.error('There was an error populating cart card details!', error.message);
            });
    }
});






// import axios from 'axios';

// const options = {
//   method: 'GET',
//   url: 'https://tms.sdssn.org/api/refineries/exchange-rates',
//   headers: {
//     Accept: 'application/json',
//     Authorization: 'Bearer yeiZs3lWrGJHeUhmRl9eBWQwjGg3hlc3BaZksMdD86ef2d08'
//   }
// };

// try {
//   const { data } = await axios.request(options);
//   console.log(data);
// } catch (error) {
//   console.error(error);
// }

                // $card.find('.addToCart').show();
                // $card.find('.removeFromCart').hide();
                // $card.find('.quantity').text(1);