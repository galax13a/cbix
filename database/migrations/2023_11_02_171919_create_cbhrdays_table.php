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
        Schema::create('cbhrdays', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('img_google');
            $table->string('img_sw');
            $table->string('img_other');
            $table->string('img_local');
            $table->date('date');
            $table->string('hrs');
            $table->string('region');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cbhrdays');
    }
};
