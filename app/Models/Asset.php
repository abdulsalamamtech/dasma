<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asset extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'name',
        'type',
        'file_id',
        'path',
        'url',
        'size',
        'hosted_at'
    ];
}
