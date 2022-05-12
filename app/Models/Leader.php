<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leader extends Model
{
    use HasFactory;

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

}
