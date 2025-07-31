<?php

namespace App\Http\Controllers;

use App\Helpers\ActorHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Address;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Order;
use App\Models\Promotion;
use App\Models\Transaction;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    /**
     * [Admin] Display a listing of the resource.
     */
    public function index()
    {
        if (request()->filled('status') 
        && in_array(request()->input('status'), $this->availableStatus())) {
            $orders = $this->filterByStatus();
        }else if (request()->filled('search') ){
            $search = request()->input('search');
            $orders = $this->search($search);
        }else{
            $orders = Order::with(['user', 'address', 'items'])
                ->withCount('items')
                ->latest()
                ->paginate();
        }
        // return $orders;
        return view('dashboard.pages.orders.index', [
            'orders' => $orders,
            // 'products' => $orders,
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
            // Check if the order status is confirmed and the update status is pending
            if ($order->status == 'confirmed' && $data['status'] == 'pending') {
                return redirect()->back()->with('error', 'You cannot change the order status to pending, customer has already paid');
            }
            // Check if the order status is pending and the update status is confirmed
            if ($order->status == 'pending' && $data['status'] == 'confirmed') {
                return redirect()->back()->with('error', 'You cannot change the order status to confirmed, customer has not paid yet');
            }
    
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

    // Proceed to checkout page after placing unpaid order
    public function proceedToCheckout(Order $order){
        // Get all user addresses
        $addresses = Address::where('user_id', ActorHelper::getUserId())->get();

        // Redirect to add customer info
        return view('dasma.account.customer-info', [
            'order' => $order,
            'addresses' => $addresses
        ]);
    }

    // available order status
    public function availableStatus(){
        return [
                'pending',
                'confirmed',
                'processing',
                'shipped',
                'cancel',
                'received',
                'rejected',
                'returned',
                'refunded'
        ];
    }


    // Get order by status
    public function filterByStatus()
    {
        if (request()->filled('status')) {
            $orders = Order::with(['user', 'address', 'items'])
                ->where('status', request()->input('status'))
                ->withCount('items')
                ->latest()
                ->paginate();
        }
        return $orders ?? [];
    }

    // search order
    public function search($search)
    {
        if ($search) {
            $orders = Order::with(['user', 'address', 'items'])
                ->WhereAny([
                    'id',
                    'user_id',
                    'total_amount',
                    'coupon',
                    'note',
                    'status',
                    'address_id',
                    'discount',
                    'total_after_discount',
                    'coupon_id',
                    'shipping_fee',
                    'total_payable_amount',
                    'total_weight',
                ], 'like', "%$search%")
                ->withCount('items')
                ->latest()
                ->paginate();
        }
        return $orders ?? [];
    }

}
