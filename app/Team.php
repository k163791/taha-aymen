<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['name', 'image'];

    public function players() {
      $this->hasMany('App\Player');
    }

    public function matches() {
      $this->hasMany('App\Match');
    }
}
