<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    protected $table = "genres";
    public function movies()
    {
        return $this->belongsToMany('App\movie','movie_genres','genre_id','movie_id');
    }
}
