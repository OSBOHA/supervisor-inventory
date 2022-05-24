<?php
namespace App\Models;
use App\Traits\MediaTraits;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class LeaderDuty extends Model
{
    use HasFactory; 
    use MediaTraits;
    protected $fillable=[
            'leader_id',
            'supervisor_id',
            'week_id',
            'supervisor_id',
            'team_final_mark',
            'current_team_members',
            'follow_up_post',
            'support_post',
            'news',
            'leader_reading',
            'elementary_mark',
            'final_mark',
            'audit_final_mark',
            'withdrawn_ambassadors',
    ];

    public function Leader()
    {
        return $this->belongsTo('App\Models\Leader','leader_id');
    }
    
    public function Week()
    {
        return $this->belongsTo('App\Models\Week','week_id');
    }

    public function week_num() {
        return $this->belongsTo('\App\Models\Week');
    }

}
