<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'other_name',
        'phone_number',
        'post_code',
        'street',
        'city',
        'state',
        'country'
    ];    

    public function user(){
        return $this->belongsTo(User::class);
    }
}
