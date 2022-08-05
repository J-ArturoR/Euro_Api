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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_slider')->nullable();
            $table->binary('img_pc')->nullable();
            $table->binary('img_movil')->nullable();
            $table->string('ceo')->nullable();
            $table->string('vigencia')->nullable();
            $table->string('prioridad')->nullable();
            $table->string('link')->nullable();
            $table->bigInteger('status_id')->unsigned()->nullable();
            $table->bigInteger('prioridad_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade');
            $table->foreign('prioridad_id')->references('id')->on('prioridads')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sliders');
    }
};
