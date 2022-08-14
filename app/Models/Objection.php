<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objection extends Model
{
    protected $fillable = [
        'title',
        'body',
        'objector_id',
        'reviewer_id',
        'status',
        'reviewer_note',        
    ];
    use HasFactory;
    public function objector()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function reviewer()
    {
        return $this->belongsTo('App\Models\User');
    }
}
