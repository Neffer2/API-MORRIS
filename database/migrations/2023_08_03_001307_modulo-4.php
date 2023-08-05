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
            $table->string('user_id')->nullable();
            $table->string('presente')->nullable();
            $table->string('LMBLUE')->nullable();
            $table->string('LMPURPLE')->nullable();
            $table->string('LMRED')->nullable();
            $table->string('LMSILVER')->nullable();
            $table->string('LMWARREGO')->nullable();
            $table->string('LUCKYSTRIKEBLUE10')->nullable();
            $table->string('LUCKYSTRIKEBLUE20')->nullable();
            $table->string('LUCKYSTRIKEFEST10')->nullable();
            $table->string('LUCKYSTRIKEFEST20')->nullable();
            $table->string('LUCKYSTRIKEGIN10')->nullable();
            $table->string('LUCKYSTRIKEGIN20')->nullable();
            $table->string('LUCKYSTRIKEMOJITO10')->nullable();
            $table->string('LUCKYSTRIKEMOJITO20')->nullable();
            $table->string('ROTHMANSAZUL10')->nullable();
            $table->string('ROTHMANSAZUL20')->nullable();
            $table->string('ROTHMANSVERDE10')->nullable();
            $table->string('ROTHMANSVERDE20')->nullable();
            $table->string('ROTHMANSBLANCO10')->nullable();
            $table->string('ROTHMANSBLANCO20')->nullable();
            $table->string('ROTHMANSPURPLE10')->nullable();
            $table->string('ROTHMANSPURPLE20')->nullable();
            $table->string('STARLITE10')->nullable();
            $table->string('STARLITE20')->nullable();
            $table->string('MALBOROROJO')->nullable();
            $table->string('MALBOROVERDE')->nullable();
            $table->string('MALBOROAZUL')->nullable();
            $table->string('CHESTERFIELDPURPLE10')->nullable();
            $table->string('CHESTERFIELDPURPLE20')->nullable();
            $table->string('CHESTERFIELDGREEN10')->nullable();
            $table->string('CHESTERFIELDGREEN20')->nullable();
            $table->string('CHESTERFIELDBLUE10')->nullable();
            $table->string('CHESTERFIELDBLUE20')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modulo-4');
    }
};
