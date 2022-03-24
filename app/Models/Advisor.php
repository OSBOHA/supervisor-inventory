<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advisor extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'team',
    ];

   
    public function Supervisor(): HasMany
    {
        return $this->hasMany('App\Model\Supervisor');
    }
}
