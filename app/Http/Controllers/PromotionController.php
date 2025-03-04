<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePromotionRequest;
use App\Http\Requests\UpdatePromotionRequest;
use App\Models\Asset;
use App\Models\Promotion;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Search for brand
        if(request()->filled('search')){
            $search = request('search');
            $promotions = $this->search($search);
        }else{
            $promotions = Promotion::with(['banner'])->latest()->paginate();
        }
        // return $brands;
        // return $promotions;
        return view('dashboard.pages.promotions.index', [
            'promotions' => $promotions
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePromotionRequest $request)
    {
        // Validated data
        $data = $request->validated();

        // Upload the image 
        $cloudinaryImage = $request->file('banner')->storeOnCloudinary('dasma/assets');
        $url = $cloudinaryImage->getSecurePath();
        $public_id = $cloudinaryImage->getPublicId();

        // dd($cloudinaryImage);
        // return [$cloudinaryImage];

        $asset = Asset::create([
            'name' =>  $cloudinaryImage->getOriginalFileName(),
            'description' => 'promotion banner cloudinary file upload',
            'url' => $url,
            'file_id' => $public_id,
            'type' => $cloudinaryImage->getFileType(),
            'size' => $cloudinaryImage->getSize(),
        ]);        

        // get the banner image
        $data['banner_id'] = $asset->id;

        // Store the resource
        $promotion = Promotion::create($data);
        info('Promotion created successfully:', [$promotion]);
        $promotion->load(['banner']);

        // return $promotion;
        $message = "promotion added successfully!";
        return redirect()->back()->with('success', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(Promotion $promotion)
    {
        // return $promotion;
        $promotion->load(['banner']);
        return view('dashboard.pages.promotions.show', [
            'promotion' => $promotion
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePromotionRequest $request, Promotion $promotion)
    {
       // Validated data
       $data = $request->validated();

        //  check if promotion banner exists
       if($request->filled('banner') &&$request->file('banner')){
           // Upload the image 
           $cloudinaryImage = $request->file('banner')->storeOnCloudinary('dasma/assets');
           $url = $cloudinaryImage->getSecurePath();
           $public_id = $cloudinaryImage->getPublicId();
    
           // dd($cloudinaryImage);
           // return [$cloudinaryImage];
    
           $asset = Asset::create([
               'name' =>  $cloudinaryImage->getOriginalFileName(),
               'description' => 'promotion banner cloudinary file upload',
               'url' => $url,
               'file_id' => $public_id,
               'type' => $cloudinaryImage->getFileType(),
               'size' => $cloudinaryImage->getSize(),
           ]);        
    
           // get the banner image
           $data['banner_id'] = $asset->id;
       }

       // Store the resource
       $promotion->update($data);
       info('Promotion updated successfully:', [$promotion]);
       $promotion->load(['banner']);
       $promotion->loadCount('products');

        // return $promotion;
        $message = "promotion updated successfully!";
        return redirect()->back()->with('success', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promotion $promotion)
    {
        $promotion->delete();
        info('Promotion deleted successfully:', [$promotion]);
        $message = "promotion deleted successfully";
        return redirect()->back()->with('success', $message);
    }

    private function search($search){
        $promotions = Promotion::with(['banner'])
            ->where('title', 'LIKE', '%'.$search.'%')
            ->orWhere('discount', 'LIKE', '%'.$search.'%')
            ->orWhere('description', 'LIKE', '%'.$search.'%')            
            ->orWhereHas('products', function ($query) use ($search) {
                $query->where('name', 'LIKE', '%'.$search.'%');
            })
            ->latest()
            ->paginate();
        return $promotions;
    }
}
