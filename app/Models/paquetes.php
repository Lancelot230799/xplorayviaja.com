<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paquetes extends Model
{
    use HasFactory;
    protected $fillable = ['idpaquete', 'idempleado', 'nombre', 'tipotiquet', 'traslados', 'diasdesalojamiento', 'alimentacion', 'capacidadequipaje', 'seguromedico', 'tour', 'fotopaquete', 'valor'];
    protected $primaryKey = 'idpaquete';
}
