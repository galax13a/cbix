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
        Schema::create('wchaturbates', function (Blueprint $table) {
            $table->id();
            $table->string('region');            
            $table->dateTime('date');
            $table->string('username');
            $table->string('gender');
            $table->text('location')->nullable();
            $table->string('current_show')->nullable();
            $table->boolean('is_new');
            $table->integer('num_users');
            $table->integer('num_followers');
            $table->text('spoken_languages')->nullable();
            $table->string('display_name')->nullable();
            $table->date('birthday')->nullable();
            $table->text('room_subject')->nullable();
            $table->json('tags')->nullable();
            $table->boolean('is_hd');            
            $table->integer('age');
            $table->integer('seconds_online');
            $table->string('image_url')->nullable();
            $table->string('hrs')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wchaturbates');
    }
};
