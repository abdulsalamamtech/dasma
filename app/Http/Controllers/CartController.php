<?php

namespace App\Http\Controllers;

use App\Helpers\ActorHelper;
use App\Helpers\ApiResponse;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Notifications\Action;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carts = Cart::with(['product.banner'])
            ->latest()
            ->paginate(4);
        // return $carts;
        // $total = $carts->sum()
        // Get cart total quantity * product price
        // $total = Cart::sum(function ($item) {
        //     return $item->quantity * $item->product->price;
        // });

        $total = Cart::with('product')
                            ->get()
                            ->sum(fn($cart) => $cart->quantity * $cart->product->price);
        // $total = Cart::join('products', 'carts.product_id', '=', 'products.id')
        // ->selectRaw('SUM(carts.quantity * products.price) as total')
        // ->value('total');
    
        // return $total;
        return view('dasma.account.carts',[
                'carts' => $carts,
                'total' => $total
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCartRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = ActorHelper::getUserId();

        $cart = Cart::create($data);
        // dd($cart);
        // return ApiResponse::success($cart);
        return ApiResponse::success($cart);
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
        // return redirect()->away('http://localhost:8000?id=' . $cart->id);
        $cart->delete();
        $message = "cart deleted successfully";
        return ApiResponse::success($cart, $message);

    }
}
