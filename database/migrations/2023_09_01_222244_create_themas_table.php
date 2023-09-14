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
        Schema::create('themas', function (Blueprint $table) {
            $table->id();
            $table->string('name');            
            $table->string('pic')->nullable();
            $table->string('slug_en')->unique();
            $table->string('slug_es')->unique()->nullable();
            $table->string('slug_fr')->unique()->nullable();
            $table->string('slug_de')->unique()->nullable();
            $table->string('slug_pt-BR')->unique()->nullable();            
            $table->string('slug_zh-CN')->unique()->nullable();  
            $table->string('slug_hi')->unique()->nullable();                     
            $table->text('htmlen')->nullable();
            $table->text('htmles')->nullable();
            $table->text('css')->nullable();
            $table->text('js')->nullable();
            $table->boolean('active')->default(false);
            $table->string('type')->default('_default')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('themas');
    }
};
