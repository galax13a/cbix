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
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('premium')->default(false);
            $table->integer('profiles')->default(3);
            $table->integer('guest')->default(100);
            $table->dateTime('subscription_end')->nullable();

            $table->unsignedBigInteger('adminpremium_id')->nullable(); 

            $table->foreign('adminpremium_id')
                ->references('id')
                ->on('adminpremiums')
                ->onDelete('cascade');            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('premium');
            $table->dropColumn('profiles');
            $table->dropColumn('adminpremium_id');
            $table->dropColumn('subscription_end');
        });
    }
};
