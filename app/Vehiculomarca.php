<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculomarca extends Model
{

    protected $table = 'vehiculomarca';

    public function modelos()
    {
        return $this->hasMany('App\Vehiculomodelo');
    }

}
