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
        Schema::create('formation_distances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idSessionFormation');
            $table->foreign('idSessionFormation')->references('id')->on('session_formations');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formation_distances');
    }
};
