<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        // Apps Categors Table
        Schema::create('apps0categors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('active')->default(true);
            $table->timestamps();
        });

        // Tags Table
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        // Apps Table
        Schema::create('apps', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->text('es')->nullable();
            $table->text('en');
            $table->string('version')->nullable();
            $table->enum('menu', ['front', 'admin'])->nullable()->default('admin');
            $table->string('url')->nullable();
            $table->enum('target', ['parent', 'new'])->nullable();
            $table->string('icon')->nullable();
            $table->string('image')->nullable();
            $table->string('download_url')->nullable();
            $table->boolean('is_approved')->default(false);
            $table->boolean('install')->default(false)->nullable();
            $table->foreignId('apps_categors_id')->constrained('apps0categors')->onDelete('cascade');
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->boolean('active')->default(false);
            $table->integer('downloads')->default(100)->nullable();
            $table->integer('downloads_bot')->default(0)->nullable();
            $table->timestamps();
        });

        // App Comments Table
        Schema::create('app0comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('app_id')->constrained('apps')->onDelete('cascade');
            $table->text('comment');
            $table->timestamps();
        });


        // App Authors Table
        Schema::create('apps0authors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('app_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });


        // App Installs Table
        Schema::create('apps0installs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('app_id')->constrained()->onDelete('cascade');
            $table->boolean('active')->default(false);
            $table->timestamps();
        });

        // App Tag Table
        Schema::create('apps0tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('app_id')->constrained()->onDelete('cascade');
            $table->foreignId('tag_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }
};
