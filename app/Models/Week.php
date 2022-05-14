<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'supervisor_timer',
        'advisor_timer',
  ];
   
        public function repeatnote()
        {
            return $this->hasMany('App\Models\RepeatedNote');
        }
    
}
