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
        //
        Schema::table('adminpremiums', function (Blueprint $table) {
            $table->integer('profiles')->default(0)->after('bots');
            $table->integer('tokens')->default(0)->after('profiles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('adminpremiums', function (Blueprint $table) {
            $table->dropColumn(['profiles', 'tokens']);
        });
    }
};
