<?php

namespace App\Http\Controllers;

use App\Helpers\ActorHelper;
use App\Helpers\ApiResponse;
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
        $wishlists = Wishlist::with(['product.banner'])
            ->latest()
            ->paginate(10);
        // return $wishlists;
        return view('dasma.account.wishlists',[
            'wishlists' => $wishlists
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWishlistRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = ActorHelper::getUserId();

        // Check if the product is already in the wishlist
        $existingWishlist = Wishlist::where('user_id', $data['user_id'])
            ->where('product_id', $data['product_id'])
            ->first();
        if ($existingWishlist) {
            $message = "product already added to the wishlist";
            return ApiResponse::success($existingWishlist, $message);
        }

        $wishlist = Wishlist::create($data);
        $message = "product added to the wishlist";
        // return $wishlist;
        return ApiResponse::success($wishlist, $message);
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
        $message = "wishlist deleted successfully";
        return ApiResponse::success([], $message);
    }
}
