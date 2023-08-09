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
        Schema::create('sociallinks', function (Blueprint $table) {
            $table->id();
            $table->string('icon');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('social_media_id');
            $table->string('link'); // Enlace al perfil del usuario en la red social
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
                  
            $table->foreign('social_media_id')
                  ->references('id')
                  ->on('social_media')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_links');
    }
};
