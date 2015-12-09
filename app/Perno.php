<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perno extends Model
{
    //
    protected $table = 'pernos';
    protected $primaryKey="id_perno";
    public $timestamps = false;
    //3 ultimas lineas no fueron ingresadas por consola

     public function ordencompra()
    {
        return $this->belongsTo('App\Ordencompra','id_oc');
    }
}
