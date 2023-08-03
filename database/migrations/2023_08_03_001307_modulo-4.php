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
        Schema::create('modulo-4', function (Blueprint $table) {
            $table->id();
            $table->string('presente')->nullable();
            $table->string('inv_marca')->nullable();
            $table->string('agotados_marca')->nullable();
            $table->string('tipo_visibilidad_competencia')->nullable();
            $table->string('foto_visibilidad_marca')->nullable();
            $table->string('foto_visibilidad_competencia')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};