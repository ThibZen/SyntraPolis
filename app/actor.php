<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actor extends Model
{
    protected $table = 'actor';

    /*********************************************************
     *
     * RELATIONSHIP METHODS
     *
     *********************************************************/

    public function movieactors()
    {
        return $this->belongsToMany('App\Movieactors');
    }
}
