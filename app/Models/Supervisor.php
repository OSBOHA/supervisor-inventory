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

    public function RepeatedNote()
    {
        return $this->hasMany('App\Models\RepeatedNote','supervisor_id');

    }

    public function leaders()
    {
        return $this->hasMany(Leader::class,'supervisor_id');
    }

    public function notes()
    {
        return $this->hasMany('App\Models\RepeatedNote');
    }
    
    public function current_advisor_info()
    {
        return $this->belongsTo(Advisor::class,'current_advisor');
    }
    public function previous_advisor_info()
    {
        return $this->belongsTo(Advisor::class,'previous_advisor');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
