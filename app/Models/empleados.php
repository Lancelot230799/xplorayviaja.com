<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{
    use HasFactory;
    protected $fillable = ['idempleado','idusers','nombre','apellido','identificacion','correoelectronico','telefono','contrasenia','cargo','validate','fechaingreso'];
    protected $primaryKey = 'idempleado';
}
