<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Credits Table
        Schema::create('credits', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable;
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->integer('amount');
            $table->timestamps();
        });

        // Credits Goals Table
        Schema::create('credits0goals', function (Blueprint $table) {
            $table->id();
            $table->string('goal');
            $table->integer('credits_reward');
            $table->timestamps();
        });

        // Credits Levels Table
        Schema::create('credits0levels', function (Blueprint $table) {
            $table->id();
            $table->string('level_name');
            $table->integer('required_credits');
            $table->timestamps();
        });

        // User Goals Table
        Schema::create('credits0user0goals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('goal_id')->constrained('credits0goals')->onDelete('cascade');
            $table->boolean('is_completed')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credits0user0goals');
        Schema::dropIfExists('credits0levels');
        Schema::dropIfExists('credits0goals');
        Schema::dropIfExists('credits');
    }
}
