<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
   use HasFactory;

   protected $guarded = [
      "id", "created_at", "updated_at"
   ];

   //relacion uno a muchos
   public function prestamos()
   {
      return $this->hasMany(Prestamo::class);
   }
}
