<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['name', 'image'];

    public function players() {
        return $this->hasMany('App\Player');
    }

    public function matches() {
      return $this->hasOne('App\Match');
    }
}
