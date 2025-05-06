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
        Schema::table('trains', function (Blueprint $table) {
            $table->string('company', 50)->change();
            $table->string('departure_station', 50)->change();
            $table->string('arrival_station', 50)->change();
            $table->dateTime('departure_time')->change();
            $table->dateTime('arrival_time')->change();
            $table->string('train_code', 50)->change();
            $table->integer('number_of_carriages')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->string('company', 50)->change();
            $table->string('departure_station')->change();
            $table->string('arrival_station')->change();
            $table->string('departure_time')->change();
            $table->string('arrival_time')->change();
            $table->string('train_code')->change();
            $table->string('number_of_carriages')->change();
        });
    }
};
