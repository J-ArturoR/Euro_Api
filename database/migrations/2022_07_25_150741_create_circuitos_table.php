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
        Schema::create('circuitos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo_circuito')->nullable();
            $table->bigInteger('tipo_id')->unsigned()->nullable()->default(0);
            $table->string('duracion')->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->string('ruta')->nullable();
            $table->string('salida')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('precio')->nullable();
            $table->string('denominacion')->nullable();
            $table->binary('img_portada')->nullable();
            $table->binary('img_mapa')->nullable();
            $table->string('pdf')->nullable();
            $table->string('vuelo')->nullable();
            $table->string('traslados')->nullable();
            $table->string('alojamiento')->nullable();
            $table->string('maleta')->nullable();
            $table->string('impuesto')->nullable();
            $table->string('pdf_condiciones')->nullable();
            $table->bigInteger('iconografia_id')->unsigned()->nullable()->default(0);
            $table->bigInteger('flyer_id')->unsigned()->nullable()->default(0);
            $table->bigInteger('catalogo_id')->unsigned()->nullable()->default(0);
            $table->string('tag')->nullable();
            $table->bigInteger('prioridad_id')->unsigned()->nullable()->default(0);
           // $table->bigInteger('itinerario_id')->unsigned()->nullable()->default(0);
            $table->bigInteger('incluye_id')->unsigned()->nullable()->default(0);
            $table->bigInteger('status_id')->unsigned()->nullable()->default(0);
            $table->bigInteger('categoria_id')->unsigned()->nullable()->default(0);
            $table->timestamps();

            $table->foreign('tipo_id')->references('id')->on('tipo__productos')->onDelete('cascade');
            $table->foreign('iconografia_id')->references('id')->on('iconografias')->onDelete('cascade');
            $table->foreign('flyer_id')->references('id')->on('flyers')->onDelete('cascade');
            $table->foreign('catalogo_id')->references('id')->on('catalogos')->onDelete('cascade');
            $table->foreign('prioridad_id')->references('id')->on('prioridads')->onDelete('cascade');
           // $table->foreign('itinerario_id')->references('id')->on('itinerario_circuitos')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade');
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
        Schema::dropIfExists('circuitos');
    }
};
