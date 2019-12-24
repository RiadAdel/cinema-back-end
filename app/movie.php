<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    protected $table = "movies";

    public function genres(){
        return $this->belongsToMany('App\genre','movie_genres','movie_id','genre_id');
    }

    public function hall(){
        return $this->belongsToMany('App\hall','screening','movie_id','hall_id')->withPivot('screening_time','screening_day','id')->withTimestamps();
    }
}
