<?php

// app/Http/Controllers/Api/UserController.php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with(['addresses'])->paginate();
        return UserResource::collection($users);
    }

    public function store(UserRequest $request)
    {
        $user = User::create($request->validated());
        return new UserResource($user);
    }

    public function show(User $user)
    {
        return new UserResource($user->load(['addresses', 'orders']));
    }

    public function update(UserRequest $request, User $user)
    {
        $user->update($request->validated());
        return new UserResource($user);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(['message' => 'User deleted successfully']);
    }
}

// app/Http/Controllers/Api/ProductController.php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Resources\ProductResource;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['category', 'brand', 'promotion', 'variations'])
            ->paginate();
        return ProductResource::collection($products);
    }

    public function store(ProductRequest $request)
    {
        $product = Product::create($request->validated());
        
        if ($request->has('variations')) {
            $product->variations()->createMany($request->variations);
        }

        return new ProductResource($product->load(['variations']));
    }

    public function show(Product $product)
    {
        return new ProductResource($product->load([
            'category', 
            'brand', 
            'promotion', 
            'variations'
        ]));
    }

    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->validated());

        if ($request->has('variations')) {
            $product->variations()->delete();
            $product->variations()->createMany($request->variations);
        }

        return new ProductResource($product->load(['variations']));
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(['message' => 'Product deleted successfully']);
    }
}

// app/Http/Controllers/Api/CartController.php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Http\Resources\CartResource;
use App\Http\Requests\CartRequest;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::with(['product'])
            ->where('user_id', Auth::id())
            ->get();
        return CartResource::collection($carts);
    }

    public function store(CartRequest $request)
    {
        $cart = Cart::create([
            'user_id' => Auth::id(),
            'product_id' => $request->product_id,
            'quantity' => $request->quantity
        ]);

        return new CartResource($cart->load('product'));
    }

    public function update(CartRequest $request, Cart $cart)
    {
        $cart->update(['quantity' => $request->quantity]);
        return new CartResource($cart->load('product'));
    }

    public function destroy(Cart $cart)
    {
        $cart->delete();
        return response()->json(['message' => 'Item removed from cart']);
    }

    public function clear()
    {
        Cart::where('user_id', Auth::id())->delete();
        return response()->json(['message' => 'Cart cleared successfully']);
    }
}

// app/Http/Controllers/Api/OrderController.php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Cart;
use App\Http\Resources\OrderResource;
use App\Http\Requests\OrderRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with(['items.product', 'address'])
            ->where('user_id', Auth::id())
            ->paginate();
        return OrderResource::collection($orders);
    }

    public function store(OrderRequest $request)
    {
        try {
            DB::beginTransaction();

            $carts = Cart::with('product')
                ->where('user_id', Auth::id())
                ->get();

            if ($carts->isEmpty()) {
                return response()->json(['message' => 'Cart is empty'], 422);
            }

            $totalAmount = $carts->sum(function ($cart) {
                return $cart->product->price * $cart->quantity;
            });

            $order = Order::create([
                'user_id' => Auth::id(),
                'total_amount' => $totalAmount,
                'address_id' => $request->address_id,
                'coupon' => $request->coupon,
                'note' => $request->note,
                'status' => 'pending'
            ]);

            foreach ($carts as $cart) {
                $order->items()->create([
                    'user_id' => Auth::id(),
                    'product_id' => $cart->product_id,
                    'quantity' => $cart->quantity,
                    'price' => $cart->product->price
                ]);
            }

            Cart::where('user_id', Auth::id())->delete();

            DB::commit();

            return new OrderResource($order->load(['items.product', 'address']));
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Order creation failed'], 500);
        }
    }

    public function show(Order $order)
    {
        if ($order->user_id !== Auth::id()) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        return new OrderResource($order->load(['items.product', 'address', 'transaction']));
    }

    public function cancel(Order $order)
    {
        if ($order->user_id !== Auth::id() || $order->status !== 'pending') {
            return response()->json(['message' => 'Cannot cancel this order'], 422);
        }

        $order->update(['status' => 'cancel']);
        return new OrderResource($order);
    }
}

// app/Http/Controllers/Api/WishlistController.php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use App\Http\Resources\WishlistResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlist = Wishlist::with('product')
            ->where('user_id', Auth::id())
            ->paginate();
        return WishlistResource::collection($wishlist);
    }

    public function store(Request $request)
    {
        $wishlist = Wishlist::firstOrCreate([
            'user_id' => Auth::id(),
            'product_id' => $request->product_id
        ]);

        return new WishlistResource($wishlist->load('product'));
    }

    public function destroy(Wishlist $wishlist)
    {
        $wishlist->delete();
        return response()->json(['message' => 'Item removed from wishlist']);
    }
}

// app/Http/Controllers/Api/ReviewController.php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Http\Resources\ReviewResource;
use App\Http\Requests\ReviewRequest;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::with(['order.user'])
            ->where('status', 'approved')
            ->paginate();
        return ReviewResource::collection($reviews);
    }

    public function store(ReviewRequest $request)
    {
        $review = Review::create($request->validated());
        return new ReviewResource($review->load('order.user'));
    }

    public function approve(Review $review)
    {
        $review->update(['status' => 'approved']);
        return new ReviewResource($review);
    }

    public function reject(Review $review)
    {
        $review->update(['status' => 'rejected']);
        return new ReviewResource($review);
    }
}

// app/Http/Controllers/Api/TransactionController.php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Http\Resources\TransactionResource;
use App\Http\Requests\TransactionRequest;

class TransactionController extends Controller
{
    public function store(TransactionRequest $request)
    {
        $transaction = Transaction::create($request->validated());
        return new TransactionResource($transaction->load('order'));
    }

    public function show(Transaction $transaction)
    {
        return new TransactionResource($transaction->load('order'));
    }

    public function update(TransactionRequest $request, Transaction $transaction)
    {
        $transaction->update($request->validated());
        return new TransactionResource($transaction->load('order'));
    }
}
