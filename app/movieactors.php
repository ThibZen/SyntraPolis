<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movieactors extends Model
{
    protected $table = 'movieactors';

    /*********************************************************
     *
     * RELATIONSHIP METHODS
     *
     *********************************************************/

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function actor()
    {
        return $this->hasOne('App\actor');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function movie()
    {
        return $this->hasOne('App\movie');
    }
}
