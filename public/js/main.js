
// alert("This is a test alert!");



// There is Alertify JS implementation on this file
$(document).ready(function () {

    alertify.success('document is ready', 'Good!');

    // Get CSRF Token
    function XCSRFTOKEN(){
        let XCSRFTOKEN = $('meta[name="csrf-token"]').attr('content');
        // alert(XCSRFTOKEN);
    } 
    XCSRFTOKEN();


    // Set Api Headers
    const headers ={  
        'Content-Type': 'application/json',  
        'X-CSRF-TOKEN': XCSRFTOKEN()
    };


    // App routes
    const routes = {
        getProduct: '/products',
        addToWishlist: '/wishlists',
        removeFromWishlist: '/wishlists',
        getCart: '/carts',
        updateCart: '/carts',
        addToCart: '/carts',
        removeFromCart: '/carts',
        getOrder: '/orders',
        placeOrder: '/orders'
    };

    
    $('.addToCart').click(function () {

        alert('Adding item to cart successful!');

        var $card = $(this).closest('[data-id]');
        console.log($card);
        var productId = $card.data('id');
        console.log(productId);
        var quantity = 1;
        alertify.success(`Adding product id:${productId} qty of ${quantity} to cart`);

        let data = {
            product_id: productId,
            quantity: quantity
        };

        let url = routes.addToCart;
        axios.post(url, data, headers)
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
                    $("#productList").load(location.href+" #productList>*","");
                }else{
                    // alert('Failed to remove item from cart!');
                    alertify.error(response?.data?.message, 'successful!');
                }
            })
            .catch(function (error) {
                alertify.error(error ?? 'There was an error!', 'successful!');
                console.error('There was an error adding the item to the cart!', error);
            });
        return;
    });


    // Remove Item from Cart
    $('.removeFromCart').click(function () {
        var $card = $(this).closest('[data-id]');
        var productId = $card.data('id');

        // alert(`Remove product id:${productId} from cart`);
     

        let url = routes.removeFromCart + '/' + productId;

        // Api Call
        axios.delete(url, [], headers)
            .then(function (response) {
                console.log(response.data);
                console.log(response.data.success);
                console.log(response.data.message);
                if (response.data.success) {
                    // Update cart count in header
                    // alert(response.data.message);
                    alertify.success(response.data.message, 'successful!');
                    // $card.hide();
                    $("#productList").load(location.href+" #productList>*","");
                }else{
                    // alert('Failed to remove item from cart!');
                    alertify.error(response.data.message, 'successful!');
                }

            })
            .catch(function (error) {
                // alert('Failed to remove item from cart!');
                alertify.error(error ?? 'There was an error!', 'successful!');
                console.error('There was an error removing the item from the cart!', error);
            });
    });


    $('.increment').click(function () {
        var $card = $(this).closest('[data-id]');
        var cartId = $card.data('id');
        var $quantity = $card.find('.quantity');
        var quantity = parseInt($quantity[0]?.value) + 1;

        // alert(`Inc cart id:${cartId} with qty:${quantity} to cart`);

        // $quantity.text(quantity);
        // axios.post('/cart/update', { productId: productId, quantity: quantity })
        //     .then(function (response) {
        //         console.log('Cart updated successfully');
        //     })
        //     .catch(function (error) {
        //         console.error('There was an error updating the cart!', error);
        //     });
    });

    $('.decrement').click(function () {
        var $card = $(this).closest('[data-id]');
        console.log($card);
        var cartId = $card.data('id');
        
        var $quantity = $card.find('.quantity');
        // console.log($quantity);

        var quantity = parseInt($quantity[0]?.value) - 1;
        console.log(quantity);

        // let data = {
        //     id: cartId,
        //     qty: quantity,
        // };
        // Update the cart on db
        // refresh the table and update the total

        // alert(`Dec cart id:${cartId} with qty:${quantity} to cart`);
        // Refresh the content
        $("#reloadContent").load(location.href+" #reloadContent>*","");

        // if (quantity > 1) {
        //     quantity--;
        //     $quantity.text(quantity);
        //     axios.post('/cart/update', { productId: productId, quantity: quantity })
        //         .then(function (response) {
        //             console.log('Cart updated successfully');
        //         })
        //         .catch(function (error) {
        //             console.error('There was an error updating the cart!', error);
        //         });
        // }
    });


    $('.addToWishlist').click(function () {
        var $card = $(this).closest('[data-id]');
        var productId = $card.data('id');

        alert(`Adding product id:${productId} to wishlist`);

        // axios.post('/wishlist/add', { productId: productId })
        //     .then(function (response) {
        //         $(this).text('Remove from Wishlist').removeClass('addToWishlist').addClass('removeFromWishlist');
        //     })
        //     .catch(function (error) {
        //         console.error('There was an error adding the item to the wishlist!', error);
        //     });
    });

    $(document).on('click', '.removeFromWishlist', function () {
        var $card = $(this).closest('[data-id]');
        var productId = $card.data('id');

        axios.post('/wishlist/remove', { productId: productId })
            .then(function (response) {
                $(this).text('Add to Wishlist').removeClass('removeFromWishlist').addClass('addToWishlist');
            })
            .catch(function (error) {
                console.error('There was an error removing the item from the wishlist!', error);
            });
    });
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