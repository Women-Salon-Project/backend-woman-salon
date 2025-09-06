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
            $table->foreignId('transaction_id')->constrained('transactions')->cascadeOnDelete();

            $table->decimal('amount', 12, 2);
            $table->enum('payment_method', ['cash', 'card', 'apple_pay', 'stc_pay', 'bank_transfer', 'online_gateway'])->default('cash');
            $table->string('reference_number')->nullable();
            $table->string('gateway_transaction_id')->nullable();
            $table->dateTime('payment_date');

            $table->enum('status', ['pending', 'successful', 'failed', 'refunded'])->default('pending');
            $table->json('gateway_response')->nullable();
            $table->decimal('processing_fee', 12, 2)->default(0);

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
