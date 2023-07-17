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
        Schema::create('uploadfolders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('active')->default(false);
            $table->unsignedBigInteger('user_id'); 
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
        
        Schema::create('uploadimages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('uploadfolder_id')->nullable();
            $table->string('name');
            $table->unsignedBigInteger('size');
            $table->string('url');
            $table->string('url_s3')->nullable();
            $table->string('url_s4')->nullable();
            $table->string('extension');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('uploadfolder_id')->references('id')->on('uploadfolders')->onDelete('cascade');
            $table->timestamps();
        });

      Schema::create('uploadsizes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('width');
            $table->boolean('active')->default(false);            
            $table->timestamps();
        });       
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uploadimages');
        Schema::dropIfExists('uploadfolders');
        Schema::dropIfExists('uploadsizes');
    }
};
