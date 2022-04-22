<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advisor extends Model
{
    use HasFactory;

    protected $fillable = [
        ' user_id',
        'team',
    ];

    public function Leadre()
    {
        return $this->hasMany('App\Models\Leadre','advisor_id');
    }

    public function Supervisor()
    {
        return $this->hasMany('App\Models\Supervisor','advisor_id');
    }

    public function User()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}

