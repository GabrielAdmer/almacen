<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
   use HasFactory;

   protected $guarded = [
      "id", "created_at", "updated_at"
   ];

   //relacion de muchos a uno
   public function almacen()
   {
      return $this->belongsTo(Almacen::class);
   }

   //relacion de muchos a uno
   public function categoria()
   {
      return $this->belongsTo(Categoria::class);
   }

   //relacion de muchos a uno
   public function kit()
   {
      return $this->belongsTo(Kit::class);
   }

   //realcion de mucho a uno
   public function proveedores()
   {
      return $this->belongsTo(Proveedor::class);
   }

   //realcion de mucho a muchos
   public function prestamos()
   {
      return $this->belongsToMany(Prestamo::class);
   }
}
