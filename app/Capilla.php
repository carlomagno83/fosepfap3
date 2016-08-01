<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capilla extends Model
{

    protected $table = 'capilla';

    public function proveedor()
    {
        return $this->belongsTo('App\Proveedor');
    }
    
    public function candelabro()
    {
        return $this->belongsTo('App\Candelabro');
    }

}
