<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Brand;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Message;
use App\Models\Newsletter;
use App\Models\Order;
use App\Models\Product;
use App\Models\Promotion;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return  $this->customData();
        $dashboard = [
            'users' => $this->users(),
            'transactions' => $this->transactions(),
            'products' => $this->products(),
            'orders' => $this->orders(),
            'statistics' => $this->statistics()
        ];
        // return $dashboard;
        // $dash =  Collection::make($dashboard);
        // return $dash['users'];
        return view('dashboard.dashboard', [
            'dashboard' => $dashboard
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
     * Display a listing of the resource.
     */
    public function users()
    {

        // Count of users that HAVE been verified (where the column is NOT null)
        $verifiedCount = User::where('email_verified_at', '!=', null)->count();
        // Count of users that have NOT been verified (where the column IS null)
        $unverifiedCount = User::where('email_verified_at', '=', null)->count();

        info("Verified Users: $verifiedCount");
        info("Unverified Users: $unverifiedCount");

        $start_date = $this->customData()['this_month'];
        return [
            'total' => User::count(),
            'this_month' => User::where('created_at', '>=', $start_date)->count(),
            'verified' => User::whereNotNull('email_verified_at')->count(),
            'unverified' => User::whereNull('email_verified_at')->count(),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function transactions()
    {

        // 'pending', 
        // 'successful', 
        // 'cancelled', 
        // 'suspended', 
        // 'rejected'

        $start_date = $this->customData()['this_month'];
        return [
            'total' => Transaction::count(),
            // This month
            'this_month' => Transaction::where('created_at', '>=', $start_date)->sum('amount'),
            'amount' => Transaction::sum('amount'),
            'pending' => Transaction::where('status', 'pending')->count(),
            'successful' => Transaction::where('status', 'successful')->count(),
            'cancelled' => Transaction::where('status', 'cancelled')->count(),
            'suspended' => Transaction::where('status', 'suspended')->count(),
            'rejected' => Transaction::where('status', 'rejected')->count(),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function products()
    {
        return [
            'total' => Product::count(),
            'views' => Product::sum('views'),
            'price' => Product::sum('price'),
            'stock' => Product::sum('stock'),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function orders()
    {
        // 'pending',
        // 'cancel',
        // 'processing',
        // 'confirmed',
        // 'shipped',
        // 'received',
        // 'rejected',
        // 'returned',
        // 'refunded'
        $start_date = $this->customData()['this_month'];
        return [
            'total' => Order::count(),
            'this_month' => Order::where('created_at', '>=', $start_date)->count(),
            'total_amount' => Order::sum('total_amount'),
            'pending' => Order::where('status', 'pending')->count(),
        ];
    }

    /**
     * Display a listing of the other resource.
     */
    public function statistics()
    {
        return [
            'products' => Product::count(),
            'orders' => Product::count(),
            'order_items' => Product::count(),
            'users' => User::count(),
            'subscribers' => Newsletter::count(),
            'brands' => Brand::count(),
            'categories' => Category::count(),
            'promotions' => Promotion::count(),
            'return_orders' => Product::count(),
            'wishlists' => Wishlist::count(),
            'carts' => Cart::count(),
            'assets' => Asset::count(),
            'messages' => Message::count(),
        ];
    }


    public function customData()
    {
        return [
            'this_month' => request('start_date') ? request('start_date') : now()->setDateTimeFrom('first day of this month'),
            'last_month' => request('start_date') ? request('start_date') : now()->setDateTimeFrom('first day of last month'),
            'this_year' => request('start_date') ? request('start_date') : now()->setDateTimeFrom('first day of this year'),
            'last_year' => request('start_date') ? request('start_date') : now()->setDateTimeFrom('first day of last year'),
            'start_range' => request('start_date') ? request('start_date') : now()->setDateTimeFrom('first day of last year'),
            'end_range' => request('start_date') ? request('start_date') : now()->setDateTimeFrom('last day of this year'),
        ];
    }
}
