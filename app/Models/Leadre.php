<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leadre extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        ' supervisor_id',
        'advisor_id',
        'team',
        'type',
    ];

    public function LeaderDuty()
    {
        return $this->hasMany('App\Models\LeaderDuty','leader_id');
    }

    public function Advisor()
    {
        return $this->belongsTo('App\Models\Advisor','advisor_id');
    }
    
    public function Supervisor()
    {
        return $this->belongsTo('App\Models\Supervisor','supervisor_id');
    }
}
