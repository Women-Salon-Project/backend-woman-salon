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
    Schema::create('invoices', function (Blueprint $table) {
    $table->id();
    $table->foreignId('transaction_id')->constrained('transactions')->cascadeOnDelete();
    $table->foreignId('salon_id')->constrained('salons')->cascadeOnDelete();
    $table->foreignId('branch_id')->constrained('salon_branches')->cascadeOnDelete();

    $table->string('invoice_number')->unique();
    $table->string('qr_code')->nullable();
    $table->dateTime('invoice_date');

    $table->decimal('subtotal', 12, 2)->default(0);
    $table->foreignId('discount_id')->nullable()->constrained('discount_codes')->nullOnDelete();
    $table->decimal('tax_amount', 12, 2)->default(0);
    $table->decimal('total_amount', 12, 2)->default(0);

    $table->foreignId('payment_id')->nullable()->constrained('payments')->nullOnDelete();
    $table->json('zatca_data')->nullable();
    $table->string('pdf_url')->nullable();

    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
