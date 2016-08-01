<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{

    protected $table = 'proveedor';

    public function capillas()
    {
        return $this->hasMany('App\Capilla');
    }

    public function urnas()
    {
        return $this->hasMany('App\Urna');
    }

    public function categoria()
    {
        return $this->belongsTo('App\Categorium');
    }

    public function atauds()
    {
        return $this->hasMany('App\Ataud');
    }


}
