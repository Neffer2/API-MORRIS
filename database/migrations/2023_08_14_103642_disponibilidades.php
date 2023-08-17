<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Disponibilidades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disponibilidades', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('modulo_4_id')->nullable();
            $table->string('producto')->nullable();
            $table->string('presentacion')->nullable();
            $table->string('precio')->nullable();
            $table->string('stock')->nullable();
            $table->boolean('competencia')->nullable();
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
        Schema::dropIfExists('disponibilidades');
    }
}
