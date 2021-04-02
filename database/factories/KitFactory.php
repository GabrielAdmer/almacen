<?php

namespace Database\Factories;

use App\Models\Kit;
use Illuminate\Database\Eloquent\Factories\Factory;

class KitFactory extends Factory
{
   /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
   protected $model = Kit::class;

   /**
    * Define the model's default state.
    *
    * @return array
    */
   public function definition()
   {
      return [
         'kit_nombre' => $this->faker->unique()->randomElement(["kit 1", "kit 2", "kti 3", "kit 4", "kit 5"]),
         'kit_cantidad_piezas' => $this->faker->numberBetween(1, 7),
         'kit_descripcion' => $this->faker->word(4)
      ];
   }
}
