<?php

namespace App\Http\Controllers;

use App\Helpers\ActorHelper;
use App\Helpers\ApiResponse;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Models\Cart;
use App\Models\Coupon;
use App\Models\Product;
use Illuminate\Notifications\Action;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userID = ActorHelper::getUserId();
        $carts = Cart::where('user_id', $userID)
            ->with(['product.banner'])
            ->latest()
            ->paginate(10);

        $total = Cart::where('user_id', $userID)
            ->with('product')
            ->get()
            ->sum(fn($cart) => $cart->quantity * $cart->product->price);

        $data = [
            'carts' => $carts,
            'total' => $total,
            'details' => $this->cartDetails(),
        ];
        // return dd($data);
        return view('dasma.account.carts', $data);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCartRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = ActorHelper::getUserId();

        // Check if the product is already in the cart
        $existingCart = Cart::where('user_id', $data['user_id'])
            ->where('product_id', $data['product_id'])
            ->first();
        if ($existingCart) {
            // If the product is already in the cart, update the quantity
            // $existingCart->increment('quantity', $data['quantity']);
            $message = "product already added to the cart";
            return ApiResponse::success($existingCart, $message);
        }

        // Get the product size and color
        $product = Product::findOrFail($data['product_id']);
        if($product){
            $data['size'] = $product->size ?? null;
            $data['color'] = $product->color ?? null;
        }

        // If the product is not in the cart, create a new cart item
        $cart = Cart::create($data);
        $message = "product added to the cart successfully";
        // return $cart;
        return ApiResponse::success($cart, $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        $cart->load(['product']);
        return $cart;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCartRequest $request, Cart $cart)
    {
        // validated data
        $data = $request->validated();
        $userId = ActorHelper::getUserId();
        // check if user is owner of cart
        if($cart->user_id !== $userId){
            return ApiResponse::error([], 'permission denied', 403);
        }
        // update data
        $cart->update($data);
        // return $cart;
        return ApiResponse::success($cart);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        // get login user
        $userId = ActorHelper::getUserId();
        // check if user is owner of cart
        if($cart->user_id !== $userId){
            return ApiResponse::error([], 'permission denied', 403);
        }
        // $cart->delete();
        $message = "cart deleted successfully";
        return ApiResponse::success([], $message);

    }

    /**
     * Display cart details.
     */
    public function cartDetails()
    {
        // Get the user ID from the ActorHelper
        $userID = ActorHelper::getUserId();
        // Total price of the cart
        $total = Cart::where('user_id', $userID)
            ->with('product')
            ->get()
            ->sum(fn($cart) => $cart->quantity * $cart->product->price);

        $data = [
            'total' => $total,
            'coupon' => request('coupon'),
            'min_order_amount' => trim($this->coupon() && $total >= $this->coupon()?->min_order_amount  ? $this->coupon()?->min_order_amount : 100000),
            'discount' => trim($this->coupon() ? $this->coupon()?->discount : 0),
            // Calculate the total after applying the coupon discount
            'total_after_discount' => trim($this->coupon() && $total >= $this->coupon()?->min_order_amount ? ($total - ($this->coupon()?->discount)) : $total),
        ];
        // dd($data);
        return $data;
    }

    /**
     * Display coupon.
     */
    public function coupon()
    {
        // check if the coupon is valid
        $coupon = request('coupon');
        $validCoupons  = Coupon::where('code', $coupon)
            ->where('expires', '>=', now())
            ->first();
        return $validCoupons ?? null;
    }


    /**
     * Display cart card details.
     */
    public function cartCardDetails(){
        $cardDetails = $this->cartDetails();
        return ApiResponse::success($cardDetails);
    }
}
