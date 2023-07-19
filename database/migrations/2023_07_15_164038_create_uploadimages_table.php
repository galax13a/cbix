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
            $table->enum('storage', ['local', 'cloud', 'bi'])->default('local')->nullable();
            $table->enum('storage_host', ['s3', 'google', 'do'])->nullable();
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
        
        Schema::create('uploadthumbnails', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('width');
            $table->integer('height');
            $table->boolean('active')->default(false);            
            $table->timestamps();
        });  

        Schema::create('uploadplans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('megas');
            $table->float('price_any')->default(0);
            $table->float('price_mes')->default(0);
            $table->string('des_es')->nullable();
            $table->string('des_en')->nullable();
            $table->enum('plan_filex', ['video', 'pics', 'files', 'links']);
            $table->enum('plan', ['free', 'pro', 'system']);
            $table->boolean('active')->default(false);
            $table->timestamps();
        }); 

        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('uploadplan_id')->nullable();
            $table->foreign('uploadplan_id')->references('id')->on('uploadplans')->onDelete('set null');
        });

        Schema::create('paymentstorage', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('plan_id');
            $table->float('pay');
            $table->date('datex'); // Nuevo campo fecha
            $table->enum('plan', ['mes', 'any', 'promo']);
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('plan_id')->references('id')->on('uploadplans')->onDelete('cascade');
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
        Schema::dropIfExists('uploadsizes_thumbnails');
        Schema::dropIfExists('uploadplans');
        Schema::dropIfExists('paymentstorage');

        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['uploadplan_id']);
            $table->dropColumn('uploadplan_id');
        });
        
    }
};
