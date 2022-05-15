<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leader extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = [
        ' supervisor_id',
        'advisor_id',
        'team',
        'type',
    ];
=======
    protected $fillable=[
        'supervisor_id',
        'advisor_id',
        'team',
  ];

  public function supervisor()
  {
      return $this->belongsTo('\App\Models\Supervisor', 'supervisor_id');
  }

  public function advisor()
  {
      return $this->belongsTo('\App\Models\Supervisor', 'advisor_id');
  }


    // public function duty(){
>>>>>>> ec31487b2289f261dfea3df7c3dcf9a704078c99

    public function LeaderDuty()
    {
        return $this->hasMany('App\Models\LeaderDuty','leader_id');
    }

    public function Advisor()
    {
        return $this->belongsTo('App\Models\Advisor','advisor_id');
    }
    
    public function Supervisor()
    {
        return $this->belongsTo('App\Models\Supervisor','supervisor_id');
    }
}
