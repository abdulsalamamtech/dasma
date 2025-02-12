$(document).ready(function () {
    var quantity = 1;

    $('#addToCart').click(function () {
        axios.post('/cart/add', { productId: 1, quantity: quantity })
            .then(function (response) {
                $('#addToCart').hide();
                $('#cartControls').show();
            })
            .catch(function (error) {
                console.error('There was an error adding the item to the cart!', error);
            });
    });

    $('#increment').click(function () {
        quantity++;
        $('#quantity').text(quantity);
        axios.post('/cart/update', { productId: 1, quantity: quantity })
            .then(function (response) {
                console.log('Cart updated successfully');
            })
            .catch(function (error) {
                console.error('There was an error updating the cart!', error);
            });
    });

    $('#decrement').click(function () {
        if (quantity > 1) {
            quantity--;
            $('#quantity').text(quantity);
            axios.post('/cart/update', { productId: 1, quantity: quantity })
                .then(function (response) {
                    console.log('Cart updated successfully');
                })
                .catch(function (error) {
                    console.error('There was an error updating the cart!', error);
                });
        }
    });

    $('#removeFromCart').click(function () {
        axios.post('/cart/remove', { productId: 1 })
            .then(function (response) {
                $('#addToCart').show();
                $('#cartControls').hide();
                quantity = 1;
                $('#quantity').text(quantity);
            })
            .catch(function (error) {
                console.error('There was an error removing the item from the cart!', error);
            });
    });

    $('#addToWishlist').click(function () {
        axios.post('/wishlist/add', { productId: 1 })
            .then(function (response) {
                $('#addToWishlist').text('Remove from Wishlist').attr('id', 'removeFromWishlist');
            })
            .catch(function (error) {
                console.error('There was an error adding the item to the wishlist!', error);
            });
    });

    $(document).on('click', '#removeFromWishlist', function () {
        axios.post('/wishlist/remove', { productId: 1 })
            .then(function (response) {
                $('#removeFromWishlist').text('Add to Wishlist').attr('id', 'addToWishlist');
            })
            .catch(function (error) {
                console.error('There was an error removing the item from the wishlist!', error);
            });
    });
});