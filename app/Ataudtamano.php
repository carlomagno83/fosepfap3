<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ataudtamano extends Model
{

    protected $table = 'ataudtamano';

    public function atauds()
    {
        return $this->hasMany('App\Ataud');
    }

}
