<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Customization;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display listing of product.
     */
    public function index()
    {

        // Customization
        $customizations = Customization::with(['category', 'banner'])
            // ->groupBy('type')
            ->inRandomOrder()
            ->latest()
            ->limit(20);

        $trends = $customizations->limit(3)->get();
        $customizations = $customizations->get();
        // return $customizations;


        // $trends = $customizations->filter(function ($customization) {
        //     return $customization->type === 'trend';
        // });
        // return $trends;

        // Latest Products
        $new_arrivals = Product::with(['banner'])
            ->latest()
            ->limit(20)
            // ->toRawSql();
            ->get();
        // return  $new_arrivals;

        // $new_collections = Product::with(['banner'])
        //     ->inRandomOrder()
        //     ->groupBy('category_id')
        //     ->limit(20)
        //     ->get();
        // return  $new_collections;
        $new_collections = Product::with(['banner'])
            ->select("*")
            ->groupBy('category_id')
            ->inRandomOrder() // This shuffles the *resulting* groups
            ->limit(20)
            ->get();
        // return  $new_collections;
        // dd($new_collections);

        $new_collection_two = Product::with(['banner'])
            ->inRandomOrder()
            ->groupBy('brand_id')
            ->limit(25)
            ->get();
        // return  $new_collection_two;

        $new_collection_three = Product::with(['banner'])
            ->inRandomOrder()
            ->groupBy('promotion_id')
            ->limit(22)
            ->get();
        // return  $new_collection_three;                

        $trending = Product::with(['banner'])
            ->inRandomOrder()
            ->limit(24)
            ->get();
        // return $trending;     

        $products = Product::with(['banner'])
            ->inRandomOrder()
            ->limit(26)
            ->get();
        // return $products;


        // Brands
        $brands = Brand::with(['banner'])->inRandomOrder()->latest()->limit(6)->get();
        // return $brands;

        return view('dasma.index', [
            'customizations' => $customizations,
            'trends' => $trends,
            'products' => $products,
            'new_arrivals' => $new_arrivals,
            'new_collections' => $new_collections,
            'new_collection_two' => $new_collection_two,
            'new_collection_three' => $new_collection_three,
            'trending' => $trending,
            'brands' => $brands,
        ]);
    }
}
