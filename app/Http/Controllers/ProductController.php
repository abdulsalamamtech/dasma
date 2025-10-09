<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Asset;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Promotion;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * [Admin] Display a listing of the resource.
     */
    public function index()
    {

        if (request()->filled('status') 
        && in_array(request()->input('status'),['active', 'inactive'])) {
            $products = $this->filterByStatus();
        }else if(request()->filled('search')){
            $products = $this->search();
        }else{
            $products = Product::with(['category', 'brand', 'promotion', 'banner', 'variations'])
                ->latest()
                ->paginate();
        }
        // return $products;
        return view('dashboard.pages.products.index', [
            'products' => $products,
            'brands' => Brand::latest()->get(),
            'categories' => Category::latest()->get(),
            'promotions' => Promotion::latest()->get(),
        ]);
    }

 
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
        // Validated data
        $data = $request->validated();
        // $data['slug'] = Str::slug($data['name']);
        $data['slug'] = Str::slug($data['name']) . '-'. rand(1000, 9999);
        $data['sku'] = date('Y') . $data['brand_id'] . $data['category_id'];
        while (Product::where('sku', $data['sku'])->exists()) {
            $data['sku'] = date('Y') . $data['brand_id'] . $data['category_id'] . '-'. rand(1000, 9999);
        }

        try {
            //code...
            // Upload the image 
            $cloudinaryImage = $request->file('banner')->storeOnCloudinary('dasma/assets');
            $url = $cloudinaryImage->getSecurePath();
            $public_id = $cloudinaryImage->getPublicId();
    
            // dd($cloudinaryImage);
            // return [$cloudinaryImage];
    
            $asset = Asset::create([
                'name' =>  $cloudinaryImage->getOriginalFileName(),
                'description' => 'product banner cloudinary file upload',
                'url' => $url,
                'file_id' => $public_id,
                'type' => $cloudinaryImage->getFileType(),
                'size' => $cloudinaryImage->getSize(),
            ]);        
    
            // get the banner image
            $data['banner_id'] = $asset->id;
            // $data['banner_id'] = 1;
    
            // Store the resource
            $product = Product::create($data);
            info('Product created successfully:', [$product]);
            $product->load(['banner']);
    
            // return $product;
            $message = "product added successfully!";
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            //throw $th;
            Log::error("exception thrown", [$th->getMessage()]);
            // return redirect()->back()->with('error', $th->getMessage());
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $product->load(['banner'])
            ->load('variations')
            ->loadCount('variations');

        // return $product;
        return view('dashboard.pages.products.show', [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $request->validated();
        if($product->name !== $data['name']){
            $data['slug'] = Str::slug($data['name']);
            while (Product::where('slug', $data['slug'])->where('id', '!=', $product->id)->exists()) {
                $data['slug'] = $data['slug']. '-'. rand(1000, 9999);
            }
        }

        try {
            //code...
            // check if product banner image exists
            if($request->file('banner')){
                // Upload the image 
                $cloudinaryImage = $request->file('banner')->storeOnCloudinary('dasma/assets');
                $url = $cloudinaryImage->getSecurePath();
                $public_id = $cloudinaryImage->getPublicId();
        
                // dd($cloudinaryImage);
                // return [$cloudinaryImage];
        
                $asset = Asset::create([
                    'name' =>  $cloudinaryImage->getOriginalFileName(),
                    'description' => 'product banner cloudinary file upload',
                    'url' => $url,
                    'file_id' => $public_id,
                    'type' => $cloudinaryImage->getFileType(),
                    'size' => $cloudinaryImage->getSize(),
                ]);        
        
                // get the banner image
                $data['banner_id'] = $asset->id;
            }
    
            // Store the resource
            $product->update($data);
            info('Product updated successfully: ', [$product]);
            $product->load(['variations', 'banner']);
    
            // return $product; 
            $message = "product updated successfully!";
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            //throw $th;
            Log::error("exception thrown", [$th->getMessage()]);
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        info('Product deleted successfully: ', [$product]);
        $message = "product deleted successfully";
        return redirect()->back()->with('success', $message);

    }

    // Get order by status
    public function filterByStatus()
    {
        if (request()->filled('status')) {
            $products = Product::with(['category', 'brand', 'promotion', 'banner', 'variations'])
                ->where('status', request()->input('status'))
                ->latest()
                ->paginate();
        }
        return $products ?? [];
    }

    // search product by admin
    public function search()
    {
        $query = request('query');
        $products = Product::with(['category', 'brand', 'promotion', 'banner', 'variations'])
            ->where('active')
            // ->when('active', function($query){
            //     if ($query == 'active') {
            //         # code...
            //         return true;
            //     } else {
            //         # code...
            //         return false;
            //     }
                
            // })
            ->whereAny([
                'category_id',
                'brand_id',
                'promotion_id',
                'banner_id',
                'name',
                'slug',
                'description',
                'price',
                'initial_price',
                'stock',
                'weight',
                'tag',
                'views',
                'sku',
                'color',
                'size',
            ], 'LIKE', "%$query%")
            ->latest()
            ->paginate();

        // dd($products);
        return $products ?? [];
    }

    /**
     * Display listing of product on stores page.
     */
    public function listProduct()
    {
        // Check request if category slug is present
        if (request()->filled('category')) {
            $category = request('category');
            $products = Product::with(['banner'])
                ->whereHas('category', function ($q) use ($category) {
                    $q->where('slug', $category);
                })
                ->latest()
                ->paginate();
        } else if (request()->filled('brand')) {
            $brand = request('brand');
            $products = Product::with(['banner'])
                ->whereHas('brand', function ($q) use ($brand) {
                    $q->where('slug', $brand);
                })
                ->latest()
                ->paginate();
        } else if (request()->filled('promotion')) {
            $promotion = request('promotion');
            $products = Product::with(['banner'])
                ->whereHas('promotion', function ($q) use ($promotion) {
                    $q->where('title', $promotion);
                })
                ->latest()
                ->paginate();
        } else {
            // Get all products
            $products = Product::with(['banner'])
            // The random order might not be necessary here
                ->inRandomOrder()
                ->latest()
                ->paginate();
        }


        // Get all products
        $related_products = Product::with(['banner'])
        // The random order might not be necessary here
            ->inRandomOrder()
            ->latest()
            ->limit(24)->get();

        // return $products;
        return view('dasma.store', [
            'products' => $products,
            'related_products' => $related_products
        ]);
    }


    /**
     * Display a product.
     */
    public function showProduct(Product $product)
    {
        $p = $product->toArray();
        $keywords = $p_array = array_values($p);
        $related_products = $this?->searchRelatedProducts($keywords);
        $product->load(['category', 'brand', 'promotion', 'banner', 'variations.asset']);
        
        // $related_products = Product::with(['banner'])
        //     ->inRandomOrder()
        //     ->limit(24)
        //     ->get();
        // return $related_products;  

        // Increment the views count
        $product->increment('views');

        // return $product;
        return view('dasma.product', [
            'product' => $product,
            'related_products' => $related_products,
        ]);
    }


    /**
     * Display listing of search product.
     */
    public function searchProduct()
    {
        $query = request('query');
        $products = Product::with(['banner'])
            // ->where('active')
            ->whereAny([
                'category_id',
                'brand_id',
                'promotion_id',
                'banner_id',
                'name',
                'slug',
                'description',
                'price',
                'initial_price',
                'stock',
                'weight',
                'tag',
                'views',
                'sku',
                'color',
                'size',
            ], 'LIKE', "%$query%")
            ->latest()
            ->paginate();

        // Get all products
        $related_products = Product::with(['banner'])
        // The random order might not be necessary here
            ->inRandomOrder()
            ->latest()
            ->limit(24)->get();

        // dd($related_products);

        // return $products;
        return view('dasma.search', [
            'products' => $products,
            'related_products' => $related_products,
        ]);
    }


    // Search related product
    private function searchRelatedProducts($keywords){

        // $query = $request->input('query'); // The search query
        // $keywords = explode(' ', $query); // Split the query into multiple keywords
        $products = Product::where(function ($q) use ($keywords) {
            foreach ($keywords as $keyword) {
                $q->orWhereAny([
                    'category_id',
                    'brand_id',
                    'promotion_id',
                    'banner_id',
                    'name',
                    'slug',
                    'description',
                    'price',
                    'initial_price',
                    'stock',
                    'weight',
                    'tag',
                    'views',
                    'sku',
                    'color',
                    'size',
                ], 'LIKE', "%$keyword%");
            }
        })
        ->orWhereHas('category', function ($q) use ($keywords) {
            foreach ($keywords as $keyword) {
                $q->orWhereAny([
                    'name',
                    'slug',
                ], 'LIKE', "%$keyword%");
            }
        })
        ->orWhereHas('brand', function ($q) use ($keywords) {
            foreach ($keywords as $keyword) {
                $q->orWhereAny([
                    'banner_id',
                    'name',
                    'slug'
                ], 'LIKE', "%$keyword%");
            }
        })->orWhereHas('promotion', function ($q) use ($keywords) {
            foreach ($keywords as $keyword) {
                $q->orWhereAny([
                    'title',
                    'description',
                    'banner_id',
                    // 'discount',
                    'start_date',
                    'end_date',
                    'discount',
                    'active',
                ], 'LIKE', "%$keyword%");
            }
        })
        ->get();

        // dd($products);
        return $products;
    }
}
