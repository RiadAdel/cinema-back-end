<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userType extends Model
{
    protected $table = "user_types";

    

    public function User(){
        return $this->hasMany('App\User');
    }
}
