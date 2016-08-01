<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{

    protected $table = 'servicio';

    public function vehiculo()
    {
        return $this->belongsTo('App\Vehiculo');
    }

    public function ataud()
    {
        return $this->belongsTo('App\Ataud');
    }

}
