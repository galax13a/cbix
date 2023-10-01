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
        Schema::create('admins', function (Blueprint $table) {
            $table->id(); // Campo id autoincremental
            $table->string('name'); // Campo name de tipo string
            $table->boolean('active')->default(false); // Campo active de tipo boolean
            $table->string('pic')->nullable(); // Campo pic de tipo string, que puede ser nulo
            $table->timestamps(); // Campos created_at y updated_at para el registro de fechas de creación y actualización
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
