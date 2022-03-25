<?php

namespace App\Models;

use App\Models\Supervisor;
use App\Models\LeaderDuty;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leadre extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'week_id', 'advisor_id', 'supervisor_id', 'team', 'type'];

    public function supervisors() {
        return $this->belongsTo(Supervisor::class, 'user_id');
    }

    public function leaderDuties() {
        return $this->hasOne(LeaderDuty::class, 'leader_id');
    }
}
