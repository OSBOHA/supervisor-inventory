<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory; 
    protected $fillable=[
        'title',
        'body',
        'sender_id',
        'receiver_id',
        'status'
    ];
    public function User() 
    {
       return $this->belongsTo(App\Models\User::class);
    }
}
