<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Promotion extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'title',
        'description',
        'banner_id',
        // 'discount',
        'start_date',
        'end_date',
        'discount',
        'active',
    ];

    protected $casts = [
        'active' => 'boolean',
        'discount' => 'integer',
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'banner_id' => 'integer',
    ];

    public function banner(){
        return $this->belongsTo(Asset::class, 'banner_id');
    }

    public function products(){
        return $this->hasMany(Product::class);
    }

    // active scope
    public function scopeActive($query){
        return $query
        ->where('active', true)
        ->where('end_date', '>=', now());
    }

    
}
