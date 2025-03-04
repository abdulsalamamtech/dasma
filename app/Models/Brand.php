<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'banner_id',
        'name',
        'slug'
    ];

    public function banner(){
        return $this->belongsTo(Asset::class, 'banner_id');
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
