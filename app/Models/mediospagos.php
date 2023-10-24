<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mediospagos extends Model
{
    use HasFactory;
    protected $fillable = ['idmediopago','tipomediopago','formapago'];
    protected $primaryKey = 'idmediopago';
}
