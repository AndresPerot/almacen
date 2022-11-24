<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class venta extends Model
{


    public function user(){
        return $this->belongsTo((User::class));
    }

   // relaccion uno a muchos
    public function detallesventas(){
        return $this->hasMany('App\Models\detalleventa', 'detalleventas_id');
    }
}
