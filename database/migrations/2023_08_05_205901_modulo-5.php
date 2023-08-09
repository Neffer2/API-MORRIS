<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Modulo5 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modulo-5', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->text('pdv')->nullable();
            
            $table->string('MLBROJO')->nullable();
            $table->string('MLBREDSELECTION')->nullable();
            $table->string('PIELROJA')->nullable();
            $table->string('CARIBE')->nullable();
            $table->string('LMAZUL')->nullable();
            $table->string('LMROJO')->nullable();

            $table->string('MLBGOLD')->nullable();
            $table->string('CHESTERFIELDAZUL')->nullable();
            $table->string('CHESTERFIELDBLANCO')->nullable();
            $table->string('LMSILVER')->nullable();

            $table->string('CHESTERFIELDGREEN')->nullable();

            $table->string('MLBFUSION_FRUTOSROJOS')->nullable();
            $table->string('MLBSUMMER_SANDIA')->nullable();
            $table->string('MLBEXOTIC_TUTIFRUTI')->nullable();
            $table->string('CHESTERFIELDPURPLE_FRUTOSROJOS')->nullable();
            $table->string('LMPURPLE_FRUTOSROJOS')->nullable();
            $table->string('LMWARREGO_SANDIA')->nullable();

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
        Schema::dropIfExists('modulo-5');
    }
}
