<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('affect', function (Blueprint $table) {
            $table->primary(['id_user', 'id_module']);
        });
    }

    public function down()
    {
        Schema::table('affect', function (Blueprint $table) {
            $table->dropPrimary(['id_user', 'id_module']);
        });
    }
};
