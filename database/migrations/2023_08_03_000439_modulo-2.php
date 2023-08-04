<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('modulo-2', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('marca')->nullable();
            $table->string('num_abordadas')->nullable();
            $table->string('num_ventas')->nullable();
            $table->string('tipo_producto')->nullable();
            $table->string('num_ventas_competencia')->nullable();
            $table->string('presentacion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modulo-2');
    }
};
