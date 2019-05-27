<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movieactors extends Model
{
    protected $table = 'movieactors';

    public function genre()
    {
        return $this->hasOne('App\actor');
    }
}
