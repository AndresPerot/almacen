<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class venta extends Model
{
    Use HasFactory;
    Use Softdeletes;

    protected $table = 'ventas';

    protected $primaryKey='id';

    protected $fillable = [
        'user_id',
        'detalleventas_id',
        'formapago',
        'total',
        'pago',
        'vuelto'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

   // relaccion uno a muchos
    public function detallesventas(){
        return $this->hasMany(detalleventa::class);
    }
}
