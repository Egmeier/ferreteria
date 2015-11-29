<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    
      protected $table='ventas';
    protected $primaryKey="cod_venta";

    public function productos()
    {
        return $this->belongsToMany('App\producto','productosventa','cod_venta','id_producto');
    }

    protected $fillable = ['monto_total'];
}

