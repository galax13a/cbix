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
        Schema::create('adminpremiums', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('subcription', ['Daily', 'Monthly', 'Yearly']);
            $table->integer('days');        
            $table->integer('bots');    //cerox infinite     
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adminpremiums');
    }
};
