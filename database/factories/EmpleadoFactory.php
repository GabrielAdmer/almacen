<?php

namespace Database\Factories;

use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
   /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
   protected $model = Empleado::class;

   /**
    * Define the model's default state.
    *
    * @return array
    */
   public function definition()
   {
      return [
         'emp_nombre' => $this->faker->unique()->name(),
         'emp_app_paterno' => $this->faker->firstName(),
         'emp_app_materno' => $this->faker->firstName(),
         'emp_direccion' => $this->faker->address(),
         'emp_lugar' => $this->faker->city(),
         'emp_estatus' => $this->faker->randomElement(["0", "1"])
      ];
   }
}
