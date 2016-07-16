<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{

    protected $table = 'proveedor';

    public function Categoria()
    {
        return $this->belongsTo('App\Categorium');
    }

    public function urnas()
    {
        return $this->hasMany('App\Urna');
    }    

}
