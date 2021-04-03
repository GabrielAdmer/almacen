<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kit extends Model
{
   use HasFactory;

   protected $fillable = [
      "kit_nombre", "kit_cantidad_piezas", "kit_descripcion"
   ];


   public function productos()
   {
      return $this->hasMany(Producto::class);
   }
}
