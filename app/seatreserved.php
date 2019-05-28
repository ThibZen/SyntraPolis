<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class seatreserved extends Model
{
    protected $table = 'seatreserved';

    /*********************************************************
     *
     * RELATIONSHIP METHODS
     *
     *********************************************************/


    public function reservation()
    {
        return $this->belongsTo('App\Reservation');
    }

    public function seat()
    {
        return $this->belongsTo('App\Reservation');
    }
}
