<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{

    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'order_id',  // use if review is related to an order
        'comment',
        'rating',
        'status'
    ];

    public function order(){
        return $this->belongsTo(Order::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }


}
