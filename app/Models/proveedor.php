<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class proveedor extends Model
{

   Use HasFactory;
   Use Softdeletes;
   
    protected $table= 'proveedores';
    protected $primaryKey='id';

    protected $fillable = [
      'nombre',
      'vendedor',
      'contacto'
  ];
   
   public function productos(){
      return $this->hasMany(producto::class);
   }
}
