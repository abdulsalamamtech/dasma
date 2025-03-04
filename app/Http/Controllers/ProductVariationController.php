<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductVariationRequest;
use App\Http\Requests\UpdateProductVariationRequest;
use App\Models\Asset;
use App\Models\Product;
use App\Models\ProductVariation;
use Illuminate\Support\Facades\Log;

class ProductVariationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Product $product)
    {
        $product_variations = ProductVariation::with(['product', 'asset'])
            ->latest()
            ->paginate();
        // return $product_variations;
        return redirect()->to_route('admin.products', $product->id)->with('success', true);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Product $product, StoreProductVariationRequest $request)
    {
        $data = $request->validated();
        if($product->id != $data['product_id']){
            return redirect()->back()->with('error', 'product mismatch!');
        }

        try {
            //code...
            // Upload the image 
            $cloudinaryImage = $request->file('image')->storeOnCloudinary('dasma/assets');
            $url = $cloudinaryImage->getSecurePath();
            $public_id = $cloudinaryImage->getPublicId();
    
            // dd($cloudinaryImage);
            // return [$cloudinaryImage];
    
            $asset = Asset::create([
                'name' =>  $cloudinaryImage->getOriginalFileName(),
                'description' => 'product variation cloudinary file upload',
                'url' => $url,
                'file_id' => $public_id,
                'type' => $cloudinaryImage->getFileType(),
                'size' => $cloudinaryImage->getSize(),
            ]);        
    
            // get the banner image
            $data['asset_id'] = $asset->id;
    
            // Store the resource
            $product_variation = ProductVariation::create($data);
            $product_variation->load(['product', 'asset']);
    
            // return $product_variation;     
            return redirect()->back()->with('success', 'product variation added successfully!');

        } catch (\Throwable $th) {
            //throw $th;
            Log::error("exception thrown", [$th->getMessage()]);
            return redirect()->back()->with('error', $th->getMessage());
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product, ProductVariation $product_variation)
    {
        $product_variation->load(['product', 'asset']);

        // return $product_variation;  
        // return redirect()->back()->with('success', $message);
        return to_route('admin.products.show', $product->id)->with('success', 'successful!');

    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Product $product, UpdateProductVariationRequest $request, ProductVariation $product_variation)
    {
        $data = $request->validated();

        try {
            //code...
            // check if product image exists
            if($request->file('image')){
                // Upload the image 
                $cloudinaryImage = $request->file('image')->storeOnCloudinary('dasma/assets');
                $url = $cloudinaryImage->getSecurePath();
                $public_id = $cloudinaryImage->getPublicId();
        
                // dd($cloudinaryImage);
                // return [$cloudinaryImage];
        
                $asset = Asset::create([
                    'name' =>  $cloudinaryImage->getOriginalFileName(),
                    'description' => 'product variation cloudinary file upload',
                    'url' => $url,
                    'file_id' => $public_id,
                    'type' => $cloudinaryImage->getFileType(),
                    'size' => $cloudinaryImage->getSize(),
                ]);        
        
                // get the banner image
                $data['asset_id'] = $asset->id;
            }
    
            // Store the resource
            $product_variation->update($data);
            $product_variation->load(['product', 'asset']);
    
            // return $product_variation; 
            return to_route('admin.products.show', $product->id)->with('success', 'product variation updated successfully!');
        } catch (\Throwable $th) {
            //throw $th;
            Log::error("exception thrown", [$th->getMessage()]);
            return redirect()->back()->with('error', $th->getMessage());
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product, ProductVariation $product_variation)
    {
        $product_variation->delete();
        $message = "product variation deleted successfully";
        return to_route('admin.products.show', $product->id)->with('success', $message);

    }
}
