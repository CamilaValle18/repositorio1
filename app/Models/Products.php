<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    #esta es la variable que hace referencia a una tabla 
    protected $table =´se coloca el nombre de como este en msqyl´;

    #esta es la variable que indica la lave primaria
    protected $primarykey =´Va el id´

    #hace referencia a created_at y updated_at, es tipo publica
    $timestamps = true;

    #especificacion de las columnas dentro de la tabla
    protected $fillable 0{
        ´name´, ´descripcion´, ´price´, ´stick´
    }

    #ocualta columnas del modelo
    protected $hidden =[çreate_aat´, ´updated_at´]



}
