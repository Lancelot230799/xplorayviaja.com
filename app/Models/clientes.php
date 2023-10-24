<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    use HasFactory;
    protected $fillable = ['idcliente','idusers','nombre','apellido','identificacion','telefono','correoelectronico','contrasenia'];
    protected $primaryKey = 'idcliente';
}
