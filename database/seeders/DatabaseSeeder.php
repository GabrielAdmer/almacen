<?php

namespace Database\Seeders;

use App\Models\Almacen;
use App\Models\Categoria;
use App\Models\Empleado;
use App\Models\Kit;
use App\Models\Producto;
use App\Models\Proveedor;
use App\Models\Proyecto;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   /**
    * Seed the application's database.
    *
    * @return void
    */
   public function run()
   {
      // \App\Models\User::factory(10)->create();
      User::create([
         'name' => 'gabriel',
         'email' => 'g@hotmail.com',
         'password' => bcrypt('12345678')
      ]);

      Categoria::factory(4)->create();
      Almacen::factory(3)->create();
      Kit::factory(5)->create();
      Proveedor::factory(4)->create();
      Producto::factory(40)->create();
      Empleado::factory(5)->create();
      Proyecto::factory(5)->create();
      $this->call(PrestamoSeeder::class);



      // Proveedor::factory(4)->create();
      // $this->call(ProductoSeeder::class);
   }
}
