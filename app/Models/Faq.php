<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faq extends Model
{
    use SoftDeletes;
    // protected $table = 'faqs';
    protected $fillable = [
        'question',
        'answer',
        'status', // draft, published, archived
        'category', // e.g., general, technical, billing
        'created_by', // Foreign key to users table
    ];
    protected $casts = [
        'status' => 'string',
        'category' => 'string',
    ];

    /**
     * Get the user that created the FAQ.
     */
    public function createdBy()
    {
        return $this->belongsTo('App\Models\User', 'created_by');
    }
}
