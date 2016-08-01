<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{

    protected $table = 'color';

    public function candelabros()
    {

        return $this->hasMany('App\Candelabro');

    }

    public function atauds()
    {

        return $this->hasMany('App\Ataud');

    }

}
