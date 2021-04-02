<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
   use HasFactory;

   //relacion uno a muchos
   public function productos()
   {
      return $this->hasMany(Producto::class);
   }
}
