<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ordens';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha_orden', 'empresa', 'cedula', 'ruc', 'email', 'telefono', 'cel_movi', 'cel_claro', 'wts', 'direccion', 'fecha_posisionamiento', 'activo', 'imagen','clausula'];

    
}
