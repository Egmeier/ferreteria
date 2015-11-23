<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ordencompra extends Model
{
    protected $table='ordenescompra';
    protected $primaryKey="id_oc";
    public $timestamps = false;
}
