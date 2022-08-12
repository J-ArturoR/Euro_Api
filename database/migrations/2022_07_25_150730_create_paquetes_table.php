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
        Schema::create('paquetes', function (Blueprint $table) {
            $table->id();
            $table->binary('img_portada')->nullable();
            $table->string('pagado')->nullable();
            $table->bigInteger('prioridad_id')->unsigned()->nullable();
            $table->string('titulo_paquete')->nullable();
            $table->string('apertura')->nullable();
            $table->string('fin')->nullable();
            $table->bigInteger('status_id')->unsigned()->nullable();
            $table->bigInteger('tipo_id')->unsigned()->nullable();
            $table->string('vuelo')->nullable();
            $table->string('traslado')->nullable();
            $table->string('alojamiento')->nullable();
            $table->string('asistencia')->nullable();
            $table->string('seguro')->nullable();
            $table->string('impuesto')->nullable();
            $table->string('otros')->nullable();
            $table->string('descripcion')->nullable();
            $table->timestamps();

            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade');
            $table->foreign('prioridad_id')->references('id')->on('prioridads')->onDelete('cascade');
            $table->foreign('tipo_id')->references('id')->on('tipo__productos')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paquetes');
    }
};
