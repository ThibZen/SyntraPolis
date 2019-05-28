<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    protected $table = 'reservation';

    /*********************************************************
     *
     * RELATIONSHIP METHODS
     *
     *********************************************************/

    public function seatreserved()
    {
        return $this->hasMany('App\Seat');
    }

    public function users()
    {
        return $this->belongsTo('App\Users');
    }

    public function screening()
    {
        return $this->belongsTo('App\Screening');
    }

    public function pricing()
    {
        return $this->belongsTo('App\Pricing');
    }
}
