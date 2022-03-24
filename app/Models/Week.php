<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    use HasFactory;

    protected $fillable = [
        'supervisor_timer',
        'advisor_timer',
        'title',   
    ];

    public function RepeatedNote(): HasMany
    {
        return $this->hasMany('App\Model\RepeatedNote');
    }

   
}
