<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class screening extends Model
{
    protected $table ="screening";

    public function tickets()
    {
        return $this->hasMany('App\ticket');
    }
}
