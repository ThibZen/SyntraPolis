<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class moviegenre extends Model
{
    protected $table = 'moviegenre';

    public function genre()
    {
        return $this->hasOne('App\genre');
    }
}
