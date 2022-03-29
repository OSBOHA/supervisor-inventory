<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaderDuty extends Model
{
    protected $fillable=[
            'team_final_mark',
            'current_team_members',
            'follow_up_post',
            'support_post',
            'news',
            'leader_reading',
            'elementary_mark',
            'final_mark',
            'audit_final_mark',
            'withdrawn_ambassadors'

    ];
    use HasFactory;
}
