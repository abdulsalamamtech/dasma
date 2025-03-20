<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dashboard = [
            'users' => $this->users(),
            'transactions' => $this->transactions(),
            'products' => $this->products(),
            'orders' => $this->orders(),
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
        return [
            'total' => User::count(),
            'verified' => User::whereNotNull('email_verified')->count(),
            'unverified' => User::whereNull('email_verified')->count(),
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
        return [
            'total' => Transaction::count(),
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
        return [
            'total' => Order::count(),
            'total_amount' => Order::sum('total_amount'),
            'pending' => Order::where('status', 'pending')->count(),
        ];
    }
}
