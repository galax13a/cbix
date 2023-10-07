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
        Schema::create('admincontacts', function (Blueprint $table) {
            $table->id();            
            $table->string('name');
            $table->string('nick_name')->nullable();
            $table->unsignedBigInteger('admincontacttag_id');            
            $table->foreign('admincontacttag_id')->references('id')->on('admincontacttags');    
            $table->boolean('active');
            $table->string('email')->default(1)->nullable();
            $table->date('birthday')->nullable();
            $table->string('phone_code')->nullable();
            $table->string('whatsapp')->nullable();           
            $table->string('skype')->nullable();
            $table->string('telegram')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('facebook')->nullable();
            $table->string('snapchat')->nullable();
            $table->string('x')->nullable();            
            $table->string('discord')->nullable();
            $table->string('other')->nullable();
            $table->foreignId('user_id')->constrained('users');
   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admincontacts');
    }
};
