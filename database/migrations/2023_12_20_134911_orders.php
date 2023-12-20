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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained();
            $table->integer('amount')->nullable()->unsigned();
            $table->integer('invoice_count')->nullable()->unsigned();
            $table->enum('status', ['CHECK_HAVING_ACCOUNT', 'OPENING_BANK_ACCOUNT']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
