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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('command');
            $table->enum('interval', ['minutely', 'every_5_minutes', 'every_30_minutes', 'hourly', 'daily', 'weekly', 'biweekly', 'monthly']);
            $table->timestamp('last_executed_at')->nullable();
            $table->enum('status', ['start', 'stop'])->default('stop');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
