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
        Schema::create('gifts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->integer('cost');
            $table->boolean('active')->default(true);
            $table->timestamps();
        });



        Schema::create('gifts0replay', function (Blueprint $table) {
            $table->id();           
            $table->text('message')->nullable(); // Message sent with the gift
            $table->foreignId('sender_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('receiver_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('gift_id')->constrained('gifts')->onDelete('cascade');
            $table->boolean('claimed')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gifts0replay');
        Schema::dropIfExists('gifts');
    }
};
