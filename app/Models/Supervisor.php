<?php

namespace App\Models;

use App\Models\Advisor;
use App\Models\Leadre;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    use HasFactory;
    protected $fillable = ['current_advisor', 'previous_advisor', 'status', 'team'];

    public function advisor() {
        return $this->belongsTo(Advisor::class, 'user_id');
    }

    public function leadre() {
        return $this->hasMany(Leadre::class, 'supervisor_id');
    }
}
