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
        Schema::create('bios', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('link')->default('0')->nullable();
            $table->text('codex');
            $table->float('value')->nullable()->default(1.90);
            $table->boolean('active')->default(0);
            $table->unsignedBigInteger('pagemaster_id'); // Define la columna para la relación
            $table->foreign('pagemaster_id')
                ->references('id')
                ->on('pagemasters')
                ->onDelete('cascade'); // Esto establece la relación con la tabla pagemasters
                $table->unsignedBigInteger('biotag_id'); // Define la columna para la relación
                $table->foreign('biotag_id')
                    ->references('id')
                    ->on('biotags')
                    ->onDelete('cascade'); // Esto establece la relación con la tabla pagemasters    
                
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bios');
    }
};
