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
        Schema::create('session_formations', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('image');
            $table->string('description');
            $table->string('duree');
            $table->string('dateDebut');
            $table->string('dateFin');
            $table->unsignedBigInteger('id_admin');
            $table->unsignedBigInteger('id_etudiant');
            $table->foreign('id_admin')->references('id')->on('users');
            $table->foreign('id_etudiant')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('session_formations');
    }
};
