<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class screening extends Model
{
    protected $table = 'screening';

    public function reservation()
    {
        return $this->hasMany('App\Reservation');
    }

    public function pricing()
    {
        return $this->hasOne('App\Pricing');
    }

    public function seatreserved()
    {
        return $this->hasMany('App\seatreserved');
    }
}
