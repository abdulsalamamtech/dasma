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

        // 'user_id',
        // 'total_amount',
        // 'coupon',
        // 'note',
        // 'status',
        // 'address_id'
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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

        // return $order;
        return view('dashboard.pages.orders.show', [
            'order' => $order
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
