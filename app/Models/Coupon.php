<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coupon extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'name',
        'code',
        'expires',
        'discount',
        'min_order_amount',
        'created_by',
    ];
}
