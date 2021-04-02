<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamoProductoTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::create('prestamo_producto', function (Blueprint $table) {
         $table->id();

         $table->unsignedBigInteger('prestamo_id');
         $table->unsignedBigInteger('producto_id');

         $table->foreign("prestamo_id")->references("pre_id")->on("prestamos")->cascadeOnDelete();
         $table->foreign("producto_id")->references("pro_id")->on("productos")->cascadeOnDelete();

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
      Schema::dropIfExists('prestamo_producto');
   }
}
