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
        Schema::create('protocolos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_protocolo')->nullable();
            $table->binary('img')->nullable();
            $table->string('archivo')->nullable();
          
            $table->string('tags')->nullable();
            $table->bigInteger('prioridad_id')->unsigned()->nullable();
            $table->bigInteger('tipo_protocoloid')->unsigned()->nullable();
            $table->bigInteger('status_id')->unsigned()->nullable();

            $table->foreign('prioridad_id')->references('id')->on('prioridads')->onDelete('cascade');
            $table->foreign('tipo_protocoloid')->references('id')->on('tipo_protocolos')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade');
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
        Schema::dropIfExists('protocolos');
    }
};
