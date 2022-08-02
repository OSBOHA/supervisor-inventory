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
        
    ];
    use HasFactory;
    public function objector()
    {
        return $this->belongsTo('App\Models\User','objector_id');
    }
    public function reviewer()
    {
        return $this->belongsTo('App\Models\User','reviewer_id');
    }
}
