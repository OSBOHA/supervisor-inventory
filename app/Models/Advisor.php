<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advisor extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = [
        ' user_id',
        'team',
    ];

    public function leader()
    {
        return $this->hasMany('App\Models\Leader','advisor_id');
    }

    public function Supervisor()
    {
        return $this->hasMany('App\Models\Supervisor','advisor_id');
    }

    public function User()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
=======
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
>>>>>>> ec31487b2289f261dfea3df7c3dcf9a704078c99
}

