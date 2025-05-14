<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display listing of product.
     */
    public function index()
    {

        // $user = User::inRandomOrder()->get();
        // return $user;

        // Latest Products
        $new_arrivals = Product::with(['banner'])
            ->latest()
            ->limit(25)
            ->get();
        // return  $new_arrivals;

        $new_collections = Product::with(['banner'])
            ->groupBy('brand_id')
            ->inRandomOrder()
            ->limit(25)
            ->get();
        // return  $new_collections;

        $new_collection_two = Product::with(['banner'])
            ->groupBy('category_id')
            ->inRandomOrder()
            ->limit(25)
            ->get();
        // return  $new_collection_two;

        $new_collection_three = Product::with(['banner'])
            ->groupBy('promotion_id')
            ->inRandomOrder()
            ->limit(25)
            ->get();
        // return  $new_collection_three;                

        $trending = Product::with(['banner'])
            ->inRandomOrder()
            ->limit(25)
            ->get();
        // return $trending;     
        
        $products = Product::with(['banner'])
            ->inRandomOrder()
            ->limit(25)
            ->get();
        // return $products;

        return view('dasma.index', [
            'products' => $products,
            'new_arrivals' => $new_arrivals,
            'new_collections' => $new_collections,
            'new_collection_two' => $new_collection_two,
            'new_collection_three' => $new_collection_three,
            'trending' => $trending,
        ]);
    }
}
