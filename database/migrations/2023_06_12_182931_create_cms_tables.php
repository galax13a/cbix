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
        Schema::create('crm_categors', function (Blueprint $table) {
            $table->id();
            $table->string('name');            
            $table->boolean('active')->default(false);
            $table->timestamps();
        });

        Schema::create('crm_pages', function (Blueprint $table) {
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
    
        Schema::create('crm_blogs', function (Blueprint $table) {
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
    
        Schema::create('crm_tags', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });
    
        Schema::create('crm_page_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('page_id')->constrained('crm_pages')->onDelete('cascade');
            $table->foreignId('tag_id')->constrained('crm_tags')->onDelete('cascade');
            $table->timestamps();
        });
    }    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crm_page_tag');
        Schema::dropIfExists('crm_tags');
        Schema::dropIfExists('crm_categors');
        Schema::dropIfExists('crm_blogs');
        Schema::dropIfExists('crm_pages');
    }
};
