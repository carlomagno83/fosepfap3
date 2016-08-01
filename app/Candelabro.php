<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candelabro extends Model
{

    protected $table = 'candelabro';

    public function capillas()
    {
        return $this->hasMany('App\Capilla');
    }

    public function color()
    {
        return $this->belongsTo('App\Color');
    }

}
