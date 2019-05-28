<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class moviepegi extends Model
{
    protected $table = 'moviepegi';

    /*********************************************************
     *
     * RELATIONSHIP METHODS
     *
     *********************************************************/

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pegi()
    {
        return $this->hasOne('App\pegi');
    }
}
