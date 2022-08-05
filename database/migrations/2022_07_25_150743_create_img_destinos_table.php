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
        Schema::create('img_destinos', function (Blueprint $table) {
            $table->id();
            $table->string('img_destino')->nullable();
            $table->binary('img')->nullable();
            $table->bigInteger('destino_id')->unsigned()->nullable();
            $table->string('ceo')->nullable();
            $table->timestamps();

            $table->foreign('destino_id')->references('id')->on('destinos')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('img_destinos');
    }
};
