<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'MovieID', 'Title', 'DescriptionShort', 'DescriptionLong', 'Runtime', 'ReleaseDate', 'Foto', 'Status', 'IMDBLink'
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

    public function movieactors()
    {
        return $this->hasMany('App\Movieactor');
    }

    public function moviedirectors()
    {
        return $this->hasMany('App\Moviedirector');
    }

    public function moviegenre()
    {
        return $this->hasMany('App\Moviegenre');
    }

    public function moviepegi()
    {
        return $this->hasMany('App\Moviepegi');
    }

    public function screening()
    {
        return $this->hasMany('App\Screening');
    }

}