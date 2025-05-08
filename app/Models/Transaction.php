<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{

    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'order_id',
        'amount',
        'status',
        'reference',
        'payment_method',
        'data'
        // response data from payment server
        // 'data',
    ];

    protected $casts = [
        'amount' => 'decimal:2'
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function order(){
        return $this->belongsTo(Order::class);
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
            'successful' => 'green',
            'rejected' => 'red',
            'returned' => 'brown',
            'refunded' => 'blue',
        ];
        return $color[$status];
    }
}
