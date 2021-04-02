<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
   use HasFactory;


   //relacion de muchos a uno
   public function empleado()
   {
      return $this->belongsTo(Empleado::class);
   }

   //relacion de muchos a uno
   public function proyecto()
   {
      return $this->belongsTo(Proyecto::class);
   }

   //relacion de muchos a uno
   public function usuario()
   {
      return $this->belongsTo(User::class);
   }

   //realcion de mucho a muchos
   public function productos()
   {
      return $this->belongsToMany(Producto::class);
   }
}
