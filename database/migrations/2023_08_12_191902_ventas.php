<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ventas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('modulo_2_id')->nullable();
            $table->string('producto')->nullable();
            $table->string('presentacion')->nullable();
            $table->string('genero')->nullable();
            $table->text('edad')->nullable();
            $table->string('cantidad')->nullable();
            $table->string('interes_inicial')->nullable();
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
        Schema::dropIfExists('ventas');
    }
}
