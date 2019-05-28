<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pricing extends Model
{
    protected $table = 'pricing';

    /*********************************************************
     *
     * RELATIONSHIP METHODS
     *
     *********************************************************/


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function screening()
    {
        return $this->hasMany('App\Screening');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function reservation()
    {
        return $this->belongsToMany('App\Reservation');
    }
}
