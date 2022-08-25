<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'week_id',
    ];

    public function week()
    {
        return $this->belongsTo(Week::class);
    }
}
