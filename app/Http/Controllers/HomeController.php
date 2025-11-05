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


        // 1. Fetch relevant products (e.g., limit the total pool for performance)
        //    We apply 'inRandomOrder()' to the entire set first to make the selection random.
        $products = Product::with(['banner'])
            ->inRandomOrder()
            ->get(); // Fetches all results into a Collection

        // 2. Group the results by category_id using Laravel Collections
        $groupedCollections = $products->groupBy('category_id');
        // 3. Optional: Flatten the groups if you only want the *first* product from each group
        //    and limit the total number of final products to 20.
        $new_collections = $groupedCollections->map(function ($products_in_group) {
            // We already randomized the full list before grouping, so taking the first item
            // of each group effectively gives a random product from that category.
            return $products_in_group->first();
        })->take(20);
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
