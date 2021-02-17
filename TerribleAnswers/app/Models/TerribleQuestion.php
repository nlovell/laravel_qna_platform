<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TerribleQuestion extends Model
{
    public function answers()
    {
        return $this->hasMany('App\Models\TerribleAnswer');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
