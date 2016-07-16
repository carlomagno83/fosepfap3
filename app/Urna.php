<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Urna extends Model
{

    protected $table = 'urna';

    public function proveedor()
    {
        return $this->belongsTo('App\Proveedor');
    }

}
