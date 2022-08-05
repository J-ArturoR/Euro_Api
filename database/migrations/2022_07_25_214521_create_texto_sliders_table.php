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
        Schema::create('texto_sliders', function (Blueprint $table) {
            $table->id();
            $table->string('texto')->nullable();
           // $table->bigInteger('status_id')->unsigned()->nullable();

            $table->foreignId('status_id')
                  ->nullable()->constrained('statuses')->cascadeOnUpdate()->nullOnDelete();
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
        Schema::dropIfExists('texto_sliders');
    }
};
