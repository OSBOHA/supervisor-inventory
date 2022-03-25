<?php

namespace App\Models;

use App\Models\Leadre;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaderDuty extends Model
{
    use HasFactory;
    protected $fillable = ['leader_id', 'week_id', 'follow_up_post', 'support_post', 'news', 'elementary_mark', 'final_mark',
    'audit_final_mark', 'withdrawn_ambassadors', 'leader_reading', 'team_final_mark', 'current_team_members'];

    public function leaders() {
        return $this->belongsTo(Leadre::class, 'id');
    }
}
