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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('submit_by');
            $table->string('submit_when');
            $table->string('site_code');
            $table->string('Activity');
            $table->string('Uom');
            $table->string('Block');
            $table->string('Task');
            $table->time('Start');
            $table->time('End');
            $table->string('Mesin_id');
            $table->string('Fuel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};
