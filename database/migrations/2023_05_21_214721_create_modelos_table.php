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
        Schema::create('modelos', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index();
            $table->string('nick');
            $table->string('nick2')->nullable();
            $table->string('email')->nullable();
            $table->string('dni')->nullable();
            $table->string('wsp')->nullable();
            $table->double('porce')->defaultValue(50);
            $table->unsignedBigInteger('typemodelo_id'); 
            $table->foreign('typemodelo_id')->references('id')->on('typemodelos')->onDelete('cascade');
          
            $table->string('img')->nullable();
        
            $table->boolean('active')->default(true);
            $table->unsignedBigInteger('user_id'); 
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modelos');
    }
};
