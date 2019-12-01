<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable = ['team_id1', 'team_id2', 'date', 'time'];

    public function teams() {
        return $this->belongsTo('App\Team');
    }
}
