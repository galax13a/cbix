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
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->text('description');
            $table->enum('status', ['open', 'in_progress', 'closed'])->default('open');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('reply_supports', function (Blueprint $table) {
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
        Schema::dropIfExists('reply_supports');
        Schema::dropIfExists('supports');
    }
}
