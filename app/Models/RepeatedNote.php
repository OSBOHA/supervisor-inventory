<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepeatedNote extends Model
{
    use HasFactory;

    protected $fillable = [
        'supervisor_id',
        'week_id',
        'didnt_publish_news',
        'post_late',
        'elementary_marks_late',
        'deputized_for',
        'light_week'
    ];

    public function Supervisor(): BelongsTo
    {    
         return $this->belongsTo('App\Models\Supervisor');
    }
    public function Week()
    {
        return $this->belongsTo('App\Models\Week');
    }
}
