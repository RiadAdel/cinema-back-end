<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{

    protected $table = "tickets";
    protected $fillable = ["user_username","seat_id","screening_id"];
    public function screening()
    {
        return $this->belongsTo('App\screening');
    }
    public function seat()
    {
        return $this->belongsTo('App\seat');
    }
}
