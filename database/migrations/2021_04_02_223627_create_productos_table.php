<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::create('productos', function (Blueprint $table) {
         $table->id();

         $table->string('pro_nombre', 100);
         $table->decimal('pro_precio', 8, 2)->default(0);
         $table->integer('pro_cantidad');
         $table->text('pro_descripcion');

         $table->enum("pro_estatus", [0, 1])->default(0);
         $table->enum("pro_protocolo_prueba", [0, 1])->default(0);


         $table->unsignedBigInteger("alm_id")->nullable();
         $table->unsignedBigInteger("cat_id")->nullable();
         $table->unsignedBigInteger("kit_id")->nullable();
         $table->unsignedBigInteger("prov_id")->nullable();

         $table->foreign("alm_id")->references("id")->on("almacens")->onDelete("cascade");
         $table->foreign("cat_id")->references("id")->on("categorias")->onDelete("cascade");
         $table->foreign("kit_id")->references("id")->on("kits")->onDelete("cascade");
         $table->foreign("prov_id")->references("id")->on("proveedors")->onDelete("cascade");

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
      Schema::dropIfExists('productos');
   }
}
