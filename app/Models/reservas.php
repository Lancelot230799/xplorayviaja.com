<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservas extends Model
{
    use HasFactory;
    protected $fillable = ['idreserva','idciudad','iddepartamento','idpaquete','idcliente','idempleado','idmediopago','idgastoadicional','descripcion','cantidadpersona','fechallegada','fechasalida','comprobantepago'];
    protected $primaryKey = 'idreserva';
}
