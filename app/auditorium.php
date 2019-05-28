<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class auditorium extends Model
{
    protected $table = 'auditorium';

    public function seat()
    {
        return $this->hasMany('App\Seat');
    }

    public function screening()
    {
        return $this->belongsToMany('App\Screening');
    }
}
