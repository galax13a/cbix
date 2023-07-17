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
        Schema::create('siteconfigs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('idioma')->nullable()->default('en');
            $table->boolean('crm')->nullable()->default(false); // si trabaja json o db
            $table->boolean('apps')->nullable()->default(false); // json o db
            $table->smallInteger('thumbnail'); /// size img defa
            $table->boolean('localimg')->nullable()->default(true);
            $table->boolean('s3amazon')->nullable()->default(false);
            $table->boolean('s3google')->nullable()->default(false); 
            $table->boolean('siteupkeep')->default(false);
            $table->text('code_google_anality')->nullable();
            $table->text('code_head_front')->nullable();
            $table->text('code_head_back')->nullable();
            $table->text('code_body_front')->nullable();        
            $table->timestamps();
      
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siteconfigs');
    }
};
