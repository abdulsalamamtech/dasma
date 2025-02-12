$(document).ready(function () {
    $('.addToCart').click(function () {
        var $card = $(this).closest('[data-id]');
        var productId = $card.data('id');
        var quantity = 1;

        axios.post('/cart/add', { productId: productId, quantity: quantity })
            .then(function (response) {
                $card.find('.addToCart').hide();
                $card.find('.cartControls').show();
            })
            .catch(function (error) {
                console.error('There was an error adding the item to the cart!', error);
            });
    });

    $('.increment').click(function () {
        var $card = $(this).closest('[data-id]');
        var productId = $card.data('id');
        var $quantity = $card.find('.quantity');
        var quantity = parseInt($quantity.text()) + 1;

        $quantity.text(quantity);
        axios.post('/cart/update', { productId: productId, quantity: quantity })
            .then(function (response) {
                console.log('Cart updated successfully');
            })
            .catch(function (error) {
                console.error('There was an error updating the cart!', error);
            });
    });

    $('.decrement').click(function () {
        var $card = $(this).closest('[data-id]');
        var productId = $card.data('id');
        var $quantity = $card.find('.quantity');
        var quantity = parseInt($quantity.text());

        if (quantity > 1) {
            quantity--;
            $quantity.text(quantity);
            axios.post('/cart/update', { productId: productId, quantity: quantity })
                .then(function (response) {
                    console.log('Cart updated successfully');
                })
                .catch(function (error) {
                    console.error('There was an error updating the cart!', error);
                });
        }
    });

    $('.removeFromCart').click(function () {
        var $card = $(this).closest('[data-id]');
        var productId = $card.data('id');

        axios.post('/cart/remove', { productId: productId })
            .then(function (response) {
                $card.find('.addToCart').show();
                $card.find('.cartControls').hide();
                $card.find('.quantity').text(1);
            })
            .catch(function (error) {
                console.error('There was an error removing the item from the cart!', error);
            });
    });

    $('.addToWishlist').click(function () {
        var $card = $(this).closest('[data-id]');
        var productId = $card.data('id');

        axios.post('/wishlist/add', { productId: productId })
            .then(function (response) {
                $(this).text('Remove from Wishlist').removeClass('addToWishlist').addClass('removeFromWishlist');
            })
            .catch(function (error) {
                console.error('There was an error adding the item to the wishlist!', error);
            });
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