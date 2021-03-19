<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    public static $TIPOS_MOVIMIENTOS = ["Entrada","Salida"];
    use HasFactory;
}
