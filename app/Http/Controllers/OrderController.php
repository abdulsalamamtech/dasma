<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Promotion;
use App\Models\Transaction;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::with(['user', 'address', 'items'])
            ->withCount('items')
            ->latest()
            ->paginate();
        // return $products;
        return view('dashboard.pages.orders.index', [
            'orders' => $orders,
            'products' => $orders,
            'brands' => Brand::latest()->get(),
            'categories' => Category::latest()->get(),
            'promotions' => Promotion::latest()->get(),
        ]);

    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        $order->load(['user', 'address', 'items'])
            ->load('items')
            ->loadCount('items');

        $transactions = Transaction::where('order_id', $order->id)->latest()->paginate();

        // return $order;
        return view('dashboard.pages.orders.show', [
            'order' => $order,
            'transactions' => $transactions
        ]);
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        $data = $request->validated();

        try {
            //code...
    
            // Store the resource
            $order->update($data);
            info('Product updated successfully: ', [$order]);
    
            // return $product; 
            $message = "order status updated successfully!";
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            //throw $th;
            Log::error("exception thrown", [$th->getMessage()]);
            return redirect()->back()->with('error', $th->getMessage());
        }
    }


}
