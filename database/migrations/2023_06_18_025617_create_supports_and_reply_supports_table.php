<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupportsAndReplySupportsTable extends Migration
{
    public function up()
    {
        Schema::create('supports', function (Blueprint $table) {
            $table->id();            
            $table->string('name');
            $table->string('type_support')->nullable()->default('other');
            $table->unsignedBigInteger('sent_by');
            $table->unsignedBigInteger('support_id')->nullable();
            $table->text('message');
            $table->text('reply_message')->nullable();
            $table->enum('status', ['pending', 'in_progress', 'resolved'])->default('pending');
            $table->string('priority')->default('low');
            $table->timestamps();            
            // Relaciones
            $table->foreign('sent_by')->references('id')->on('users');
            $table->foreign('support_id')->references('id')->on('users');
        });

        Schema::create('reply0supports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('support_id');
            $table->unsignedBigInteger('user_id');
            $table->text('content');
            $table->timestamps();

            $table->foreign('support_id')->references('id')->on('supports')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('reply0supports');
        Schema::dropIfExists('supports');
    }
}
