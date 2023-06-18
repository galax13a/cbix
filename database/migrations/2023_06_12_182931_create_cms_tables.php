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
        Schema::create('crm0categors', function (Blueprint $table) {
            $table->id();
            $table->string('name');            
            $table->boolean('active')->default(false);
            $table->timestamps();
        });

        Schema::create('crm0pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->nullable()->unique();
            $table->text('content');
            $table->boolean('active')->default(true);
            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->string('seo_keywords')->nullable();
            $table->boolean('is_visible')->nullable()->default(true);
            $table->enum('type_page', ['content', 'url', 'iframe'])->default('content');     
            $table->enum('menutab', ['admin', 'guest', '/'])->default('/'); // front es guest / es index
            $table->json('extra_url')->nullable();       
            $table->timestamps();
        });
    
        Schema::create('crm0blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->nullable()->unique();
            $table->text('content');
            $table->boolean('active')->default(true);
            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->string('seo_keywords')->nullable();
            $table->boolean('is_visible')->nullable()->default(true);     
            $table->timestamps();
        });
    
        Schema::create('crm0tags', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });
    
        Schema::create('crm0page0tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('page_id')->constrained('crm0pages')->onDelete('cascade');
            $table->foreignId('tag_id')->constrained('crm0tags')->onDelete('cascade');
            $table->timestamps();
        });
    }    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crm0page0tag');
        Schema::dropIfExists('crm0tags');
        Schema::dropIfExists('crm0categors');
        Schema::dropIfExists('crm0blogs');
        Schema::dropIfExists('crm0pages');
    }
};
