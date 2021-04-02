<?php

namespace Database\Factories;

use App\Models\Proyecto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProyectoFactory extends Factory
{
   /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
   protected $model = Proyecto::class;

   /**
    * Define the model's default state.
    *
    * @return array
    */
   public function definition()
   {
      return [
         'proy_nombre' => $this->faker->unique()->randomElement(["proy 1", "proy 2", "proy 3", "proy 4", "proy 5"]),
         'proy_ubicacion' => $this->faker->unique()->word(1),
         'proy_estatus' => $this->faker->randomElement([1, 2]),
      ];
   }
}
