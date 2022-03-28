<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtraWork extends Model
{
    use HasFactory;
    
    protected $fillable =[
        'week_id',
        'supervisor_id',
        'activities',
        'communicate_with_leaders',
        'leaders_didnt_enter_withdraw'
     ];

     public function Supervisor()
     {
         return $this->belongsTo('App\Models\Supervisor');
     }
     public function Week()
     {
         return $this->belongsTo('App\Models\Week');
     }
}
