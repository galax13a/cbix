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
            $table->float('value')->defaultValue(0);
            $table->text('content');
            $table->enum('plan', ['free','gifts', 'premium', 'subcription']);
            $table->enum('subcription', ['daily', 'monthly', 'yearly']);
            $table->string('time',66)->default('1 day')->nullable();        
            $table->integer('bots');    //cerox infinite     
            $table->string('linkpay')->nullable();
            $table->boolean('active');
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
