<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    // $protected $tabla = 'marcas'; politicas de nombre, en este caso no es necesario

    // protected $primaryKey = 'idMarca'; // para modificaciones find()

    // para insertar pide dos columnas: created y updated, con esta linea de codigo hace que se 'vaya' el error
    public $timestamps = false;

}
