<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table='clientes';
    protected $primaryKey="id_cliente";
    public $timestamps = false;

 public function ordenescompra()
    {
        return $this->hasMany('App\Ordencompra','id_oc','id_cliente');
    }
}

//Comentario1
