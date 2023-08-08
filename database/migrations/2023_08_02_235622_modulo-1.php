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
        Schema::create('modulo-1', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('marca')->nullable();
            $table->string('ciudad')->nullable();
            $table->text('pdv')->nullable();
            $table->string('mes')->nullable();
            $table->string('semana')->nullable();
            $table->string('novedades')->nullable();
            $table->longText('selfiePDV')->nullable();
            $table->longText('foto_fachada')->nullable();       
            $table->date('fechaVisita')->nullable();
            $table->string('estrato')->nullable();
            $table->string('barrio')->nullable();

            $table->longText('foto_cierre')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modulo-1');
    }
};
