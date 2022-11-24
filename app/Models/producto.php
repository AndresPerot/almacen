<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class producto extends Model
{
    use HasFactory;
    Use Softdeletes;
    
    protected $table = 'productos';
    protected $primaryKey='id';

    protected $fillable = [
        'codbarra',
        'descripcion',
        'precio',
        'id_proveedores',
        'stock'
    ];

    public function proveedorrelacionado(){
        return $this->belongsTo(proveedor::class, 'proveedorrelacionado');
    }

    public function detallesventas(){
        return $this->hasMany(detalleventa::class);
    }
}
