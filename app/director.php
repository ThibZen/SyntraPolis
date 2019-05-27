<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class director extends Model
{
    protected $table = 'director';

    public function moviedirectors()
    {
        return $this->belongsToMany('App\Moviedirectors');
    }
}
