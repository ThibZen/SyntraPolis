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
    public function genre()
    {
        return $this->hasOne('App\actor');
    }
}
