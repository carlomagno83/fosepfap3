<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ataud extends Model
{

    protected $table = 'ataud';

    public function proveedor()
    {
        return $this->belongsTo('App\Proveedor');
    }

    public function color()
    {
        return $this->belongsTo('App\Color');
    }

    public function tamano()
    {
        return $this->belongsTo('App\Ataudtamano');
    }

    public function modelo()
    {
        return $this->belongsTo('App\Ataudmodelo');
    }

    public function servicios()
    {
        return $this->hasMany('App\Servicio');
    }

}
