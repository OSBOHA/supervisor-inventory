<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    use HasFactory;

    public function ExtraWork()
    {
        return $this->hasMany('App\Models\ExtraWork');
    }  
   
}
