<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class auditorium extends Model
{
    protected $table = 'auditorium';

    /*********************************************************
     *
     * RELATIONSHIP METHODS
     *
     *********************************************************/


    public function seat()
    {
        return $this->hasMany('App\Seat');
    }

    public function screening()
    {
        return $this->belongsToMany('App\Screening');
    }
}
