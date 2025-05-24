<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomizationRequest;
use App\Http\Requests\UpdateCustomizationRequest;
use App\Models\Asset;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Customization;

class CustomizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // categories
        $categories = Category::with('products')->get() ?? [];

        $customizations = Customization::with(['category', 'banner'])->paginate() ?? [];
        // return $customizations;
        return view('dashboard.pages.customizations.index', [
            'customizations' => $customizations,
            'categories' => $categories,
        ]);

        // return view('admin.customizations.index', [
        //     'customizations' => $customizations,
        // ])->layout('layouts.admin', [
        //     'title' => 'Customizations',
        //     'description' => 'Manage customizations for the application.',
        //     'breadcrumbs' => [
        //         ['name' => 'Customizations', 'url' => route('admin.customizations.index')],
        //         ['name' => 'Create', 'url' => route('admin.customizations.create')],
        //     ]]
        // );

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomizationRequest $request)
    {
        // return $request->validated();
        // Validated data
        $data = $request->validated();

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
        $customization = Customization::create($data);
        info('Customization created successfully:', [$customization]);
        $customization->load(['banner']);

        // return $customization;
        $message = "Customization added successfully!";
        return redirect()->back()->with('success', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(Customization $customization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomizationRequest $request, Customization $customization)
    {
        $data = $request->validated();

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
                'description' => 'customization banner cloudinary file upload',
                'url' => $url,
                'file_id' => $public_id,
                'type' => $cloudinaryImage->getFileType(),
                'size' => $cloudinaryImage->getSize(),
            ]);        
    
            // get the banner image
            $data['banner_id'] = $asset->id;
        }

        // Store the resource
        $customization->update($data);
        info('Customization updated successfully:', [$customization]);
        $customization->load(['banner']);

        // return $customization;
        $message = "Customization updated successfully!";
        return redirect()->back()->with('success', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customization $customization)
    {
        //
    }

    // Trending customizations
    public function trending()
    {
        // return redirect()->route('admin.customizations.index');

                // categories
        $categories = Category::with('products')->get() ?? [];

        $customizations = Customization::with(['category', 'banner'])->paginate() ?? [];
        // return $customizations;
        return view('dashboard.pages.customizations.trending', [
            'customizations' => $customizations,
            'categories' => $categories,
        ]);
    }

    // New Arrivals customizations
    public function newArrivals()
    {
        return redirect()->route('admin.customizations.index');
    }

}
