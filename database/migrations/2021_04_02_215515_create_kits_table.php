<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKitsTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::create('kits', function (Blueprint $table) {
         $table->id('kit_id');

         $table->string('kit_nombre', 100);
         $table->integer('kit_cantidad_piezas');
         $table->text('kit_descripcion');

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
      Schema::dropIfExists('kits');
   }
}
