<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{

    protected $table = 'vehiculo';

    public function modelo()
    {
        return $this->belongsTo('App\Vehiculomodelo');
    }

    public function servicios()
    {
        return $this->hasMany('App\Servicio');
    }

}
