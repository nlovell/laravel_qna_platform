<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TerribleAnswer extends Model
{
    public function question()
    {
        return $this->belongsTo('App\Models\TerribleQuestion');
    }
}
