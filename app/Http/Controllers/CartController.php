<?php

namespace App\Http\Controllers;

use App\Helpers\ActorHelper;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Models\Cart;
use Illuminate\Notifications\Action;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carts = Cart::with(['product'])
            ->latest()
            ->paginate();
        return $carts;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCartRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = ActorHelper::getUserId();

        $cart = Cart::create($data);
        return $cart;
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
        $data = $request->validated();
        // $data['user_id'] = ActorHelper::getUserId();

        $cart->update($data);
        return $cart;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        $cart->delete();
        return $message = "cart deleted successfully";
    }
}
