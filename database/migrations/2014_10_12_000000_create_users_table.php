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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('role', array('0','1','2'))->default('0');
            $table->string('image');
            $table->string('Adresse')->nullable();
            $table->string('NumTelephone')->nullable();
            $table->string('dateDeNaissance')->nullable();
            $table->string('niveauAcademique')->nullable();
            $table->string('filiereAcademique')->nullable();
            $table->enum('Genre',array('H','F'))->nullable();
            $table->string('isDelete')->default('0');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
