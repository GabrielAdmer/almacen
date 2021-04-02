<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamosTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::create('prestamos', function (Blueprint $table) {
         $table->id('pre_id');

         $table->enum("pre_estado_prestamo", ['buen estado', 'regular', 'mal-estado'])->default('buen estado');
         $table->enum("pre_estado_devolucion", ['buen estado', 'regular', 'mal-estado'])->default('buen estado');

         $table->text('pre_description_prestamo')->nullable();
         $table->text('pre_description_devolucion')->nullable();

         $table->enum('pre_estatus', ['devuelto', 'prestamo'])->default('devuelto');

         $table->unsignedBigInteger("emp_id");
         $table->unsignedBigInteger("proy_id");
         $table->unsignedBigInteger("usu_id");



         $table->foreign("emp_id")->references("emp_id")->on("empleados")->cascadeOnDelete();
         $table->foreign("proy_id")->references("proy_id")->on("proyectos")->cascadeOnDelete();
         $table->foreign("usu_id")->references("id")->on("users")->cascadeOnDelete();
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
      Schema::dropIfExists('prestamos');
   }
}