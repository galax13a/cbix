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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount', 10, 2)->default(0);
            $table->integer('tokens');
            $table->date('purchase_date')->nullable();
            $table->foreignId('user_id')->constrained();
            $table->string('email');
            $table->foreignId('adminpremium_id')->constrained();
            $table->unsignedBigInteger('paymentoption_id')->nullable()->after('adminpremium_id');
            $table->foreign('paymentoption_id')->references('id')->on('paymentoptions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
