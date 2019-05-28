<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pricing extends Model
{
    protected $table = 'pricing';

    public function screening()
    {
        return $this->hasMany('App\Screening');
    }

    public function reservation()
    {
        return $this->belongsToMany('App\Reservation');
    }
}
