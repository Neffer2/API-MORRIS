<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Gifus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gifus', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('modulo_2_id')->nullable();
            $table->string('gifu')->nullable();
            $table->string('sabor')->nullable();
            $table->string('genero_gifu')->nullable();
            $table->text('edad_gifu')->nullable();
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
        Schema::dropIfExists('gifus');
    }
}
