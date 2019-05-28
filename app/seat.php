<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class seat extends Model
{
    protected $table = 'seat';

    /*********************************************************
     *
     * RELATIONSHIP METHODS
     *
     *********************************************************/


    public function seatreserved()
    {
        return $this->belongsToMany('App\Seatreserved');
    }

    public function auditorium()
    {
        return $this->belongsTo('App\Auditorium');
    }
}
