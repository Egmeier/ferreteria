<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordencompra extends Model
{
     protected $table='ordenescompra';
    protected $primaryKey="id_oc";
    public $timestamps = false;


     public function pernos()
    {
        return $this->hasMany('App\Perno','id_oc','id_oc');
    }

    public function cliente()
    {
        return $this->belongsTo('App\Cliente','id_cliente');
    }
}
