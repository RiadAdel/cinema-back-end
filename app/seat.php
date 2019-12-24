<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class seat extends Model
{
    //
    public function hall(){
        return $this->belongsTo('App\hall');
    }
    public function tickets(){
        return $this->hasMany('App\ticket');
    }
}
