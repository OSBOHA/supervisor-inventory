<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable=[
        'title',
        'body',
        'sender_id',
        'receiver_id',
        'status'
];
    use HasFactory;
}
