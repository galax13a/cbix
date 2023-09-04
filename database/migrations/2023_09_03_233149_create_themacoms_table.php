<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('themacoms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('pic')->nullable();
            $table->string('slug')->unique();
            $table->text('codex');                  
            $table->boolean('active')->default(false);
            $table->enum('type', ['static', 'dinamic', 'wire'])->default('static')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('themacoms');
    }
};
