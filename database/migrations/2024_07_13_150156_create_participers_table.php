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
        Schema::create('participers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idetudiant');
            $table->unsignedBigInteger('idFormation');
            $table->foreign('idetudiant')->references('id')->on('users');
            $table->foreign('idFormation')->references('id')->on('session_formations');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participers');
    }
};
