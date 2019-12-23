<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    protected $table = "movies";

    public function genres(){
        return $this->belongsToMany('App\genre','movie_genres','movie_id','genre_id');
    }
}
