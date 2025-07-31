// alert("This is a test alert!");

// There is Alertify JS implementation on this file
$(document).ready(function () {
    // Add Axios response interceptor
    axios.interceptors.response.use(
        function (response) {
            // If the response is successful, just return it
            return response;
        },
        function (error) {
            // Check if the error response status is 401
            if (error.response && error.response.status === 401) {
                console.log("Unauthorized! Redirecting to login...");
                // Redirect to the login page
                window.location.href = "/login";
            }
            // Return the error to be handled by the specific API call
            return Promise.reject(error);
        }
    );

    // For testing purpose
    // alertify.success('document is ready', 'Good!');
    console.log(
        "Document is ready: ",
        new Date().toLocaleString(),
        window.location.href
    );

    // Get CSRF Token
    function XCSRFTOKEN() {
        let XCSRFTOKEN = $('meta[name="csrf-token"]').attr("content");
        // alert(XCSRFTOKEN);
    }

    // Populate the cart card
    function populateCartCard() {
        // alert("Populate cart card");

        let inputCouponCode = $("#inputCouponCode");
        let couponCode = inputCouponCode.val();
        let cartTotal = $("#cartTotal");
        let cartDiscount = $("#cartDiscount");
        let cartTotalPurchasePrice = $("#cartTotalPurchasePrice");

        let url = routes.updateCartCardDetails + `?coupon=${couponCode}`;
        console.log("Populate cart url", url);
        axios
            .get(url, [], headers)
            .then(function (response) {
                console.log(response.data);
                // Update cart count in header this should come from the response
                // Check response status
                if (response?.data?.success) {
                    // Update cart count in header
                    // alert('Item added to cart successfully!');
                    // alertify.success(response?.data?.message, 'successful!');
                    console.log(response?.data?.message, "successful!");

                    // $("#productList").load(location.href+" #productList");
                    if (window.location.hash == "") {
                        window.location = window.location + "#productList";
                    }

                    // populate cart card with database values
                    cartTotalPurchasePrice.text(
                        response?.data?.data?.total_after_discount
                    );
                    cartTotal.text(response?.data?.data?.total);
                    cartDiscount.text(response?.data?.data?.discount);
                    if (couponCode != "") {
                        inputCouponCode.val(response?.data?.data?.coupon);
                        $("#couponCodeStatus").text(
                            `Coupon code applied: ${response?.data?.data?.coupon_message}`
                        );
                    }

                    // total_cart_items
                    $("#totalCartItems").text(
                        response?.data?.data?.total_cart_items
                    );

                    // Cart updated
                    console.log("cart updated");
                } else {
                    // alert('Failed to remove item from cart!');
                    // alertify.error(response?.data?.message || 'There was an error', 'successful!');
                    console.log(
                        response?.data?.message || "There was an error",
                        "successful!"
                    );
                }
            })
            .catch(function (error) {
                console.log(error);
                // alertify.error(error.message ?? 'There was an error!', 'successful!');
                console.error(
                    "There was an error populating cart card details!",
                    error.message
                );
            });
    }

    // Set Api Headers
    const headers = {
        "Content-Type": "application/json",
        "X-CSRF-TOKEN": XCSRFTOKEN(),
    };

    // App routes
    const routes = {
        addToWishlist: "/account/wishlists",
        removeFromWishlist: "/account/wishlists",
        addToCart: "/account/carts",
        updateCart: "/account/carts",
        removeFromCart: "/account/carts",
        updateCartCardDetails: "/account/cart-card-details",
    };

    // Apply Coupon Code
    $(document).on("click", "#applyCoupon", function () {
        console.log("Applying coupon code");
        // Apply coupon and update cart card
        populateCartCard();
    });

    // Add item to cart from product listing page
    // $('.addToCart').click(function () {
    $(document).on("click", ".addToCart", function () {
        var $card = $(this).closest("[data-id]");
        var productId = $card.data("id");
        let quantity = 1;
        let data = {
            product_id: productId,
            quantity: quantity,
        };
        console.log(data);

        let url = routes.addToCart;
        console.log("Add cart url", url);
        axios
            .post(url, data, headers)
            .then(function (response) {
                console.log(response);
                // Check response status
                if (response?.data?.success) {
                    if (window.location.hash == "") {
                        window.location = window.location + "#productList";
                    }
                    // Notify the user
                    alertify.success(response?.data?.message, "successful!");
                    // Remove the class name and replace it with the new class name
                    // $card.find('.removeFromCart').addClass('addToCart').removeClass('removeFromCart');
                    // $card.find('.addToCart').addClass('removeFromCart').removeClass('addToCart');
                    let NewContent = `<div  data-cart-id="${response?.data?.data?.id}" data-product-id="${productId}"
                                        class="removeFromCart mr-3 flex items-center rounded-full bg-primary px-3 py-3 transition-all hover:bg-white">
                                        <img src="/assets/img/icons/icon-cart.svg" class="h-6 w-6" alt="icon cart" />
                                    </div>`;
                    $card.find("#productRemoveAndAddToCart").html(NewContent);

                    // update total cart items
                    populateCartCard();
                } else {
                    // alert('Failed to remove item from cart!');
                    alertify.error(
                        response?.data?.message || "There was an error",
                        "successful!"
                    );
                }
            })
            .catch(function (error) {
                console.log(error);
                console.error(
                    "There was an error adding the item to the cart!",
                    error.message
                );
                // Notify the user
                alertify.error(
                    error.message ?? "There was an error!",
                    "successful!"
                );
            });
    });

    // Remove item from cart
    // $('.removeFromCart').click(function () {
    $(document).on("click", ".removeFromCart", function () {
        var $card = $(this).closest("[data-id]");

        // Get the cartId and productId from the clicked element
        let cartId = $(this).data("cart-id");
        let productId = $(this).data("product-id");

        console.log("Cart ID:", cartId);
        console.log("Product ID 1:", productId);
        console.log($card);
        console.log(
            `Removing cart id ${cartId} and product id ${productId} from cart`
        );

        let url = routes.removeFromCart + `/${cartId}`;
        console.log("Remove cart url", url);
        axios
            .delete(url, [], headers)
            .then(function (response) {
                console.log(response);
                // Check response status
                if (response?.data?.success) {
                    // Update cart count in header
                    if (window.location.hash == "") {
                        window.location = window.location + "#productList";
                    }
                    // Notify the user
                    alertify.success(response?.data?.message, "successful!");

                    // Remove the class name and replace it with the new class name
                    $card
                        .find(".removeFromCart")
                        .addClass("addToCart")
                        .removeClass("removeFromCart");
                    // $card.find('.addToCart').addClass('removeFromCart').removeClass('addToCart');

                    console.log($card.find(".removeFromCart"));

                    // update total cart items
                    populateCartCard();
                } else {
                    // Notify the user
                    alertify.error(
                        response?.data?.message || "There was an error",
                        "successful!"
                    );
                }
            })
            .catch(function (error) {
                console.log(error);
                console.error(
                    "There was an error adding the item to the cart!",
                    error.message
                );
                // Notify the user
                alertify.error(
                    error.message ?? "There was an error!",
                    "successful!"
                );
            });
    });

    // Remove item from cart page
    // $('.removeFromCartPage').click(function () {
    $(document).on("click", ".removeFromCartPage", function () {
        var $card = $(this).closest("[data-id]");
        var cartId = $card.data("id");

        let url = routes.removeFromCart + `/${cartId}`;
        console.log("Remove cart url", url);

        axios
            .delete(url, [], headers)
            .then(function (response) {
                console.log(response);
                if (response?.data?.success) {
                    // Remove the cart item from the DOM
                    $card.remove();

                    // Notify the user
                    alertify.success(response?.data?.message, "successful!");

                    // Update the cart summary
                    // Call the function to recalculate the cart summary
                    populateCartCard();
                } else {
                    alertify.error(
                        response?.data?.message || "There was an error",
                        "successful!"
                    );
                }
            })
            .catch(function (error) {
                console.log(error);
                alertify.error(
                    error.message ?? "There was an error!",
                    "successful!"
                );
                console.error(
                    "There was an error removing the item from the cart!",
                    error.message
                );
            });
    });

    // Increment cart quantity
    // $('.increment').click(function () {
    $(document).on("click", ".increment", function () {
        var $card = $(this).closest("[data-id]");
        var cartId = $card.data("id");
        var $quantity = $card.find(".quantity");
        var quantity = parseInt($quantity[0]?.value) || 1;

        console.log($card);
        console.log(cartId);
        console.log($quantity);
        console.log(quantity);

        let data = {
            quantity: quantity,
        };
        console.log("cart data", data);
        let url = routes.updateCart + `/${cartId}`;
        console.log("cart url", url);

        axios
            .put(url, data, headers)
            .then(function (response) {
                console.log(response.data);
                // Update cart count in header this should come from the response
                // Check response status
                if (response?.data?.success) {
                    // Update cart count in header
                    // alert('Item added to cart successfully!');
                    alertify.success(
                        "Increment is " + response?.data?.message,
                        "successful!"
                    );
                    // $("#productList").load(location.href+" #productList");
                    if (window.location.hash == "") {
                        window.location = window.location + "#productList";
                    }

                    // Update cart card details
                    populateCartCard();

                    // Remove the class name and replace it with the new class name
                    // addToCart to removeFromCart
                } else {
                    // alert('Failed to remove item from cart!');
                    alertify.error(
                        response?.data?.message || "There was an error",
                        "successful!"
                    );
                }
            })
            .catch(function (error) {
                console.log(error);
                alertify.error(
                    error.message ?? "There was an error!",
                    "successful!"
                );
                console.error(
                    "There was an error adding the item to the cart!",
                    error.message
                );
            });
    });

    // Decrement cart quantity
    // $('.decrement').click(function () {
    $(document).on("click", ".decrement", function () {
        var $card = $(this).closest("[data-id]");
        var cartId = $card.data("id");
        var $quantity = $card.find(".quantity");
        var quantity = parseInt($quantity[0]?.value) || 1;

        // the quantity should be greater than 1
        if (quantity <= 1) {
            alertify.error("Quantity cannot be less than 1", "successful!");
            return;
        }

        console.log($card);
        console.log(cartId);
        console.log($quantity);
        console.log(quantity);

        let data = {
            // product_id: productId,
            quantity: quantity,
        };
        console.log("cart data", data);
        let url = routes.updateCart + `/${cartId}`;
        console.log("cart url", url);

        axios
            .put(url, data, headers)
            .then(function (response) {
                console.log(response.data);
                // Update cart count in header this should come from the response
                // Check response status
                if (response?.data?.success) {
                    // Update cart count in header
                    // alert('Item added to cart successfully!');
                    alertify.success(
                        "Decrement is " + response?.data?.message,
                        "successful!"
                    );
                    // $("#productList").load(location.href+" #productList");
                    if (window.location.hash == "") {
                        window.location = window.location + "#productList";
                    }

                    // Update cart card details
                    populateCartCard();

                    // Remove the class name and replace it with the new class name
                    // addToCart to removeFromCart
                } else {
                    // alert('Failed to remove item from cart!');
                    alertify.error(
                        response?.data?.message || "There was an error",
                        "successful!"
                    );
                }
            })
            .catch(function (error) {
                console.log(error);
                alertify.error(
                    error.message ?? "There was an error!",
                    "successful!"
                );
                console.error(
                    "There was an error adding the item to the cart!",
                    error.message
                );
            });
    });

    // Add to wishlist from product list page
    // $('.addToWishlist').click(function () {
    $(document).on("click", ".addToWishlist", function () {
        var $card = $(this).closest("[data-id]");
        var productId = $card.data("id");
        // alert(`Adding product id:${productId} to wishlist`);

        let data = {
            product_id: productId,
        };
        console.log("Wishlist data", data);

        let url = routes.addToWishlist;
        axios
            .post(url, data, headers)
            .then(function (response) {
                console.log(response.data);
                // Update cart count in header this should come from the response
                // Check response status
                if (response?.data?.success) {
                    // Update cart count in header
                    // alert('Item added to cart successfully!');
                    alertify.success(response?.data?.message, "successful!");
                    // $("#productList").load(location.href+" #productList");
                    if (window.location.hash == "") {
                        window.location = window.location + "#productList";
                    }

                    // Remove the class name and replace it with the new class name
                    // addToCart to removeFromCart
                } else {
                    // alert('Failed to remove item from cart!');
                    alertify.error(
                        response?.data?.message || "There was an error",
                        "successful!"
                    );
                }
            })
            .catch(function (error) {
                console.log(error);
                alertify.error(
                    error.message ?? "There was an error!",
                    "successful!"
                );
                console.error(
                    "There was an error adding the item to the wishlist!",
                    error.message
                );
            });
    });

    // Remove item from wishlist page
    // $('.removeFromWishlist').click(function () {
    $(document).on("click", ".removeFromWishlist", function () {
        var $card = $(this).closest("[data-id]");
        var productId = $card.data("id");
        var wishlistId = $card.data("wishlistId");

        console.log($card.data());
        console.log($card.data("id"));
        console.log($card.data("wishlistId"));

        let data = {
            product_id: productId,
            wishlist_id: wishlistId,
        };

        let url = routes.removeFromWishlist + `/${wishlistId}`;
        console.log("Remove wishlist url", url);
        axios
            .delete(url, [], headers)
            .then(function (response) {
                console.log(response.data);
                // Update cart count in header this should come from the response
                // Check response status
                if (response?.data?.success) {
                    // Update cart count in header
                    // alert('Item added to cart successfully!');
                    alertify.success(response?.data?.message, "successful!");
                    // $("#productList").load(location.href+" #productList");
                    if (window.location.hash == "") {
                        window.location = window.location + "#productList";
                    }

                    // Remove the cart details
                    // $card.hide();
                    $card.remove();
                } else {
                    // alert('Failed to remove item from cart!');
                    alertify.error(
                        response?.data?.message || "There was an error",
                        "successful!"
                    );
                }
            })
            .catch(function (error) {
                console.log(error);
                alertify.error(
                    error.message ?? "There was an error!",
                    "successful!"
                );
                console.error(
                    "There was an error deleting wishlist!",
                    error.message
                );
            });
    });

    // Add item to cart from product page with color and quantity
    // $('.addToCartFromProduct').click(function () {
    $(document).on("click", ".addToCartFromProduct", function () {
        var $card = $(this).closest("[data-id]");
        console.log($card);

        var productId = $card.data("id");
        // alert(productId);
        let data = {
            product_id: productId,
            quantity: $("#quantity-form").val(),
            size: $("#productSize").val(),
            color: $("#selectedColor").val(),
        };
        console.log(data);

        let url = routes.addToCart;
        console.log("Add product to cart url", url);
        // return;
        axios
            .post(url, data, headers)
            .then(function (response) {
                console.log(response);
                // Check response status
                if (response?.data?.success) {
                    if (window.location.hash == "") {
                        window.location = window.location + "#productList";
                    }
                    // Notify the user
                    alertify.success(response?.data?.message, "successful!");

                    // update total cart items
                    populateCartCard();

                    // Change the content of product action div
                    // let NewContent = `<input type="hidden" id="cartId" value="{{ $product?->cartItem()?->id }}">
                    //     <input id="productId" type="hidden" name="productId" value="{{ $product->id }}">
                    //     <div id="updateCartFromProduct" class="updateCartFromProduct btn btn-primary py-4">
                    //       <span>Update Cart</span>
                    //     </div>`;
                    let NewContent = `<div>
                            <input type="hidden" id="cartId" value="${response?.data?.data?.id}">
                            <input id="productId" type="hidden" name="productId" value="${productId}">
                            <div id="updateCartFromProduct" class="updateCartFromProduct btn btn-primary py-4 cursor-pointer">
                                <span>Update Cart</span>
                            </div>
                        </div>`;
                    $card.find("#productAction").html(NewContent);
                    let data = {
                        quantity: $("#quantity-form").val(),
                        size: $("#productSize").val(),
                        color: $("#selectedColor").val(),
                        selected_color: $("#selectedColor").val(),
                    };
                    console.log(data);
                } else {
                    // alert('Failed to remove item from cart!');
                    alertify.error(
                        response?.data?.message || "There was an error",
                        "successful!"
                    );
                }
            })
            .catch(function (error) {
                console.log(error);
                console.error(
                    "There was an error adding the item to the cart!",
                    error.message
                );
                // Notify the user
                alertify.error(
                    error.message ?? "There was an error!",
                    "successful!"
                );
            });
    });

    // addToCartAndBuyNowFromProduct
    $(document).on("click", ".addToCartAndBuyNowFromProduct", function () {
        var $card = $(this).closest("[data-id]");
        console.log($card);

        var productId = $card.data("id");
        // alert(productId);
        let data = {
            product_id: productId,
            quantity: $("#quantity-form").val(),
            size: $("#productSize").val(),
            color: $("#selectedColor").val(),
        };
        console.log(data);

        let url = routes.addToCart;
        console.log("Add product to cart url", url);
        // return;
        axios
            .post(url, data, headers)
            .then(function (response) {
                console.log(response);
                // Check response status
                if (response?.data?.success) {
                    if (window.location.hash == "") {
                        window.location = window.location + "#productList";
                    }
                    // Notify the user
                    alertify.success(response?.data?.message, "successful!");

                    // update total cart items
                    populateCartCard();

                    // Change the content of product action div
                    // let NewContent = `<input type="hidden" id="cartId" value="{{ $product?->cartItem()?->id }}">
                    //     <input id="productId" type="hidden" name="productId" value="{{ $product->id }}">
                    //     <div id="updateCartFromProduct" class="updateCartFromProduct btn btn-primary py-4">
                    //       <span>Update Cart</span>
                    //     </div>`;
                    let NewContent = `<div>
                            <input type="hidden" id="cartId" value="${response?.data?.data?.id}">
                            <input id="productId" type="hidden" name="productId" value="${productId}">
                            <div id="updateCartFromProduct" class="updateCartFromProduct btn btn-primary py-4 cursor-pointer">
                                <span>Update Cart</span>
                            </div>
                        </div>`;
                    $card.find("#productAction").html(NewContent);
                    let data = {
                        quantity: $("#quantity-form").val(),
                        size: $("#productSize").val(),
                        color: $("#selectedColor").val(),
                        selected_color: $("#selectedColor").val(),
                    };
                    console.log(data);


                    //  window.location.href = "/account/carts";
                    console.log("going to /account/carts");
                    // run function after 2 sec
                    setTimeout(() => {
                        window.location.href = "/account/carts";
                        console.log("going to /account/carts");
                    }, 200);


                } else {
                    // alert('Failed to remove item from cart!');
                    alertify.error(
                        response?.data?.message || "There was an error",
                        "successful!"
                    );
                }
            })
            .catch(function (error) {
                console.log(error);
                console.error(
                    "There was an error adding the item to the cart!",
                    error.message
                );
                // Notify the user
                alertify.error(
                    error.message ?? "There was an error!",
                    "successful!"
                );
            });
    });

    // Update cart item from product page with color and quantity
    // https://domain.com/stores/{productId}
    // $('.updateCartFromProduct').click(function () {
    // Delegate the click event to dynamically added elements
    $(document).on("click", ".updateCartFromProduct", function () {
        // alert("Update cart from product page");
        let data = {
            quantity: $("#quantity-form").val(),
            size: $("#productSize").val(),
            color: $("#selectedColor").val(),
            selected_color: $("#selectedColor").val(),
        };
        console.log(data);
        let cartId = $("#cartId").val();
        let url = routes.updateCart + `/${cartId}`;
        console.log("Update cart url", url);
        axios
            .put(url, data, headers)
            .then(function (response) {
                console.log(response);
                // Check response status
                if (response?.data?.success) {
                    if (window.location.hash == "") {
                        window.location = window.location + "#productList";
                    }
                    // Notify the user
                    alertify.success(
                        "Cart updated " + response?.data?.message,
                        "successful!"
                    );


                    // update total cart items
                    populateCartCard();

                } else {
                    // alert('Failed to remove item from cart!');
                    alertify.error(
                        response?.data?.message || "There was an error",
                        "successful!"
                    );
                }
            })
            .catch(function (error) {
                console.log(error);
                console.error(
                    "There was an error updating the cart!",
                    error.message
                );
                // Notify the user
                alertify.error(
                    error.message ?? "There was an error!",
                    "successful!"
                );
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
