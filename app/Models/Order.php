<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{

    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'total_amount',
        'coupon',
        'note',
        'status',
        'address_id',
        'discount',
        'total_after_discount',
        'coupon_id',
        'shipping_fee',
        'total_payable_amount',
        'total_weight',
    ];


    protected $casts = [
        'total_amount' => 'decimal:2'
        // 'status' => OrderStatusEnum::class,
    ];

    // custom order id from order
    public function orderNo(){
        // ODR{{ date('Y') }}-{{ $order->id }} 
        return "ORD" . $this->created_at->format('ymd') . '-' . $this->id;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItems::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function lastTransaction()
    {
        return $this->hasOne(Transaction::class)->latest();
    }

    public function lastPayment(){
        return $this?->transactions()?->latest()?->first();
    }

    public function review()
    {
        return $this->hasOne(Review::class);
    }

    public function statusColor()
    {
        $status = $this->status;
        $color = [
            'pending' => 'orange',
            'cancel' => 'red',
            'processing' => 'purple',
            'confirmed' => 'green',
            'shipped' => 'yellow',
            'received' => 'green',
            'rejected' => 'red',
            'returned' => 'brown',
            'refunded' => 'blue',
        ];
        return $color[$status];
    }
}
