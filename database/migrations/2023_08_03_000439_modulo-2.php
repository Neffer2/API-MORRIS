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
            $table->text('pdv')->nullable();
            $table->string('num_abordadas')->nullable();
            $table->string('num_ventas_1')->nullable();
            $table->string('num_ventas_2')->nullable();
            $table->string('genero_1')->nullable();
            $table->string('genero_2')->nullable();
            $table->string('edad_1')->nullable();
            $table->string('edad_2')->nullable();
            $table->string('gifus')->nullable();
            $table->string('MLBROJO')->nullable();
            $table->string('MLBROJO_PRESENT')->nullable();
            $table->string('MLBREDSELECTION')->nullable();
            $table->string('MLBREDSELECTION_PRESENT')->nullable();
            $table->string('PIELROJA')->nullable();
            $table->string('PIELROJA_PRESENT')->nullable();
            $table->string('CARIBE')->nullable();
            $table->string('CARIBE_PRESENT')->nullable();
            $table->string('LMAZUL')->nullable();
            $table->string('LMAZUL_PRESENT')->nullable();
            $table->string('LMROJO')->nullable();
            $table->string('LMROJO_PRESENT')->nullable();
            $table->string('MLBGOLD')->nullable();
            $table->string('MLBGOLD_PRESENT')->nullable();
            $table->string('CHESTERFIELDAZUL')->nullable();
            $table->string('CHESTERFIELDAZUL_PRESENT')->nullable();
            $table->string('CHESTERFIELDBLANCO')->nullable();
            $table->string('CHESTERFIELDBLANCO_PRESENT')->nullable();
            $table->string('LMSILVER')->nullable();
            $table->string('LMSILVER_PRESENT')->nullable();
            $table->string('CHESTERFIELDGREEN')->nullable();
            $table->string('CHESTERFIELDGREEN_PRESENT')->nullable();
            $table->string('MLBFUSION_FRUTOSROJOS')->nullable();
            $table->string('MLBFUSION_FRUTOSROJOS_PRESENT')->nullable();
            $table->string('MLBSUMMER_SANDIA')->nullable();
            $table->string('MLBSUMMER_SANDIA_PRESENT')->nullable();
            $table->string('MLBEXOTIC_TUTIFRUTI')->nullable();
            $table->string('MLBEXOTIC_TUTIFRUTI_PRESENT')->nullable();
            $table->string('CHESTERFIELDPURPLE_FRUTOSROJOS')->nullable();
            $table->string('CHESTERFIELDPURPLE_FRUTOSROJOS_PRESENT')->nullable();
            $table->string('LMPURPLE_FRUTOSROJOS')->nullable();
            $table->string('LMPURPLE_FRUTOSROJOS_PRESENT')->nullable();
            $table->string('LMWARREGO_SANDIA')->nullable();
            $table->string('LMWARREGO_SANDIA_PRESENT')->nullable();
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
