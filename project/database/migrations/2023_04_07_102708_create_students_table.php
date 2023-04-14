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
        Schema::create('students', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('cne');
            $table->string('nom_etu');
            $table->string('prenom_etu');
            $table->date('dateN_etu');
            $table->string('villeN_etu');
            $table->string('ville_etu');
            $table->string('adresse_etu');
            $table->string('photo_etu')->nullable();
            $table->string('email_etu');
            $table->integer('phone_etu');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
