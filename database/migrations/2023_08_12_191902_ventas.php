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

            $table->string('preferenciaMarca')->nullable();
            $table->string('preferenciaOtroText')->nullable();

            $table->string('preferenciaCompetencia')->nullable();
            $table->string('preferenciaCompOtroText')->nullable();

            $table->string('mensajeMarcaSfp')->nullable();
            $table->string('sfpMarca')->nullable();

            $table->string('mensajeMarcaCcs')->nullable();
            $table->string('ccsMarca')->nullable();

            $table->string('intervencion1')->nullable();
            $table->string('intervencion2')->nullable();

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
