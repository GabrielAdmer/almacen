<?php

namespace Database\Factories;

use App\Models\Almacen;
use App\Models\Categoria;
use App\Models\Kit;
use App\Models\Producto;
use App\Models\Proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
   /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
   protected $model = Producto::class;

   /**
    * Define the model's default state.
    *
    * @return array
    */
   public function definition()
   {
      return [
         'pro_nombre' => $this->faker->unique()->word(1),
         'pro_precio' => $this->faker->numberBetween(1, 100),
         'pro_cantidad' => $this->faker->numberBetween(1, 100),
         'pro_descripcion' => $this->faker->word(4),
         'pro_protocolo_prueba' => $this->faker->randomElement(["0", "1"]),
         'pro_estatus' => $this->faker->randomElement(["0", "1"]),
         'alm_id' => Almacen::all()->random()->alm_id,
         'cat_id' => Categoria::all()->random()->cat_id,
         'kit_id' => Kit::all()->random()->kit_id,
         'prov_id' => Proveedor::all()->random()->prov_id,
      ];
   }
}
