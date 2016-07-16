<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorium extends Model
{
    
    protected $table = 'categoria';

    public function proveedores()
    {
        return $this->hasMany('App\Proveedor');
    }

}
