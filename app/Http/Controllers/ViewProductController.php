<?php

namespace App\Http\Controllers;

use App\Helpers\ActorHelper;
use App\Http\Requests\StoreViewProductRequest;
use App\Http\Requests\UpdateViewProductRequest;
use App\Models\ViewProduct;

class ViewProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $view_products = ViewProduct::latest()->paginate();
        return $view_products;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->index();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreViewProductRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = ActorHelper::getUserId();

        $view_product = ViewProduct::create($data);
        return $view_product;
    }

    /**
     * Display the specified resource.
     */
    public function show(ViewProduct $view_product)
    {
        return $view_product;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ViewProduct $view_product)
    {
        return $view_product;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateViewProductRequest $request, ViewProduct $view_product)
    {
        $data = $request->validated();

        $view_product->update($data);
        return $view_product;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ViewProduct $view_product)
    {
        $view_product->delete();
        return $message = "view product deleted successfully";
    }
}
