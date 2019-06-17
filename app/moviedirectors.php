<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class moviedirectors extends Model
{
    protected $table = 'moviedirectors';

    /*********************************************************
     *
     * RELATIONSHIP METHODS
     *
     *********************************************************/

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function director()
    {
        return $this->hasOne('App\director');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function movie()
    {
        return $this->hasOne('App\movie');
    }
}
