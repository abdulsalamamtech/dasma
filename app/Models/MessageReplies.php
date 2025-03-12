<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MessageReplies extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'message_id',
        'message',
    ];

    public function message(){
        return $this->belongsTo(Message::class);
    }
}
