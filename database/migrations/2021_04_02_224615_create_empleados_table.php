<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::create('empleados', function (Blueprint $table) {
         $table->id();

         $table->string('emp_nombre', 100);
         $table->string('emp_app_paterno', 100);
         $table->string('emp_app_materno', 100);
         $table->string('emp_direccion', 100);
         $table->string('emp_lugar', 100);
         $table->enum("emp_estatus", [0, 1])->default(0);

         $table->timestamps();
      });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
      Schema::dropIfExists('empleados');
   }
}
