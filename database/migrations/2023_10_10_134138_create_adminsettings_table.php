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
        Schema::create('adminsettings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name',66);
            $table->enum('yoursex', ['Male', 'Female', 'Transgender', 'bi sexual', 'female gay', 'male gay', 'Genderfluid', 'Intersex', 'Gender not binary'])->nullable();
            $table->string('pic')->nullable();
            $table->string('preferred_language')->nullable()->defaultValue('en');
            $table->string('country',66);
            $table->string('phone_number',33);
            $table->integer('bots')->nullable()->defaultValue(25);
            $table->unsignedBigInteger('pagemaster_id')->nullable();
            $table->unsignedBigInteger('role_id')->nullable();
            // Claves foráneas
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('pagemaster_id')->references('id')->on('pagemasters')->onDelete('set null');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('set null');
            $table->timestamps();
     
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adminsettings');
    }
};
