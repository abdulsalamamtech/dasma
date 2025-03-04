<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use App\Models\Asset;
use App\Models\Brand;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // Search for brand
        if(request()->filled('search')){
            $search = request('search');
            $brands = $this->search($search);
        }else{
            $brands = Brand::with(['banner'])
                ->latest()
                ->paginate();
        }
        // return $brands;
        return view('dashboard.pages.brands.index', [
            'brands' => $brands
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandRequest $request)
    {
        // Validated data
        $data = $request->validated();
        $data['slug'] = Str::slug($data['name']);

        // return $data;
        // Upload the image 
        $cloudinaryImage = $request->file('banner')->storeOnCloudinary('dasma/assets');
        $url = $cloudinaryImage->getSecurePath();
        $public_id = $cloudinaryImage->getPublicId();

        // dd($cloudinaryImage);
        // return [$cloudinaryImage];

        $asset = Asset::create([
            'name' =>  $cloudinaryImage->getOriginalFileName(),
            'description' => 'brand banner cloudinary file upload',
            'url' => $url,
            'file_id' => $public_id,
            'type' => $cloudinaryImage->getFileType(),
            'size' => $cloudinaryImage->getSize(),
        ]);        

        // get the banner image
        $data['banner_id'] = $asset->id;

        // Store the resource
        $brand = Brand::create($data);
        info('Brand created successfully:', [$brand]);
        $brand->load(['banner']);

        // return $brand;
        $message = "brand added successfully!";
        return redirect()->back()->with('success', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        $brand->load(['banner']);

        // return $brand;
        return view('dashboard.pages.brands.show', [
            'brand' => $brand
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['name']);

        // check if slug exists and add random number
        while (Brand::where('slug', $data['slug'])->where('id', '!=', $brand->id)->exists()) {
            $data['slug'] = $data['slug']. '-'. rand(1000, 9999);
        }

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
        $brand->update($data);
        info('Brand updated successfully:', [$brand]);
        $brand->load(['banner']);

        // return $brand;
        $message = "brand updated successfully!";
        return redirect()->back()->with('success', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        info('Brand deleted successfully:', [$brand]);

        $message = "brand deleted successfully";
        return redirect()->back()->with('success', $message);
    }

    /**
     * Search for brand
     */
    private function search(string  $search){
        $brands = Brand::where('name', 'LIKE', '%'.$search.'%')
            ->latest()
            ->paginate();

        return $brands;
    }
}
