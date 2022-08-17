<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtraWork extends Model
{
    use HasFactory;
    //use MediaTraits;
    protected $fillable=[
            'supervisor_id',
             'week_id',
             'leaders_didnt_enter_withdraw',
             'communicate_with_leaders',
             'activities',
    ];
}
