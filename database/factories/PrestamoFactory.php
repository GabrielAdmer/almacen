<?php

namespace Database\Factories;

use App\Models\Empleado;
use App\Models\Prestamo;
use App\Models\Proyecto;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PrestamoFactory extends Factory
{
   /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
   protected $model = Prestamo::class;

   /**
    * Define the model's default state.
    *
    * @return array
    */
   public function definition()
   {
      return [
         'pre_estado_prestamo' => $this->faker->randomElement(["buen estado", "regular", "mal-estado"]),
         'pre_estado_devolucion' =>  $this->faker->randomElement(["buen estado", "regular", "mal-estado"]),
         'pre_description_prestamo' => $this->faker->word(4),
         'pre_description_devolucion' => $this->faker->word(4),
         'pre_estatus' => $this->faker->randomElement(["devuelto", "prestamo"]),

         'emp_id' => Empleado::all()->random()->emp_id,
         'proy_id' => Proyecto::all()->random()->proy_id,
         'usu_id' => User::all()->random()->id,
      ];
   }
}
