<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $table='productos';
    protected $primaryKey="id_producto";
    public $timestamps = false;


    public function ventas()
    {
        return $this->belongsToMany('App\Venta','productosventa','id_producto','cod_venta')->withPivot('cantidad_venta');
    }
}
