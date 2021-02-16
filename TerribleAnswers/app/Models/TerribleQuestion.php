<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TerribleQuestion extends Model
{
    public function answers()
    {
        return $this->hasMany('App\Models\TerribleAnswer');
    }
}
