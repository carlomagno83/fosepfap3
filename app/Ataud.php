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

}
