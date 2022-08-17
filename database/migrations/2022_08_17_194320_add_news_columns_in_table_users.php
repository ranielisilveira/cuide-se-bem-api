<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('state');
            $table->string('city');
            $table->date('birth_date');
            $table->string('gender');
            $table->string('weight');
            $table->string('height');
            $table->jsonb('chronic_diseases');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['state', 'city', 'birth_date', 'gender', 'weight', 'height', 'chronic_diseases']);
        });
    }
};
