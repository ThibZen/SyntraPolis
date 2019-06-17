<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    protected $table = 'client';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'id', 'name', 'email', 'password'
    ];

    /*********************************************************
     *
     * RELATIONSHIP METHODS
     *
     *********************************************************/

}
