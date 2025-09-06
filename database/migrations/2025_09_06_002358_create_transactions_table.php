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
      Schema::create('transactions', function (Blueprint $table) {
    $table->id();
    $table->string('transaction_number')->unique();

    $table->foreignId('salon_id')->constrained('salons')->cascadeOnDelete();
    $table->foreignId('branch_id')->constrained('salon_branches')->cascadeOnDelete();

    $table->unsignedBigInteger('customer_id')->nullable();
    $table->foreign('customer_id')->references('id')->on('customers')->onDelete('set null');

    $table->unsignedBigInteger('employee_id')->nullable();
    $table->foreign('employee_id')->references('id')->on('employees')->onDelete('set null');

    $table->unsignedBigInteger('appointment_id')->nullable();
    $table->foreign('appointment_id')->references('id')->on('appointments')->onDelete('set null');

    $table->enum('transaction_type', ['service', 'product', 'mixed'])->default('service');
    $table->dateTime('transaction_date');

    $table->decimal('subtotal', 12, 2)->default(0);
    $table->decimal('service_total', 12, 2)->default(0);
    $table->decimal('product_total', 12, 2)->default(0);
    $table->decimal('discount_amount', 12, 2)->default(0);
    $table->decimal('tax_amount', 12, 2)->default(0);
    $table->decimal('tip_amount', 12, 2)->default(0);
    $table->decimal('total_amount', 12, 2)->default(0);

    $table->enum('payment_status', ['unpaid', 'partially_paid', 'paid', 'refunded'])->default('unpaid');
    $table->text('notes')->nullable();

    $table->boolean('is_refunded')->default(false);
    $table->decimal('refunded_amount', 12, 2)->default(0);
    $table->dateTime('refunded_at')->nullable();

    $table->unsignedBigInteger('refunded_by')->nullable();
    $table->foreign('refunded_by')->references('id')->on('users')->onDelete('set null');

    $table->string('refund_reason')->nullable();
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};