<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advisor extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'team',
  ];

  public function supervisor()
  {
      return $this->hasMany('\App\Models\Supervisor');
  }

  public function leader()
  {
      return $this->hasMany('\App\Models\Leader');
  }

  public function user()
  {
      return $this->belongsTo('App\Models\User', 'user_id');
  }
}
