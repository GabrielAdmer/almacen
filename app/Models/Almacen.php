<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
   use HasFactory;

   protected $fillable = [
      "alm_nombre", "alm_ubicacion"
   ];

   //relacion uno a muchos
   public function productos()
   {
      return $this->hasMany(Producto::class);
   }
}
