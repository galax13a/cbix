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
        Schema::create('pagemasters', function (Blueprint $table) {
            $table->id();        
            $table->string('name')->index();
            $table->string('url');
            $table->string('afiliate')->nullable();
            $table->string('logo')->nullable();
            $table->string('api')->nullable();
            $table->string('api2')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagemasters');
    }
};
