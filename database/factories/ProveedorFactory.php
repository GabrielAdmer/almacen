<?php

namespace Database\Factories;

use App\Models\Proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProveedorFactory extends Factory
{
   /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
   protected $model = Proveedor::class;

   /**
    * Define the model's default state.
    *
    * @return array
    */
   public function definition()
   {
      return [
         'prov_nombre' => $this->faker->unique()->randomElement(["prov 1", "prov 2", "prov 3", "prov 4"]),
      ];
   }
}
