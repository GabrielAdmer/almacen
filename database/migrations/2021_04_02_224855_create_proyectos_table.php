<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::create('proyectos', function (Blueprint $table) {
         $table->id();

         $table->string('proy_nombre', 100);
         $table->string('proy_ubicacion', 30);
         $table->enum("proy_estatus", [1, 2])->default(1);

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
      Schema::dropIfExists('proyectos');
   }
}
