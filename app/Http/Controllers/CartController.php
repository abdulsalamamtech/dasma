<?php

namespace App\Http\Controllers;

use App\Helpers\ActorHelper;
use App\Helpers\ApiResponse;
use App\Helpers\Paystack;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Models\Address;
use App\Models\Cart;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Notifications\Action;
use Illuminate\Support\Number;

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
            $message = "product already added to the cart";
            return ApiResponse::success($existingCart, $message);
        }

        // Get the product size and color
        $product = Product::findOrFail($data['product_id']);
        if($product && !$product->size && !$product->color){
            $data['size'] = $product->size ?? null;
            $data['color'] = $product->color ?? null;
        }

        // If the product is not in the cart, create a new cart item
        $cart = Cart::create($data);
        $message = "Product successfully added to cart!";
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
        $cart->delete();
        $message = "Product successfully removed from cart";
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
            'total_cart_items' => request()?->user()?->carts?->count() ?? 0,
            'coupon_message' => ($this->coupon() && trim($this->coupon() ? $this->coupon()?->discount : 0) > 0) ? 'successful!' : 'invalid coupon!',
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

    // Checkout and make payment
    public function checkout(Request $request){

        // Validate request
        $data = $request->validate([
            'note' => ['nullable'],
            'coupon' => ['nullable']
        ]);
        
        // get user cart items, add to order items and make an order
        $user = request()->user();
        $carts = Cart::where('user_id', $user->id)->get();
        // Redirect user to orders page
        if ($carts->count() < 1) {
            return redirect()->route('account.orders.index')->with('error', 'No items on your cart!');
        }


        $cart_details = $this->cartDetails();
        $address = Address::where('user_id', ActorHelper::getUserId())
            ->where('default_address', 'yes')
            ->first();

        // Calculate the entire order product
        $data['user_id'] = $user->id;
        $data['address_id'] = $address?->id;
        $data['total_amount'] = 0;
        $data['total_weight'] = 0;
        $data['total_after_discount'] = $cart_details['total_after_discount'];
        $data['discount'] = $cart_details['discount'];

        $order_items = [];
        foreach ($carts as $cart) {
            $product = Product::findOrFail($cart['product_id']);
            $order_items[] = [
                'user_id' => $user->id,
                'product_id' => $cart['product_id'],
                'quantity' => $cart['quantity'],
                'size' => $cart['size'],
                'color' => $cart['color'],
                'price' => $product->price,
                'total_price' => $product->price * $cart['quantity'],
            ];
            $data['total_amount'] += $product->price * $cart['quantity'];
            $data['total_weight'] += $product->weight * $cart['quantity'];
            info(__FILE__ . " " . __LINE__ . ': deleting cart item: ' .$cart->id);
            $cart->delete();
        }
    
        // return $data;
        // create order
        $order = Order::create($data);

        // return "Cart deleted and order created";

        // Create many order items
        $order->items()->createMany($order_items);
        $order->load(['items']);

        // Get all user addresses
        $addresses = Address::where('user_id', ActorHelper::getUserId())->get();

        // Redirect to add customer info
        return view('dasma.account.customer-info', [
            'order' => $order,
            'addresses' => $addresses
        ]);
        
    }
    
    // continue with New address
    public function useNewAddress(Request $request){
        info('using new address on order');
        $data = $request->validate([
            'order_id' => ['required', 'exists:orders,id'],
            // 'user_id' => ['required', 'string'],
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            // 'other_name' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'street' => ['required', 'string'],
            'city' => ['required', 'string'],
            'state' => ['required', 'string'],
            // 'country' => ['required', 'string'],
            // default_address = yes
            // 'country' => ['required', 'string'],
        ]);
        $data['user_id'] = ActorHelper::getUserId();
        // $data['default_address'] = 'yes';

        // dd($data);

        $address = Address::create($data);
        $orderId = $data['order_id'];

        // Update the order address
        $order = Order::where('user_id', ActorHelper::getUserId())
            ->where('id', $orderId)
            ->first();
        $order->update(['address_id' => $address?->id]);

        // Move to payment
        return $this->paymentMethod($order);

    }
    
    // continue with previous address
    public function usePreviousAddress(Request $request){
        info('using previous address on order');
        $data = $request->validate([
            'address_id' => ['required', 'exists:addresses,id'],
            'order_id' => ['required', 'exists:orders,id'],
        ]);
        $order = Order::where('user_id', ActorHelper::getUserId())
            ->where('id', $data['order_id'])
            ->first();
        $order->update(['address_id' => $data['address_id']]);


        info('This is the order sent to payment method: ', [$order]);
        return $this->paymentMethod($order);

    }

    // Proceed with payment
    public function paymentMethod(Order $order){
        info('proceed to payment');
        info('This is the order received from address: ', [$order]);
        // Check if order exist
        if(!$order || !$order->exists()){
            return redirect()->route('account.carts.index')->with('error', 'order not found, proceed to checkout!');
        }

        // return $order;

        if($order->paid !== 'yes' || $order->status !== 'success'){
            // total payable amount
            $totalPayAmount = ($order?->total_after_discount + $this?->calculateShippingFee($order));
            // Calculate shipping fee
            $order->shipping_fee = $this->calculateShippingFee($order);
            // Get Total payment amount with discount
            $order->total_payable_amount = $totalPayAmount;
            $order->save();
            // Generate payment link
            // return [$totalPayAmount, $order];
            // $paymentLink = 'https://';
            // $num = 678.444;
            // $res[] = round($num, 2);
            // $res[] = sprintf("%.2f", $num);
            // $res[] = ceil($num); 679
            // $res[] = floor($num); 678
            // return $res;

            $payment_data = [
                'name' => $order->address->first_name . ' ' . $order->address->first_name,
                'email' => request()->user()->email,
                'amount' => round($totalPayAmount, 2),
                'payment_id' => $order->id,
                'redirect_url' => URL('account/orders'),
            ];
            $PSP = Paystack::make($payment_data);
            if($PSP['success']){
                // Record The transaction
                // 'user_id',
                // 'order_id',
                // 'amount',
                // 'status',
                // 'reference',
                // 'payment_method',
                // 'data'
                $order->transactions()->create([
                    'user_id' => ActorHelper::getUserId(),
                    'amount' => $totalPayAmount,
                    // 'status',
                    'reference' => $PSP['reference'],
                    'payment_method' => $PSP['gateway'],
                    'data' => json_encode($PSP)
                ]);

                // Payment link
                $payment_link = $PSP['authorization_url'];

                // Make Payment To PayStack
                return view('dasma.account.payment-method', [
                    'order' => $order,
                    'payment_link' =>$payment_link,
                ])->with('success', 'Order created, please make payment to validate your order!');
            }else{
                info('payment initialization error: ' . $PSP['message']);
                return redirect()->route('account.carts.checkout')->with('error', 'Error: unable to initialize payment process!!');
            }


        }else{

            return redirect()->route('admin.orders.show', $order->id)
                ->with('success', 'Order processed!');
        }

    }


    // Calculate shipping fees
    public function calculateShippingFee($order){
        $fee = 570.90;
        // $cost = $order->weight * $order->items->sum('quantity');
        // $cost = $fee * $order->items->sum('product.weight') * $order->items->sum('quantity');
        $cost = $fee * $order->total_weight;
        // return $order->items;
        return round($cost, 2);
    }
}
