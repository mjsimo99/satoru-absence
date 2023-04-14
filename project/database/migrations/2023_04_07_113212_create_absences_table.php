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
        Schema::create('absences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seance_id');
            $table->foreign('seance_id')->references('id')->on('seances');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('students');
            $table->boolean('justify')->default(false);
            $table->text('comm_abs')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absences');
    }
};
