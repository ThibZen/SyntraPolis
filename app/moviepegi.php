<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class moviepegi extends Model
{
    protected $table = 'moviepegi';

    public function pegi()
    {
        return $this->hasOne('App\pegi');
    }
}
