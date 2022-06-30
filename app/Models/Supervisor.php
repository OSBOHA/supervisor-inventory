<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    protected $fillable=[
        'current_advisor',
        'previous_advisor',
        'team',
        'user_id'
    ];
    use HasFactory;
<<<<<<< HEAD
    protected $fillable = [
        ' user_id',
        'team',
        'current_advisor',
        'previous_advisor',
    ];

    public function Leader()
    {
        return $this->hasMany('App\Models\Leader','supervisor_id');
    }

    public function RepeatedNote()
    {
        return $this->hasMany('App\Models\RepeatedNote','supervisor_id');
=======

    protected $fillable=[
        'user_id',
        'team',
        'current_advisor',
        'previous_advisor',
  ];


    public function leader()
    {
      return $this->hasMany('App\Models\Leader');
    }

    public function notes()
    {
        return $this->hasMany('App\Models\RepeatedNote');
    }

    public function user()
    {
        return $this->belongsTo('\App\Models\User', 'user_id');
>>>>>>> ec31487b2289f261dfea3df7c3dcf9a704078c99
    }

    public function Advisor()
    {
<<<<<<< HEAD
        return $this->belongsTo('App\Models\Advisor','advisor_id');
    }

    public function User()
    {
        return $this->belongsTo('App\Models\User','user_id');
=======
        return $this->belongsTo('\App\Models\Advisor', 'current_advisor');
>>>>>>> ec31487b2289f261dfea3df7c3dcf9a704078c99
    }
}
