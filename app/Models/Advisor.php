<?php

namespace App\Models;

use App\Models\Supervisor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advisor extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'team'];

    public function supervisors() {
        return $this->hasMany(Supervisor::class, 'current_advisor');
    }
}
