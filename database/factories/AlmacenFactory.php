<?php

namespace Database\Factories;

use App\Models\Almacen;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlmacenFactory extends Factory
{
   /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
   protected $model = Almacen::class;

   /**
    * Define the model's default state.
    *
    * @return array
    */
   public function definition()
   {
      return [
         'alm_nombre' => $this->faker->unique()->randomElement(["jauja", "huncayo", "lima"]),
         'alm_ubicacion' => $this->faker->unique()->word(1)
      ];
   }
}
