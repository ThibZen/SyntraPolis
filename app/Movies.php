<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    protected $table = 'movies';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'street', 'number', 'zipcode', 'city', 'country', 'phone', 'email'
    ];


    /*********************************************************
     *
     * RELATIONSHIP METHODS
     *
     *********************************************************/

    /**
     * Users relationship (has many)
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
