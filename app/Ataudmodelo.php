<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ataudmodelo extends Model
{

    protected $table = 'ataudmodelo';

    public function atauds()
    {
        return $this->hasMany('App\Ataud');
    }

}
