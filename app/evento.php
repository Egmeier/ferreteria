<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class evento extends Model
{
    protected $table='eventos';
    protected $primaryKey="id_evento";
    public $timestamps = false;
}