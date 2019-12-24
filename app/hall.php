<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hall extends Model
{
    protected $table = "halls";

    public function seat(){
        return $this->hasMany('App\seat');
    }

    public function movie(){
        return $this->belongsToMany('App\movie','screening','hall','movie_id')->withPivot('screening_time','screening_day','id')->withTimestamps();
    }
}
