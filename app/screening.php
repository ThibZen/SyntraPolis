<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class screening extends Model
{
    protected $table = 'screening';

    protected $fillable = [
        'id','movie_id'
    ];

    /*********************************************************
     *
     * RELATIONSHIP METHODS
     *
     *********************************************************/

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservation()
    {
        return $this->hasMany('App\Reservation');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pricing()
    {
        return $this->hasOne('App\Pricing');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function seatreserved()
    {
        return $this->hasMany('App\seatreserved');
    }

    public function movie(){
        return $this->belongsToMany('App\movie');
    }
}
