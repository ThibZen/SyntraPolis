<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class moviegenre extends Model
{
    protected $table = 'moviegenre';

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
        return $this->hasOne('App\genre');
    }
}
