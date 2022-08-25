<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    use HasFactory;

    protected $fillable = [
        ' title ',
        'supervisor_timer ',
        'advisor_timer ',
    ];

    public function leaderDuty()
    {
        return $this->hasMany(LeaderDuty::class,'week_id');
    }

    public function extraWork()
    {
        return $this->hasMany(ExtraWork::class,'week_id');
    }

    public function repeatedNote()
    {
        return $this->hasMany(RepeatedNote::class,'week_id');
    }

    public function news()
    {
        return $this->hasMany(News::class,'week_id');
    }
    
}
