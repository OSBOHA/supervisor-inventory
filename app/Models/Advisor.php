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

    public function leaders()
    {
        return $this->hasMany(Leader::class,'advisor_id');
    }

    public function current_supervisors()
    {
        return $this->hasMany(Supervisor::class,'current_advisor');
    }
    public function previous_supervisors()
    {
        return $this->hasMany(Supervisor::class, 'previous_advisor');
    }


    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

}

