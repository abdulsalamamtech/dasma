<?php

namespace App\Http\Controllers;

use App\Helpers\ActorHelper;
use App\Helpers\Paystack;
use App\Models\Address;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = ActorHelper::getUserId();
        $data = [
            'transactions' => [
                'total' => request()->user()->transactions->count(),
                'amount' => Transaction::where('user_id', $userId)->sum('amount'),
            ],
            'carts' => [
                'total' => Cart::where('user_id', $userId)->count(),
            ],
            'wishlists' => [
                'total' => Wishlist::where('user_id', $userId)->count(),
            ],
            'orders' => [
                'total' => Order::where('user_id', $userId)->count(),
            ]
        ];
        // return $data;
        return view('dasma.account.dashboard', [
            'data' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    /**
     * Display a listing of the user order.
     */
    public function orders(Request $request)
    {

        // http://127.0.0.1:8000/events/8?trxref=soq9s7fxmf&reference=soq9s7fxmf
        // Verify payment transaction
        if ($request?->filled('trxref') || $request?->filled('reference')) {
            $reference = $request->reference;
            $PSP = Paystack::verify($reference);
            $message = $PSP['message'];
            if ($PSP['success']) {
                $transaction = Transaction::where('reference', $reference)->first();
                if ($transaction) {
                    $transaction->status = 'successful';
                    $transaction->save();

                    // update order
                    $order = Order::where('id', $transaction->order_id)->first();
                    $order->paid = 'yes';
                    if ($order->status == 'pending') {
                        $order->status = 'confirmed';
                        // Decrement available stock from order items
                        info('START: decrement available stock from order');
                        defer($this->decrementAvailableStockFromOrder($order), 'decrement available stock');
                        info('END: decrement available stock');
                    }
                    $order->save();

                    // return $order;
                }
            }
        }

        // $orders = Order::where('user_id', ActorHelper::getUserId())->get();
        $orders = Order::with('items')
            ->where('user_id', ActorHelper::getUserId())
            ->latest()
            ->paginate(10);

        $order_items = OrderItems::with(['order', 'product.banner'])
            ->where('user_id', ActorHelper::getUserId())
            ->latest()
            ->paginate(10);

        return view('dasma.account.orders', [
            'orders' => $orders,
            'order_items' => $order_items
        ]);
    }

    /**
     * Display a listing of the user order items.
     */
    public function orderItems(Request $request)
    {

        // http://127.0.0.1:8000/events/8?trxref=soq9s7fxmf&reference=soq9s7fxmf
        // Verify payment transaction
        if ($request?->filled('trxref') || $request?->filled('reference')) {
            $reference = $request->reference;
            $PSP = Paystack::verify($reference);
            $message = $PSP['message'];
            if ($PSP['success']) {
                $transaction = Transaction::where('reference', $reference)->first();
                if ($transaction) {
                    $transaction->status = 'successful';
                    $transaction->save();

                    // update order
                    $order = Order::where('id', $transaction->order_id)->first();
                    $order->paid = 'yes';
                    if ($order->status == 'pending') {
                        $order->status = 'confirmed';
                        // Decrement available stock from order items
                        info('START: decrement available stock from order');
                        defer($this->decrementAvailableStockFromOrder($order), 'decrement available stock');
                        info('END: decrement available stock');
                    }
                    $order->save();

                    // return $order;
                }
            }
        }

        $order_items = OrderItems::with(['order', 'product.banner'])
            ->where('user_id', ActorHelper::getUserId())
            ->latest()
            ->paginate(10);

        return view('dasma.account.order-items', [
            'order_items' => $order_items
        ]);
    }


    /**
     * Display a listing of items ordered.
     */
    public function showOrderItems(Order $order)
    {
        $order_items = OrderItems::with(['order', 'product.banner'])
            ->where('order_id', $order->id)
            // ->where('user_id', ActorHelper::getUserId())
            ->latest()
            ->paginate();

        return view('dasma.account.order-items', [
            'order_items' => $order_items
        ]);
    }


    // Decrement available stock from order items by passing the order
    public function decrementAvailableStockFromOrder($order)
    {
        $order_items = OrderItems::where('order_id', $order->id)->get();
        foreach ($order_items as $item) {
            $product = Product::find($item->product_id);
            if ($product) {
                info('Decrementing available stock for product: ' . $product->id);
                info('Available stock before decrement: ' . $product->stock);
                info('Decrementing by: ' . $item->quantity);
                // Decrement the available stock
                if ($product->stock < $item->quantity) {
                    info('Not enough available stock for product: ' . $product->id);
                    // Handle the case where there is not enough stock
                    // You can choose to throw an exception or log an error
                } else {
                    // Decrement the available stock
                    info('Available stock after decrement: ' . ($product->stock - $item->quantity));
                    info('Decrementing available stock for product: ' . $product->id);
                    info('Available stock before decrement: ' . $product->stock);
                    $product->stock -= $item->quantity;
                    $product->save();
                }
            }
        }
        info('END: decrement available stock', [$order]);

    }

    // Settings for user account
    public function settings(){
        $addresses = Address::where('user_id', ActorHelper::getUserId())
            ->latest()
            ->paginate(10);

        return view('dasma.account.settings', [
            'addresses' => $addresses,
        ]);
    }
}
