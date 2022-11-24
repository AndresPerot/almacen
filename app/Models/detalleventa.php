<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class detalleventa extends Model
{
    protected $table = 'detalleventas';
    protected $primaryKey='id';

    protected $fillable = [
        'id_venta',
        'descripcion',
        'producto',
        'codbarra',
        'cantidad',
        'precio'
    ];
}
