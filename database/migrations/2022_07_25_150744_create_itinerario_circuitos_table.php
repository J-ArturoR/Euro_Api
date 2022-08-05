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
        Schema::create('itinerario_circuitos', function (Blueprint $table) {
            $table->id();
            $table->date('dia')->nullable();
            $table->string('lugar')->nullable();
            $table->string('actividad')->nullable();
            $table->bigInteger('status_id')->unsigned()->nullable();
            $table->bigInteger('circuito_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade');
            $table->foreign('circuito_id')->references('id')->on('circuitos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itinerario_circuitos');
    }
};
