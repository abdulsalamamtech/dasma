<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCouponRequest;
use App\Http\Requests\UpdateCouponRequest;
use App\Models\Coupon;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coupon = Coupon::latest()->paginate();
        return $coupon;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCouponRequest $request)
    {
        $data = $request->validated();

        $coupon = Coupon::create($data);
        return $coupon;
    }

    /**
     * Display the specified resource.
     */
    public function show(Coupon $coupon)
    {
        return $coupon;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCouponRequest $request, Coupon $coupon)
    {
        $data = $request->validated();

        $coupon->update($data);
        return $coupon;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coupon $coupon)
    {
        $coupon->delete();
        return $message = "coupon deleted successfully";
    }
}
