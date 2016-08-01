<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculomodelo extends Model
{

    protected $table = 'vehiculomodelo';

    public function marca()
    {
        return $this->belongsTo('App\Vehiculomarca');
    }

    public function vehiculos()
    {
        return $this->hasMany('App\Vehiculo');
    }

}
