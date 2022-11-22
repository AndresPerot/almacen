<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class detalleventa extends Model
{
    Use HasFactory;
    Use Softdeletes;
    protected $table = 'detalleventas';
    protected $primaryKey='id';

    protected $fillable = [
        'productos_id',
        'cantidad',
        'precio',
        'subtotal'
    ];

    public function producto(){
        return $this->belongsTo(producto::class);
    }

    //relacion uno a muchos inversa
    public function venta(){
        return $this->belongsTo(venta::class);
    }
}
