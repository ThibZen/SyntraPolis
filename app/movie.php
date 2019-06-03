<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    protected $table = 'movie';

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function moviedirectors()
    {
        return $this->hasMany('App\Moviedirector');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function moviegenre()
    {
        return $this->hasMany('App\Moviegenre');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function moviepegi()
    {
        return $this->hasMany('App\Moviepegi');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function screening()
    {
        return $this->hasMany('App\Screening');
    }

}
