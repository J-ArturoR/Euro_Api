<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_destino')->nullable();
          //  $table->bigInteger('img_id')->unsigned()->nullable();
            $table->string('desc_corta')->nullable();
            $table->string('desc_larga')->nullable();
            $table->string('duracion')->nullable();
            $table->string('costo')->nullable();
            $table->string('vuelo')->nullable();
            $table->string('traslados')->nullable();
            $table->string('alojamiento')->nullable();
            $table->string('maleta')->nullable();
            $table->string('impuesto')->nullable();
           // $table->bigInteger('incluye_id')->unsigned()->nullable();
            $table->bigInteger('staus_id')->unsigned()->nullable();
            $table->bigInteger('categoria_id')->unsigned()->nullable();

            $table->timestamps();

           // $table->foreign('img_id')->references('id')->on('img_destinos')->onDelete('cascade');
            $table->foreign('staus_id')->references('id')->on('statuses')->onDelete('cascade');
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destinos');
    }
};
