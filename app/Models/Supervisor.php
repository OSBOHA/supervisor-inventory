<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    protected $fillable=[
        'current_advisor',
        'previous_advisor',
        'team',
        'user_id'
    ];
    use HasFactory;
}
