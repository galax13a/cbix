<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCodeCodebackupShareToBiousersTable extends Migration
{
    public function up()
    {
        Schema::table('biousers', function (Blueprint $table) {
            $table->json('code')->nullable()->after('data');
            $table->json('codebackup')->nullable()->after('code');
            $table->string('share')->nullable()->after('codebackup');
        });
    }

    public function down()
    {
        Schema::table('biousers', function (Blueprint $table) {
            $table->dropColumn('code');
            $table->dropColumn('codebackup');
            $table->dropColumn('share');
        });
    }
}
