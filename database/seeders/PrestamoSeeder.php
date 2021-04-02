<?php

namespace Database\Seeders;

use App\Models\Prestamo;
use Illuminate\Database\Seeder;

class PrestamoSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      $prestamos = Prestamo::factory(20)->create();

      foreach ($prestamos as $prestamo) {
         $prestamo->productos()->attach([
            rand(1, 3),
            rand(4, 6),
            rand(7, 9),
            rand(10, 12),
            rand(13, 16),
            rand(17, 20),
         ]);
      }
   }
}
