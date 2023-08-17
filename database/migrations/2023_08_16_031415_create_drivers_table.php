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
        Schema::create('drivers', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('name')->nullable();
            $table->integer('age')->nullable();
            $table->string('nationality')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('hometown')->nullable();
            $table->integer('race_started')->nullable();
            $table->integer('race_entried')->nullable();
            $table->integer('wins')->nullable();
            $table->integer('podiums')->nullable();
            $table->integer('pole_positions')->nullable();
            $table->integer('fastest_laps')->nullable();
            $table->float('race_win_percentage')->nullable();
            $table->float('podium_percentage')->nullable();
            $table->integer('driverdb_score')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};
