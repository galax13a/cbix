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
        Schema::create('apichaturs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('api');
            $table->boolean('active')->default(false);
            $table->timestamps();    
            $table->unsignedBigInteger('user_id');        
            $table->unsignedBigInteger('page_id');   
            $table->foreign('page_id')
            ->references('id')
            ->on('pages');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apichaturs');
    }
};
