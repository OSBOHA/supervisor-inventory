<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    use HasFactory;
    protected $fillable = [
        ' user_id',
        'team',
        'current_advisor',
        'previous_advisor',
    ];

    public function Leader()
    {
        return $this->hasMany('App\Models\Leader','supervisor_id');
    }

    public function RepeatedNote()
    {
        return $this->hasMany('App\Models\RepeatedNote','supervisor_id');
    }

    public function Advisor()
    {
        return $this->belongsTo('App\Models\Advisor','advisor_id');
    }

    public function User()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
