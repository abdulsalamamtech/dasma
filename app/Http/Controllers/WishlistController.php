<?php

namespace App\Http\Controllers;

use App\Helpers\ActorHelper;
use App\Http\Requests\StoreWishlistRequest;
use App\Http\Requests\UpdateWishlistRequest;
use App\Models\Wishlist;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wishlists = Wishlist::with(['product'])
            ->latest()
            ->paginate();
        return $wishlists;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWishlistRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = ActorHelper::getUserId();

        $wishlist = Wishlist::create($data);
        return $wishlist;
    }

    /**
     * Display the specified resource.
     */
    public function show(Wishlist $wishlist)
    {
        return $wishlist;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWishlistRequest $request, Wishlist $wishlist)
    {
        $data = $request->validated();

        $wishlist->update($data);
        return $wishlist;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wishlist $wishlist)
    {
        $wishlist->delete();
        return $message = "wishlist deleted successfully";
    }
}
