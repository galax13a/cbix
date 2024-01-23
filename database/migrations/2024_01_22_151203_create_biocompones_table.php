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
        Schema::create('biocompones', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('img')->nullable();
            $table->text('code');
            $table->text('js')->nullable();          
            $table->foreignId('biocategorcompone_id')->constrained('biocategorcompones');
            $table->boolean('active')->default(false);            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biocompones');
    }
};
