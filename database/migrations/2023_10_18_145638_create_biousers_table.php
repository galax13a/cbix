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
        Schema::create('biousers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('codex');
            $table->string('link');
            $table->boolean('pay');
            $table->unsignedBigInteger('user_id'); // Define la columna para la relación con users

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade'); // Esto establece la relación con la tabla users

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biousers');
    }
};
