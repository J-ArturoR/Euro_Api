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
        Schema::create('flyers', function (Blueprint $table) {
            $table->id();
            $table->binary('img_portada')->nullable();
            $table->string('titulo_flyer')->nullable();
            $table->bigInteger('status_id')->unsigned()->nullable();
            $table->string('personalizable')->nullable();
            $table->date('fecha_apertura')->nullable();
            $table->date('fecha_vigencia')->nullable();
            $table->bigInteger('prioridad_id')->unsigned()->nullable();
            //$table->bigInteger('paquete_id')->unsigned()->nullable();
            $table->string('salidas')->nullable();
            $table->timestamps();

            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade');
            $table->foreign('prioridad_id')->references('id')->on('prioridads')->onDelete('cascade');
           // $table->foreign('paquete_id')->references('id')->on('paquetes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flyers');
    }
};
