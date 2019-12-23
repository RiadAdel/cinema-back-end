<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hall extends Model
{
    protected $table = "halls";

    public function seat(){
        return $this->hasMany('App\seat');
    }

    public function ticket(){
        return $this->belongsToMany('App\ticket','');
    }
}
